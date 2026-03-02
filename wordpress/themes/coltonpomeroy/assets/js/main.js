/**
 * Colton Pomeroy Theme — Main JS
 * Mobile menu, smooth scroll, header behavior.
 */
(function () {
	'use strict';

	/* ---- Smooth scroll for anchor links ---- */
	document.querySelectorAll('a[href^="#"]').forEach(function (link) {
		link.addEventListener('click', function (e) {
			var target = document.querySelector(this.getAttribute('href'));
			if (target) {
				e.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	});

	/* ---- Header shrink on scroll ---- */
	var header = document.querySelector('.wp-block-template-part[data-area="header"]') ||
	             document.querySelector('header') ||
	             document.querySelector('[class*="header"]');

	if (header) {
		var scrollThreshold = 50;

		window.addEventListener('scroll', function () {
			if (window.scrollY > scrollThreshold) {
				header.classList.add('is-scrolled');
			} else {
				header.classList.remove('is-scrolled');
			}
		}, { passive: true });
	}

	/* ---- Scroll to top button ---- */
	var scrollBtn = document.createElement('button');
	scrollBtn.className = 'cp-scroll-top';
	scrollBtn.setAttribute('aria-label', 'Scroll to top');
	scrollBtn.innerHTML = '&uarr;';
	scrollBtn.style.cssText = 'position:fixed;bottom:2rem;right:2rem;width:44px;height:44px;border-radius:50%;background:var(--wp--preset--color--copper);color:#fff;border:none;cursor:pointer;font-size:1.2rem;opacity:0;visibility:hidden;transition:opacity 0.3s,visibility 0.3s;z-index:999;box-shadow:0 2px 8px rgba(44,44,44,0.15);';

	document.body.appendChild(scrollBtn);

	window.addEventListener('scroll', function () {
		if (window.scrollY > 500) {
			scrollBtn.style.opacity = '1';
			scrollBtn.style.visibility = 'visible';
		} else {
			scrollBtn.style.opacity = '0';
			scrollBtn.style.visibility = 'hidden';
		}
	}, { passive: true });

	scrollBtn.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});

})();
