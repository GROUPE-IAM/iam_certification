/**
 * IAM Certifications — interactions front.
 * - Barre de filtres (recherche, format, type, thématique) : masque/affiche les cartes côté client.
 * - Page de détail : navigation collante, sessions, fenêtre vidéo, barre mobile.
 */
(function () {
	'use strict';

	/**
	 * Barre de filtres : recherche, format, type et thématiques se combinent.
	 * Plusieurs thématiques peuvent être cochées (une formation passe si elle
	 * relève de l'une d'elles) ; seules les 3 plus fournies sont visibles
	 * d'office, les autres s'ajoutent depuis la fenêtre « + Thématiques ».
	 * Chaque compteur indique ce qu'on obtiendrait en cliquant (les autres
	 * filtres restant actifs) ; un choix qui ne donnerait rien est grisé.
	 * L'état est gardé dans l'URL (?format=…&theme=…&type=…&q=…) pour
	 * partager une sélection.
	 */
	function sansAccents(texte) {
		return (texte || '').toLowerCase().normalize('NFD').replace(/[̀-ͯ]/g, '');
	}

	function initFilters(root) {
		var bar = root.querySelector('[data-iam-filtre]');
		if (!bar) {
			return;
		}

		var cards = Array.prototype.slice.call(root.querySelectorAll('.iam-cert-card'));
		var boutons = Array.prototype.slice.call(bar.querySelectorAll('[data-filtre]'));
		var champ = bar.querySelector('[data-filtre-q]');
		var total = bar.querySelector('[data-filtre-total]');
		var mot = bar.querySelector('[data-filtre-mot]');
		var reset = Array.prototype.slice.call(root.querySelectorAll('[data-filtre-reset]'));
		var vide = root.querySelector('.iam-filtre__vide');
		var modes = bar.querySelector('.iam-filtre__modes');
		var curseur = bar.querySelector('.iam-filtre__curseur');
		var reduit = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		var params = { mode: 'format', theme: 'theme', type: 'type' };
		var modale = bar.querySelector('[data-filtre-modale]');
		var autres = bar.querySelector('[data-filtre-autres]');
		var totalModale = bar.querySelector('[data-filtre-total-modale]');
		var motModale = bar.querySelector('[data-filtre-mot-modale]');
		var puces = Array.prototype.slice.call(bar.querySelectorAll('.iam-filtre__theme[data-valeur]:not([data-valeur=""])'));
		var etat = { mode: '', theme: [], type: '', q: '' };

		var fiches = cards.map(function (card) {
			return {
				el: card,
				mode: card.getAttribute('data-mode') || '',
				theme: card.getAttribute('data-domaine') || '',
				type: card.getAttribute('data-type') || '',
				texte: sansAccents(card.getAttribute('data-recherche') || card.textContent)
			};
		});

		function correspond(f, e, sauf) {
			if (sauf !== 'mode' && e.mode && f.mode !== e.mode) {
				return false;
			}
			if (sauf !== 'theme' && e.theme.length && e.theme.indexOf(f.theme) < 0) {
				return false;
			}
			if (sauf !== 'type' && e.type && f.type !== e.type) {
				return false;
			}
			if (e.q) {
				return sansAccents(e.q).split(/\s+/).every(function (m) {
					return f.texte.indexOf(m) > -1;
				});
			}
			return true;
		}

		function estActif(cle, valeur) {
			if ('theme' === cle) {
				return valeur ? etat.theme.indexOf(valeur) > -1 : !etat.theme.length;
			}
			return etat[cle] === valeur;
		}

		function placerCurseur() {
			if (!modes || !curseur) {
				return;
			}
			var actif = modes.querySelector('[aria-pressed="true"]');
			if (!actif) {
				return;
			}
			curseur.style.width = actif.offsetWidth + 'px';
			curseur.style.transform = 'translateX(' + actif.offsetLeft + 'px)';
		}

		function animerTotal(cible) {
			var depart = parseInt(total.textContent, 10) || 0;
			if (reduit || depart === cible) {
				total.textContent = cible;
				return;
			}
			var t0 = null;
			function pas(t) {
				t0 = t0 || t;
				var k = Math.min(1, (t - t0) / 320);
				total.textContent = Math.round(depart + (cible - depart) * (1 - Math.pow(1 - k, 3)));
				if (k < 1) {
					window.requestAnimationFrame(pas);
				}
			}
			window.requestAnimationFrame(pas);
		}

		function memoriser() {
			if (!window.history || !window.history.replaceState || !window.URLSearchParams) {
				return;
			}
			var url = new URL(window.location.href);
			Object.keys(params).forEach(function (cle) {
				var v = 'theme' === cle ? etat.theme.join(',') : etat[cle];
				if (v) {
					url.searchParams.set(params[cle], v);
				} else {
					url.searchParams.delete(params[cle]);
				}
			});
			if (etat.q) {
				url.searchParams.set('q', etat.q);
			} else {
				url.searchParams.delete('q');
			}
			window.history.replaceState(null, '', url.toString());
		}

		function appliquer(anime) {
			var visibles = 0;
			var rang = 0;

			fiches.forEach(function (f) {
				var ok = correspond(f, etat);
				f.el.classList.toggle('is-hidden', !ok);
				if (ok) {
					visibles++;
					if (anime && !reduit) {
						f.el.style.animationDelay = Math.min(rang, 8) * 35 + 'ms';
						f.el.classList.remove('is-entering');
						void f.el.offsetWidth;
						f.el.classList.add('is-entering');
					}
					rang++;
				}
			});

			// Compteurs à facettes : ce que donnerait chaque choix.
			boutons.forEach(function (b) {
				var cle = b.getAttribute('data-filtre');
				var valeur = b.getAttribute('data-valeur');
				var n = fiches.filter(function (f) {
					return correspond(f, etat, cle) && (!valeur || f[cle] === valeur);
				}).length;
				var badge = b.querySelector('[data-n]');
				if (badge) {
					badge.textContent = n;
				}
				var actif = estActif(cle, valeur);
				if (!b.hasAttribute('data-filtre-garde')) {
					b.setAttribute('aria-pressed', actif ? 'true' : 'false');
				}
				b.disabled = !!valeur && n === 0 && !actif;
			});

			// Une thématique hors des 3 d'office n'apparaît dans la barre que cochée.
			var horsBarre = 0;
			puces.forEach(function (p) {
				var visible = p.hasAttribute('data-en-vue') || etat.theme.indexOf(p.getAttribute('data-valeur')) > -1;
				p.hidden = !visible;
				p.classList.toggle('is-ajoutee', !p.hasAttribute('data-en-vue') && visible);
				if (!visible) {
					horsBarre++;
				}
			});
			if (autres) {
				autres.textContent = horsBarre || '';
			}

			// Mode groupé : une section sans carte visible disparaît.
			Array.prototype.forEach.call(root.querySelectorAll('.iam-cert-section'), function (section) {
				section.hidden = !section.querySelector('.iam-cert-card:not(.is-hidden)');
			});

			animerTotal(visibles);
			if (mot) {
				mot.textContent = visibles > 1 ? 'formations' : 'formation';
			}
			if (totalModale) {
				totalModale.textContent = visibles;
				motModale.textContent = visibles > 1 ? 'formations' : 'formation';
			}
			if (vide) {
				vide.hidden = visibles > 0;
			}
			var filtre = !!(etat.mode || etat.theme.length || etat.type || etat.q);
			reset.forEach(function (r) {
				if (r.classList.contains('iam-filtre__reset')) {
					r.hidden = !filtre;
				}
			});
			root.classList.toggle('is-filtre', filtre);
			placerCurseur();
		}

		bar.addEventListener('click', function (event) {
			var b = event.target.closest('[data-filtre]');
			if (!b || b.disabled) {
				return;
			}
			var cle = b.getAttribute('data-filtre');
			var valeur = b.getAttribute('data-valeur');
			if ('theme' === cle) {
				var i = etat.theme.indexOf(valeur);
				if (!valeur) {
					etat.theme = [];
				} else if (i > -1) {
					etat.theme.splice(i, 1);
				} else {
					etat.theme.push(valeur);
				}
			} else {
				// Recliquer sur un choix actif le désactive.
				etat[cle] = etat[cle] === valeur ? '' : valeur;
			}
			appliquer(true);
			memoriser();
		});

		reset.forEach(function (r) {
			r.addEventListener('click', function () {
				etat = { mode: '', theme: [], type: '', q: '' };
				if (champ) {
					champ.value = '';
				}
				appliquer(true);
				memoriser();
			});
		});

		if (champ) {
			var minuteur;
			champ.addEventListener('input', function () {
				window.clearTimeout(minuteur);
				minuteur = window.setTimeout(function () {
					etat.q = champ.value.trim();
					appliquer(true);
					memoriser();
				}, 140);
			});
			champ.addEventListener('keydown', function (e) {
				if ('Escape' === e.key) {
					champ.value = '';
					etat.q = '';
					appliquer(true);
					memoriser();
				}
			});
			// « / » place le curseur dans la recherche, comme sur les sites modernes.
			document.addEventListener('keydown', function (e) {
				var cible = e.target;
				if ('/' !== e.key || e.ctrlKey || e.metaKey || /input|textarea|select/i.test(cible.tagName) || cible.isContentEditable) {
					return;
				}
				e.preventDefault();
				champ.focus();
			});
		}

		// État initial lu dans l'URL.
		if (window.URLSearchParams) {
			var lu = new URLSearchParams(window.location.search);
			var existe = function (cle, v) {
				return !!v && !!bar.querySelector('[data-filtre="' + cle + '"][data-valeur="' + v.replace(/"/g, '') + '"]');
			};
			Object.keys(params).forEach(function (cle) {
				var v = lu.get(params[cle]) || '';
				if ('theme' === cle) {
					etat.theme = v.split(',').filter(function (t) {
						return existe('theme', t);
					});
				} else if (existe(cle, v)) {
					etat[cle] = v;
				}
			});
			etat.q = lu.get('q') || '';
			if (champ) {
				champ.value = etat.q;
			}
		}

		// Fenêtre « + Thématiques » : les choix s'appliquent en direct.
		if (modale && modale.showModal) {
			bar.addEventListener('click', function (e) {
				if (e.target.closest('[data-filtre-ouvrir]')) {
					modale.showModal();
				} else if (e.target.closest('[data-filtre-fermer]')) {
					modale.close();
				}
			});
			// Un clic sur le voile (hors de la fenêtre) la ferme.
			modale.addEventListener('click', function (e) {
				if (e.target === modale) {
					modale.close();
				}
			});
		} else if (modale) {
			// Navigateur sans <dialog> : toutes les thématiques restent dans la barre.
			puces.forEach(function (p) {
				p.setAttribute('data-en-vue', '');
			});
			var plus = bar.querySelector('[data-filtre-ouvrir]');
			if (plus) {
				plus.hidden = true;
			}
		}

		window.addEventListener('resize', placerCurseur);
		appliquer(false);
		bar.classList.add('is-pret');
	}

	/**
	 * Injecte le nom de la formation dans le formulaire IAM Leads embarqué,
	 * pour qu'un lead soit rattaché à SA formation (et à sa session).
	 * - remplit le champ caché « certification » (mappé côté IAM Leads sur « programme ») ;
	 * - renseigne utm_campaign avec le slug uniquement s'il est vide
	 *   (on ne remplace jamais une campagne réelle d'où viendrait le visiteur).
	 */
	function setFormProgramme(session) {
		document.querySelectorAll('.iam-cert-form[data-cert-title]').forEach(function (wrap) {
			var title = wrap.getAttribute('data-cert-title') || '';
			var form = wrap.querySelector('.iam-form');
			if (!form) {
				return;
			}
			var champ = form.querySelector('[name="certification"]');
			if (champ) {
				champ.value = session ? title + ' — ' + session : title;
			}
		});
	}

	function initFormBridge() {
		setFormProgramme('');
		document.querySelectorAll('.iam-cert-form[data-cert-slug]').forEach(function (wrap) {
			var utm = wrap.querySelector('.iam-form [name="utm_campaign"]');
			if (utm && !utm.value) {
				utm.value = wrap.getAttribute('data-cert-slug') || '';
			}
		});
	}

	/**
	 * Séminaire : un clic sur une session la retient pour l'inscription
	 * (affichée au-dessus du formulaire et transmise avec le lead).
	 */
	function initSessions() {
		var label = document.querySelector('[data-iam-session-label]');
		document.addEventListener('click', function (e) {
			var ticket = e.target.closest('[data-iam-session]');
			if (!ticket) {
				return;
			}
			var session = ticket.getAttribute('data-iam-session') || '';
			setFormProgramme(session);
			if (label) {
				label.textContent = 'Session choisie : ' + session;
				label.hidden = false;
			}
		});
	}

	/**
	 * Navigation collante : lien actif selon la section visible, barre de
	 * progression de lecture, bouton d'action affiché une fois la barre collée.
	 */
	function initPageNav() {
		var nav = document.querySelector('[data-iam-nav]');
		if (!nav) {
			return;
		}
		var links = Array.prototype.slice.call(nav.querySelectorAll('a[href^="#"]:not(.iam-lp-btn)'));
		var progress = nav.querySelector('[data-iam-progress]');
		var page = nav.closest('.iam-lp');
		var ticking = false;

		var targets = links.map(function (a) {
			return document.getElementById(a.getAttribute('href').slice(1));
		});

		/* Header du thème fixé en haut (ex. réapparition au scroll) : on décale
		 * la barre pour qu'elle reste visible juste en dessous. */
		function siteHeaderBottom() {
			var x = Math.round(window.innerWidth / 2);
			// Sous la barre d'admin WordPress si elle est là (déjà prise en compte en CSS).
			var bar = document.getElementById('wpadminbar');
			var top = bar && getComputedStyle(bar).position === 'fixed' ? bar.offsetHeight : 0;
			var el = document.elementFromPoint(x, top + 2);
			while (el && el !== document.body) {
				if (page && page.contains(el)) {
					return 0;
				}
				var pos = getComputedStyle(el).position;
				if (pos === 'fixed' || pos === 'sticky') {
					var r = el.getBoundingClientRect();
					return r.top <= top + 1 && r.bottom > top && r.bottom < window.innerHeight / 3 ? Math.round(r.bottom - top) : 0;
				}
				el = el.parentElement;
			}
			return 0;
		}

		function update() {
			ticking = false;
			if (page) {
				var offset = 0;
				nav.style.visibility = 'hidden';
				offset = siteHeaderBottom();
				nav.style.visibility = '';
				page.style.setProperty('--site-header', offset + 'px');
			}
			var navRect = nav.getBoundingClientRect();
			var stuck = navRect.top <= parseFloat(getComputedStyle(nav).top) + 1;
			nav.classList.toggle('is-stuck', stuck);

			var line = navRect.bottom + 80;
			var current = -1;
			targets.forEach(function (t, i) {
				if (t && t.getBoundingClientRect().top <= line) {
					current = i;
				}
			});
			links.forEach(function (a, i) {
				var on = i === current;
				if (on && !a.classList.contains('is-active') && a.scrollIntoView) {
					var list = a.parentNode.parentNode;
					list.scrollTo({ left: a.offsetLeft - 16, behavior: 'smooth' });
				}
				a.classList.toggle('is-active', on);
			});

			if (progress && page) {
				var r = page.getBoundingClientRect();
				var total = r.height - window.innerHeight;
				var ratio = total > 0 ? Math.min(1, Math.max(0, -r.top / total)) : 0;
				progress.style.transform = 'scaleX(' + ratio + ')';
			}
		}

		window.addEventListener('scroll', function () {
			if (!ticking) {
				ticking = true;
				window.requestAnimationFrame(update);
			}
		}, { passive: true });
		window.addEventListener('resize', update);
		update();
	}

	/**
	 * Fenêtre vidéo : l'iframe n'est créée qu'à l'ouverture (page plus légère)
	 * et détruite à la fermeture (la vidéo s'arrête).
	 */
	function initVideo() {
		var dialog = document.querySelector('.iam-cert-video');
		var openBtn = document.querySelector('[data-iam-video-open]');
		if (!dialog || !openBtn) {
			return;
		}
		var frame = dialog.querySelector('.iam-cert-video__frame');
		var tpl = dialog.querySelector('.iam-cert-video__tpl');
		var closeBtn = dialog.querySelector('[data-iam-video-close]');

		function open() {
			frame.innerHTML = tpl ? tpl.innerHTML : '';
			var video = frame.querySelector('video');
			if (typeof dialog.showModal === 'function') {
				dialog.showModal();
			} else {
				dialog.setAttribute('open', '');
			}
			if (video) {
				video.play().catch(function () {});
			}
		}

		function close() {
			if (typeof dialog.close === 'function') {
				dialog.close();
			} else {
				dialog.removeAttribute('open');
			}
		}

		openBtn.addEventListener('click', open);
		if (closeBtn) {
			closeBtn.addEventListener('click', close);
		}
		// Clic sur le fond sombre = fermeture.
		dialog.addEventListener('click', function (e) {
			if (e.target === dialog) {
				close();
			}
		});
		dialog.addEventListener('close', function () {
			frame.innerHTML = '';
			openBtn.focus();
		});
	}

	/**
	 * Barre d'action fixée en bas sur mobile : visible une fois le hero
	 * dépassé, masquée quand le formulaire est à l'écran.
	 */
	function initStickyBar() {
		var bar = document.querySelector('.iam-lp-mbar');
		var hero = document.querySelector('.iam-lp-hero');
		var form = document.getElementById('iam-candidature');
		if (!bar || !hero || !form || !('IntersectionObserver' in window)) {
			return;
		}
		bar.hidden = false;

		var heroVisible = true;
		var formVisible = false;

		function update() {
			bar.classList.toggle('is-shown', !heroVisible && !formVisible);
		}

		new IntersectionObserver(function (entries) {
			heroVisible = entries[0].isIntersecting;
			update();
		}).observe(hero);

		new IntersectionObserver(function (entries) {
			formVisible = entries[0].isIntersecting;
			update();
		}, { rootMargin: '0px 0px -20% 0px' }).observe(form);
	}

	/**
	 * Les formulaires multi-étapes d'IAM Leads (< 1.5.3) font défiler la page
	 * jusqu'au formulaire et y placent le focus dès le chargement. Sur la page
	 * de détail, le visiteur doit arriver sur le hero : si le focus a été posé
	 * dans le formulaire sans action de sa part (et sans ancre dans l'URL), on
	 * le retire et on revient en haut.
	 */
	function guardInitialScroll() {
		if (window.location.hash || !document.querySelector('.iam-lp')) {
			return;
		}
		var touched = false;
		['wheel', 'touchstart', 'keydown', 'mousedown'].forEach(function (type) {
			window.addEventListener(type, function () {
				touched = true;
			}, { once: true, passive: true });
		});

		function restore() {
			var active = document.activeElement;
			if (touched || !active || !active.closest || !active.closest('.iam-form-wrap')) {
				return;
			}
			active.blur();
			window.scrollTo({ top: 0, behavior: 'instant' });
		}

		[0, 150, 500].forEach(function (delay) {
			window.setTimeout(restore, delay);
		});
	}

	function init() {
		document.querySelectorAll('.iam-cert').forEach(initFilters);
		guardInitialScroll();
		initFormBridge();
		initSessions();
		initPageNav();
		initVideo();
		initStickyBar();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
