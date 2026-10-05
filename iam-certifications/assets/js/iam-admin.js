/**
 * IAM Certifications — admin : répéteur de modules du programme.
 */
(function () {
	'use strict';

	function init() {
		var root = document.getElementById('iam-modules');
		if (!root) {
			return;
		}

		var list = root.querySelector('.iam-modules__list');
		var addBtn = root.querySelector('.iam-modules__add');
		var template = document.getElementById('iam-module-template');
		var counter = list ? list.querySelectorAll('.iam-module').length : 0;

		// Ajout d'un module (index unique pour éviter les collisions de noms).
		if (addBtn && template && list) {
			addBtn.addEventListener('click', function () {
				var html = template.innerHTML.replace(/__index__/g, 'new_' + counter);
				counter++;
				var wrap = document.createElement('div');
				wrap.innerHTML = html.trim();
				var node = wrap.firstChild;
				list.appendChild(node);
				var titre = node.querySelector('.iam-module__titre');
				if (titre) {
					titre.focus();
				}
			});
		}

		// Suppression (délégation).
		root.addEventListener('click', function (e) {
			var btn = e.target.closest('.iam-module__remove');
			if (!btn) {
				return;
			}
			var module = btn.closest('.iam-module');
			if (module) {
				module.parentNode.removeChild(module);
			}
		});
	}

	// Sélecteur d'image mise en avant (média WordPress).
	function initImage() {
		var btn = document.getElementById('iam_thumb_btn');
		if (!btn || typeof wp === 'undefined' || !wp.media) {
			return;
		}
		var input = document.getElementById('iam_thumb_id');
		var preview = document.getElementById('iam_thumb_preview');
		var removeBtn = document.getElementById('iam_thumb_remove');
		var frame;

		btn.addEventListener('click', function (e) {
			e.preventDefault();
			if (frame) {
				frame.open();
				return;
			}
			frame = wp.media({ title: 'Image de la certification', multiple: false, library: { type: 'image' } });
			frame.on('select', function () {
				var att = frame.state().get('selection').first().toJSON();
				if (input) { input.value = att.id; }
				if (preview) {
					var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
					preview.innerHTML = '<img src="' + url + '" alt="">';
				}
			});
			frame.open();
		});

		if (removeBtn) {
			removeBtn.addEventListener('click', function (e) {
				e.preventDefault();
				if (input) { input.value = ''; }
				if (preview) { preview.innerHTML = ''; }
			});
		}
	}

	// Assistant à étapes du formulaire d'édition.
	function initWizard() {
		var wiz = document.getElementById('iam-cert-wizard');
		if (!wiz) {
			return;
		}
		var steps = Array.prototype.slice.call(wiz.querySelectorAll('.iam-step'));
		var tabs = Array.prototype.slice.call(wiz.querySelectorAll('.iam-wiz-tab'));
		var prev = wiz.querySelector('.iam-wiz-prev');
		var next = wiz.querySelector('.iam-wiz-next');
		var save = wiz.querySelector('.iam-wiz-save');
		var status = wiz.querySelector('.iam-wiz-status');
		var total = steps.length;
		var current = 0;
		var progress = wiz.querySelector('.iam-wiz-progress span');
		var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
		var canAnim = !reduce && !!window.gsap;

		function go(i, dir) {
			current = Math.max(0, Math.min(total - 1, i));
			steps.forEach(function (s, idx) { s.classList.toggle('is-active', idx === current); });
			tabs.forEach(function (t, idx) {
				t.classList.toggle('is-active', idx === current);
				t.classList.toggle('is-done', idx < current);
			});
			if (prev) { prev.hidden = current === 0; }
			if (next) { next.hidden = current === total - 1; }
			if (save) { save.hidden = current !== total - 1; }
			if (status) { status.textContent = 'Étape ' + (current + 1) + ' / ' + total; }
			if (progress) { progress.style.width = Math.round(((current + 1) / total) * 100) + '%'; }

			// Transition douce de l'étape entrante.
			if (canAnim) {
				var from = dir === -1 ? -18 : 18;
				window.gsap.fromTo(
					steps[current],
					{ opacity: 0, x: from },
					{ opacity: 1, x: 0, duration: 0.4, ease: 'power2.out' }
				);
			}
		}

		if (prev) { prev.addEventListener('click', function () { go(current - 1, -1); }); }
		if (next) { next.addEventListener('click', function () { go(current + 1, 1); }); }
		tabs.forEach(function (t, idx) {
			t.addEventListener('click', function () { go(idx, idx < current ? -1 : 1); });
		});

		go(0);
	}

	function boot() {
		init();
		initImage();
		initWizard();
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}
})();
