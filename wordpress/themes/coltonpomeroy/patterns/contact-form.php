<?php
/**
 * Title: Contact Form
 * Slug: coltonpomeroy/contact-form
 * Categories: coltonpomeroy
 * Keywords: contact, form, lead
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%">

			<!-- wp:heading {"fontFamily":"display","fontSize":"huge"} -->
			<h2 class="wp-block-heading has-display-font-family has-huge-font-size">Let's build something great together.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"gray-500","fontSize":"medium"} -->
			<p class="has-gray-500-color has-text-color has-medium-font-size">Tell me about your project. I typically respond within 24 hours.</p>
			<!-- /wp:paragraph -->

			<!-- wp:html -->
			<form class="cp-contact-form" id="cp-contact-form">
				<div class="cp-form-row">
					<div class="cp-form-field">
						<label for="cp-name">Name <span class="required">*</span></label>
						<input type="text" id="cp-name" name="name" required placeholder="Your name">
					</div>
					<div class="cp-form-field">
						<label for="cp-email">Email <span class="required">*</span></label>
						<input type="email" id="cp-email" name="email" required placeholder="you@example.com">
					</div>
				</div>
				<div class="cp-form-row">
					<div class="cp-form-field">
						<label for="cp-project-type">Project Type</label>
						<select id="cp-project-type" name="project_type">
							<option value="">Select a type...</option>
							<option value="Website">Website</option>
							<option value="Web App">Web Application</option>
							<option value="Mobile App">Mobile App</option>
							<option value="WordPress">WordPress</option>
							<option value="Consulting">Technical Consulting</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="cp-form-field">
						<label for="cp-budget">Budget Range</label>
						<select id="cp-budget" name="budget">
							<option value="">Select a range...</option>
							<option value="< $5k">Under $5,000</option>
							<option value="$5k-$15k">$5,000 - $15,000</option>
							<option value="$15k-$50k">$15,000 - $50,000</option>
							<option value="$50k+">$50,000+</option>
							<option value="Not sure">Not sure yet</option>
						</select>
					</div>
				</div>
				<div class="cp-form-field">
					<label for="cp-message">Message <span class="required">*</span></label>
					<textarea id="cp-message" name="message" required rows="5" placeholder="Tell me about your project, timeline, and goals..."></textarea>
				</div>
				<button type="submit" class="cp-submit-btn">Send Message</button>
				<div class="cp-form-status" aria-live="polite"></div>
			</form>
			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px"}},"backgroundColor":"gray-50","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-gray-50-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

				<!-- wp:heading {"level":3,"fontFamily":"heading","fontSize":"x-large"} -->
				<h3 class="wp-block-heading has-heading-font-family has-x-large-font-size">Get in Touch</h3>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontFamily":"heading","fontSize":"small"} -->
					<p class="has-heading-font-family has-small-font-size" style="font-weight:600">Email</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"gray-500","fontSize":"small"} -->
					<p class="has-gray-500-color has-text-color has-small-font-size"><a href="mailto:colton@coltonpomeroy.com">colton@coltonpomeroy.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontFamily":"heading","fontSize":"small"} -->
					<p class="has-heading-font-family has-small-font-size" style="font-weight:600">Location</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"gray-500","fontSize":"small"} -->
					<p class="has-gray-500-color has-text-color has-small-font-size">Oklahoma City, OK (Remote-friendly)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontFamily":"heading","fontSize":"small"} -->
					<p class="has-heading-font-family has-small-font-size" style="font-weight:600">Availability</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"sage","fontSize":"small","fontFamily":"heading"} -->
					<p class="has-sage-color has-text-color has-heading-font-family has-small-font-size">&#x25CF; Currently accepting new projects</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:social-links {"iconColor":"gray-500","iconColorValue":"#6B6760","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)">
					<!-- wp:social-link {"url":"https://github.com/coltonpomeroy","service":"github"} /-->
					<!-- wp:social-link {"url":"https://linkedin.com/in/coltonpomeroy","service":"linkedin"} /-->
					<!-- wp:social-link {"url":"https://twitter.com/coltonpomeroy","service":"x"} /-->
				</ul>
				<!-- /wp:social-links -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
