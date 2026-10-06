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
	var hasST = !!window.ScrollTrigger;
	if (hasST) {
		gsap.registerPlugin(window.ScrollTrigger);
	}

	function st(trigger, start) {
		return hasST ? { trigger: trigger, start: start || 'top 85%' } : undefined;
	}

	/* Liste : apparition en cascade des cartes. */
	function animateList() {
		document.querySelectorAll('.iam-cert-grid').forEach(function (grid) {
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

	/*
	 * Fiche détail : une seule entrée orchestrée, celle du hero.
	 * Le reste de la page apparaît normalement (pas d'effet à chaque section).
	 */
	function animateSingle() {
		var hero = document.querySelector('.iam-cert-hero');
		if (!hero) {
			return;
		}
		var q = function (sel) {
			return hero.querySelectorAll(sel);
		};
		var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
		if (q('.iam-cert-hero__bg').length) {
			tl.from(q('.iam-cert-hero__bg'), { scale: 1.06, duration: 1.6, ease: 'power2.out' }, 0);
		}
		tl.from(q('.iam-cert-hero__badge'), { opacity: 0, y: 14, duration: 0.5 }, 0.1)
			.from(q('.iam-cert-hero__title'), { opacity: 0, y: 24, duration: 0.7 }, 0.2)
			.from(q('.iam-cert-hero__sub'), { opacity: 0, y: 16, duration: 0.6 }, 0.4)
			.from(q('.iam-cert-chip'), { opacity: 0, y: 10, duration: 0.4, stagger: 0.05 }, 0.55)
			.from(q('.iam-cert-hero__aside > *'), { opacity: 0, y: 18, duration: 0.6, stagger: 0.12 }, 0.5);
	}

	function init() {
		animateList();
		animateSingle();
		if (hasST) {
			window.ScrollTrigger.refresh();
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
