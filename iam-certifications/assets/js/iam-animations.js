/**
 * IAM Certifications — animations GSAP (front).
 * Amélioration progressive : si GSAP est absent ou si l'utilisateur préfère
 * moins d'animations, la page reste parfaitement lisible (états au repos visibles).
 */
(function () {
	'use strict';

	var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	if (reduce || !window.gsap) {
		return;
	}

	var gsap = window.gsap;
	var ST = window.ScrollTrigger;
	var hasST = !!ST;
	if (hasST) {
		gsap.registerPlugin(ST);
	}
	var fine = window.matchMedia && window.matchMedia('(pointer: fine)').matches;

	function st(trigger, start) {
		return hasST ? { trigger: trigger, start: start || 'top 85%', once: true } : undefined;
	}

	function $$(sel, ctx) {
		return Array.prototype.slice.call((ctx || document).querySelectorAll(sel));
	}

	/* Liste : apparition en cascade des cartes. */
	function animateList() {
		$$('.iam-cert-grid').forEach(function (grid) {
			var cards = grid.querySelectorAll('.iam-cert-card');
			if (!cards.length) {
				return;
			}
			gsap.from(cards, {
				opacity: 0,
				y: 26,
				duration: 0.6,
				ease: 'power2.out',
				stagger: 0.07,
				scrollTrigger: st(grid)
			});
		});
	}

	/* Compteur de 0 à la valeur finale. */
	function countUp(el, delay) {
		var end = parseInt(el.getAttribute('data-iam-count'), 10) || 0;
		var obj = { v: 0 };
		el.textContent = '0';
		return gsap.to(obj, {
			v: end,
			duration: 1.6,
			delay: delay || 0,
			ease: 'power3.out',
			onUpdate: function () {
				el.textContent = Math.round(obj.v);
			}
		});
	}

	/* ------------------------------------------------------------------
	 * Page de détail
	 * ---------------------------------------------------------------- */
	function animateLanding(page) {
		page.classList.add('is-animated');

		/* Hero : entrée orchestrée. */
		var hero = page.querySelector('.iam-lp-hero');
		if (hero) {
			var q = function (sel) {
				return hero.querySelectorAll(sel);
			};
			var tl = gsap.timeline({ defaults: { ease: 'expo.out' } });
			if (q('.iam-lp-hero__img').length) {
				tl.from(q('.iam-lp-hero__img'), { scale: 1.18, duration: 2.4, ease: 'power2.out' }, 0);
			}
			tl.from(q('.iam-lp-crumbs, .iam-lp-type'), { opacity: 0, y: 16, duration: 0.8, stagger: 0.08 }, 0.15)
				.from(q('.iam-w > span'), { yPercent: 110, rotate: 4, duration: 1.1, stagger: 0.06 }, 0.25)
				.from(q('.iam-lp-hero__sub'), { opacity: 0, y: 20, duration: 0.9 }, 0.55)
				.from(q('.iam-lp-hero__lead'), { opacity: 0, y: 22, duration: 0.9 }, 0.6)
				.from(q('.iam-lp-hero__ctas > *'), { opacity: 0, y: 18, duration: 0.8, stagger: 0.1 }, 0.75)
				.from(q('.iam-lp-fiche'), { opacity: 0, y: 50, rotateX: -12, duration: 1.2 }, 0.5)
				.from(q('.iam-lp-fiche__row'), { opacity: 0, x: 18, duration: 0.6, stagger: 0.06 }, 0.85)
				.from(q('.iam-lp-kpi'), { opacity: 0, y: 26, duration: 0.8, stagger: 0.1 }, 0.9);

			$$('.iam-lp-kpi [data-iam-count]', hero).forEach(function (el, i) {
				countUp(el, 1 + i * 0.1);
			});

			// Parallaxe douce du fond pendant le défilement.
			if (hasST && q('.iam-lp-hero__img').length) {
				gsap.to(q('.iam-lp-hero__img'), {
					yPercent: 12,
					ease: 'none',
					scrollTrigger: { trigger: hero, start: 'top top', end: 'bottom top', scrub: true }
				});
			}
		}

		/* Titres de section et groupes en cascade. */
		$$('[data-iam-reveal]', page).forEach(function (el) {
			gsap.fromTo(el, { opacity: 0, y: 36 }, { opacity: 1, y: 0, duration: 1, ease: 'expo.out', scrollTrigger: st(el) });
		});
		$$('[data-iam-stagger]', page).forEach(function (group) {
			gsap.fromTo(group.children, { opacity: 0, y: 40 }, {
				opacity: 1,
				y: 0,
				duration: 0.9,
				ease: 'expo.out',
				stagger: 0.08,
				scrollTrigger: st(group, 'top 88%')
			});
		});

		/* Parcours : la frise se remplit au fil du défilement. */
		var path = page.querySelector('[data-iam-path]');
		var fill = page.querySelector('[data-iam-path-fill]');
		if (path && fill && hasST) {
			gsap.to(fill, {
				scaleY: 1,
				ease: 'none',
				scrollTrigger: { trigger: path, start: 'top 65%', end: 'bottom 65%', scrub: 0.6 }
			});
			$$('.iam-lp-step', path).forEach(function (step) {
				ST.create({
					trigger: step,
					start: 'top 65%',
					onEnter: function () {
						step.classList.add('is-reached');
					},
					onLeaveBack: function () {
						step.classList.remove('is-reached');
					}
				});
				gsap.from(step, { opacity: 0, x: 40, duration: 0.9, ease: 'expo.out', scrollTrigger: st(step, 'top 90%') });
			});
		}

		/* Jauge de pratique + compteur associé. */
		$$('[data-iam-ring]', page).forEach(function (ring) {
			var tile = ring.closest('.iam-lp-tile');
			var counter = tile ? tile.querySelector('[data-iam-count]') : null;
			var p = parseFloat(getComputedStyle(ring).getPropertyValue('--p')) || 0;
			gsap.fromTo(ring, { strokeDasharray: '0 100' }, {
				strokeDasharray: p + ' 100',
				duration: 1.8,
				ease: 'power3.out',
				scrollTrigger: st(ring, 'top 80%'),
				onStart: function () {
					if (counter) {
						countUp(counter);
					}
				}
			});
		});

		/* Image « Pour qui » : parallaxe interne. */
		$$('[data-iam-parallax] img', page).forEach(function (img) {
			if (!hasST) {
				return;
			}
			gsap.fromTo(img, { yPercent: -8 }, {
				yPercent: 0,
				ease: 'none',
				scrollTrigger: { trigger: img.parentNode, start: 'top bottom', end: 'bottom top', scrub: true }
			});
		});

		/* Diplôme : se redresse à l'arrivée, reflet qui balaie. */
		var diploma = page.querySelector('.iam-lp-diploma');
		if (diploma) {
			gsap.from(diploma, { rotateY: -40, rotateX: 20, y: 60, opacity: 0, duration: 1.4, ease: 'expo.out', scrollTrigger: st(diploma, 'top 85%') });
		}

		if (fine) {
			initTilt(page);
			initMagnetic(page);
		}
	}

	/* Inclinaison 3D au survol (fiche du hero, diplôme). */
	function initTilt(page) {
		$$('[data-iam-tilt]', page).forEach(function (el) {
			var base = el.classList.contains('iam-lp-diploma') ? { rx: 6, ry: -14 } : { rx: 0, ry: 0 };
			var toX = gsap.quickTo(el, 'rotationX', { duration: 0.6, ease: 'power3.out' });
			var toY = gsap.quickTo(el, 'rotationY', { duration: 0.6, ease: 'power3.out' });
			gsap.set(el, { transformPerspective: 1000 });
			el.addEventListener('pointermove', function (e) {
				var r = el.getBoundingClientRect();
				var px = (e.clientX - r.left) / r.width - 0.5;
				var py = (e.clientY - r.top) / r.height - 0.5;
				toX(base.rx - py * 10);
				toY(base.ry + px * 12);
				el.style.setProperty('--shine', (px * 120) + '%');
			});
			el.addEventListener('pointerleave', function () {
				toX(base.rx);
				toY(base.ry);
				el.style.setProperty('--shine', '-60%');
			});
		});
	}

	/* Bouton principal légèrement attiré par le curseur. */
	function initMagnetic(page) {
		$$('[data-iam-magnetic]', page).forEach(function (btn) {
			var toX = gsap.quickTo(btn, 'x', { duration: 0.5, ease: 'power3.out' });
			var toY = gsap.quickTo(btn, 'y', { duration: 0.5, ease: 'power3.out' });
			btn.addEventListener('pointermove', function (e) {
				var r = btn.getBoundingClientRect();
				toX((e.clientX - r.left - r.width / 2) * 0.25);
				toY((e.clientY - r.top - r.height / 2) * 0.35);
			});
			btn.addEventListener('pointerleave', function () {
				toX(0);
				toY(0);
			});
		});
	}

	function init() {
		animateList();
		$$('.iam-lp').forEach(animateLanding);
		if (hasST) {
			ST.refresh();
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
