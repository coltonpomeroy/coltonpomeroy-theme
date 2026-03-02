/**
 * Colton Pomeroy Theme — Contact Form Handler
 * AJAX form submission with validation.
 */
(function () {
	'use strict';

	var form = document.getElementById('cp-contact-form');
	if (!form) return;

	var submitBtn = form.querySelector('.cp-submit-btn');
	var statusEl = form.querySelector('.cp-form-status');

	form.addEventListener('submit', function (e) {
		e.preventDefault();

		// Validate required fields.
		var name = form.querySelector('[name="name"]');
		var email = form.querySelector('[name="email"]');
		var message = form.querySelector('[name="message"]');

		if (!name.value.trim() || !email.value.trim() || !message.value.trim()) {
			showStatus('Please fill in all required fields.', 'error');
			return;
		}

		if (!isValidEmail(email.value)) {
			showStatus('Please enter a valid email address.', 'error');
			return;
		}

		// Disable button.
		submitBtn.disabled = true;
		submitBtn.textContent = 'Sending...';
		showStatus('', '');

		// Build form data.
		var data = new FormData(form);
		data.append('action', 'cp_contact');
		data.append('nonce', cpContact.nonce);

		// Send AJAX request.
		fetch(cpContact.ajaxUrl, {
			method: 'POST',
			body: data,
			credentials: 'same-origin',
		})
			.then(function (response) {
				return response.json();
			})
			.then(function (result) {
				if (result.success) {
					showStatus(result.data.message, 'success');
					form.reset();
				} else {
					showStatus(result.data.message || 'Something went wrong.', 'error');
				}
			})
			.catch(function () {
				showStatus('Network error. Please try again or email me directly.', 'error');
			})
			.finally(function () {
				submitBtn.disabled = false;
				submitBtn.textContent = 'Send Message';
			});
	});

	function showStatus(msg, type) {
		statusEl.textContent = msg;
		statusEl.className = 'cp-form-status' + (type ? ' ' + type : '');
	}

	function isValidEmail(email) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
	}

})();
