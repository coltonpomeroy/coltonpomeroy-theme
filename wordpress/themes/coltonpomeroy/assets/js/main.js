/**
 * Colton Pomeroy Theme — Main JS
 * Scroll-reveal animations, smooth scroll, header behavior.
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

	/* ---- Scroll-reveal animations ---- */
	if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
		// Mark top-level sections for reveal
		var sections = document.querySelectorAll(
			'.wp-block-group.alignfull, ' +
			'main > .wp-block-group, ' +
			'main > .wp-block-template-part, ' +
			'.entry-content > .wp-block-group'
		);

		sections.forEach(function (section, index) {
			// Skip the first section (hero) — it's above the fold and should be visible immediately
			if (index === 0) return;
			section.classList.add('cp-reveal');
		});

		var observer = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					observer.unobserve(entry.target);
				}
			});
		}, {
			threshold: 0.1,
			rootMargin: '0px 0px -40px 0px'
		});

		sections.forEach(function (section) {
			if (section.classList.contains('cp-reveal')) {
				observer.observe(section);
			}
		});
	}

	/* ---- Scroll to top button ---- */
	var scrollBtn = document.createElement('button');
	scrollBtn.className = 'cp-scroll-top';
	scrollBtn.setAttribute('aria-label', 'Scroll to top');
	scrollBtn.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>';
	scrollBtn.style.cssText = 'position:fixed;bottom:2rem;right:2rem;width:44px;height:44px;border-radius:50%;background:var(--wp--preset--color--copper);color:#fff;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;opacity:0;visibility:hidden;transition:opacity 0.3s ease,visibility 0.3s ease,transform 0.2s ease,background-color 0.2s ease;z-index:999;box-shadow:0 2px 12px rgba(196,118,59,0.3);';

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

	scrollBtn.addEventListener('mouseenter', function () {
		scrollBtn.style.transform = 'translateY(-2px)';
	});

	scrollBtn.addEventListener('mouseleave', function () {
		scrollBtn.style.transform = 'translateY(0)';
	});

})();
