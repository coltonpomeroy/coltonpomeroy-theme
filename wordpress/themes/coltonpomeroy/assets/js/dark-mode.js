/**
 * Colton Pomeroy Theme — Dark Mode Toggle
 * Respects prefers-color-scheme, with manual override persisted to localStorage.
 */
(function () {
	'use strict';

	var STORAGE_KEY = 'cp-theme';
	var root = document.documentElement;

	/* ---- Read stored preference ---- */
	var stored = localStorage.getItem(STORAGE_KEY);
	if (stored) {
		root.setAttribute('data-theme', stored);
	}

	/* ---- Toggle handler ---- */
	document.addEventListener('click', function (e) {
		var btn = e.target.closest('.dark-mode-toggle');
		if (!btn) return;

		var current = root.getAttribute('data-theme');
		var next;

		if (current === 'dark') {
			next = 'light';
		} else if (current === 'light') {
			next = 'dark';
		} else {
			// No manual preference yet — check system
			var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
			next = prefersDark ? 'light' : 'dark';
		}

		root.setAttribute('data-theme', next);
		localStorage.setItem(STORAGE_KEY, next);
	});

})();
