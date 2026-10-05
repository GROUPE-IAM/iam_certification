/**
 * IAM Certifications — interactions front.
 * - Filtre par domaine (barre de boutons) : masque/affiche les cartes côté client.
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

	function init() {
		document.querySelectorAll('.iam-cert').forEach(initFilters);
		initFormBridge();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
