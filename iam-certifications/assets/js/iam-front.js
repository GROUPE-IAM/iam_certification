/**
 * IAM Certifications — interactions front.
 * - Filtre par domaine (barre de boutons) : masque/affiche les cartes côté client.
 * - Page de détail : blocs dépliables, fenêtre vidéo, barre d'action mobile.
 */
(function () {
	'use strict';

	function initFilters(root) {
		var bar = root.querySelector('.iam-cert-filters');
		if (!bar) {
			return;
		}

		var buttons = bar.querySelectorAll('.iam-cert-filter');
		var cards = root.querySelectorAll('.iam-cert-card');

		bar.addEventListener('click', function (event) {
			var btn = event.target.closest('.iam-cert-filter');
			if (!btn) {
				return;
			}

			var domaine = btn.getAttribute('data-domaine') || '';

			buttons.forEach(function (b) {
				b.classList.toggle('is-active', b === btn);
			});

			cards.forEach(function (card) {
				var match = !domaine || card.getAttribute('data-domaine') === domaine;
				card.classList.toggle('is-hidden', !match);
			});
		});
	}

	/**
	 * Injecte le nom de la certification dans le formulaire IAM Leads embarqué,
	 * pour qu'un lead soit rattaché à SA certification.
	 * - remplit le champ caché « certification » (mappé côté IAM Leads sur « programme ») ;
	 * - renseigne utm_campaign avec le slug uniquement s'il est vide
	 *   (on ne remplace jamais une campagne réelle d'où viendrait le visiteur).
	 */
	function initFormBridge() {
		document.querySelectorAll('.iam-cert-form[data-cert-title]').forEach(function (wrap) {
			var title = wrap.getAttribute('data-cert-title') || '';
			var slug = wrap.getAttribute('data-cert-slug') || '';
			var form = wrap.querySelector('.iam-form');
			if (!form) {
				return;
			}

			var champ = form.querySelector('[name="certification"]');
			if (champ) {
				champ.value = title;
			}

			var utm = form.querySelector('[name="utm_campaign"]');
			if (utm && !utm.value) {
				utm.value = slug;
			}
		});
	}

	/**
	 * Blocs dépliables. Sans JS ils restent ouverts (contenu toujours lisible) :
	 * on les replie ici, puis chaque clic ouvre / ferme son bloc.
	 */
	function initAccordions() {
		document.querySelectorAll('.iam-acc').forEach(function (acc) {
			var btn = acc.querySelector('.iam-acc__btn');
			if (!btn) {
				return;
			}
			acc.classList.add('is-collapsed');
			btn.setAttribute('aria-expanded', 'false');

			btn.addEventListener('click', function () {
				var open = btn.getAttribute('aria-expanded') === 'true';
				btn.setAttribute('aria-expanded', open ? 'false' : 'true');
				acc.classList.toggle('is-collapsed', open);
			});
		});

		// Lien direct vers un bloc (ex. #iam-acc-programme) : on l'ouvre.
		if (window.location.hash) {
			var target = document.getElementById(window.location.hash.slice(1));
			var acc = target && target.closest ? target.closest('.iam-acc') : null;
			if (acc) {
				acc.classList.remove('is-collapsed');
				acc.querySelector('.iam-acc__btn').setAttribute('aria-expanded', 'true');
			}
		}
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
	 * Barre « Candidater » fixée en bas sur mobile : visible une fois le hero
	 * dépassé, masquée quand le formulaire est à l'écran.
	 */
	function initStickyBar() {
		var bar = document.querySelector('.iam-cert-stickybar');
		var hero = document.querySelector('.iam-cert-hero');
		var form = document.getElementById('iam-cert-candidature');
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

	function init() {
		document.querySelectorAll('.iam-cert').forEach(initFilters);
		initFormBridge();
		initAccordions();
		initVideo();
		initStickyBar();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
