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

	/* Compteur animé sur un libellé « 11 modules », « 55 heures »… */
	function countUp(el) {
		var m = el.textContent.trim().match(/^(\d+)(.*)$/);
		if (!m) {
			return;
		}
		var target = parseInt(m[1], 10);
		var suffix = m[2];
		var obj = { v: 0 };
		gsap.to(obj, {
			v: target,
			duration: 1,
			ease: 'power1.out',
			onUpdate: function () {
				el.textContent = Math.round(obj.v) + suffix;
			},
			scrollTrigger: st(el, 'top 92%')
		});
	}

	/* Fiche détail : hero orchestré + révélations au scroll. */
	function animateSingle() {
		var hero = document.querySelector('.iam-cert-hero');
		if (hero) {
			var tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
			tl.from('.iam-cert-hero__badge', { opacity: 0, y: 16, duration: 0.5 })
				.from('.iam-cert-hero__title', { opacity: 0, y: 22, duration: 0.6 }, '-=0.3')
				.from('.iam-cert-hero__sub', { opacity: 0, y: 16, duration: 0.5 }, '-=0.4')
				.from('.iam-cert-chip', { opacity: 0, y: 12, duration: 0.4, stagger: 0.06 }, '-=0.3')
				.from('.iam-cert-hero .iam-cert-btn--lg', { opacity: 0, y: 12, duration: 0.4 }, '-=0.2')
				.from('.iam-cert-hero__media', { opacity: 0, scale: 0.96, duration: 0.7 }, '-=0.75');
		}

		document.querySelectorAll('.iam-cert-chip').forEach(countUp);

		var mods = document.querySelectorAll('.iam-cert-module');
		if (mods.length) {
			gsap.from(mods, {
				opacity: 0,
				y: 24,
				duration: 0.5,
				ease: 'power2.out',
				stagger: 0.06,
				scrollTrigger: st('.iam-cert-modules', 'top 80%')
			});
		}

		document.querySelectorAll('.iam-cert-sec').forEach(function (sec) {
			if (sec.classList.contains('iam-cert-programme')) {
				return;
			}
			gsap.from(sec, {
				opacity: 0,
				y: 20,
				duration: 0.6,
				ease: 'power2.out',
				scrollTrigger: st(sec)
			});
		});
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
