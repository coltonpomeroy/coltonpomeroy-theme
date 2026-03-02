<?php
/**
 * Title: Blog Newsletter Signup
 * Slug: coltonpomeroy/blog-newsletter
 * Categories: coltonpomeroy, call-to-action
 * Keywords: newsletter, email, signup, subscribe
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"}},"border":{"radius":"12px"}},"backgroundColor":"gray-50","layout":{"type":"constrained","contentSize":"500px"}} -->
<div class="wp-block-group has-gray-50-background-color has-background" style="border-radius:12px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:heading {"textAlign":"center","level":3,"fontFamily":"heading","fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-text-align-center has-heading-font-family has-x-large-font-size">Stay in the loop</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"gray-500","fontSize":"small"} -->
	<p class="has-text-align-center has-gray-500-color has-text-color has-small-font-size">I write weekly about web development, app design, and the tech industry. No spam, unsubscribe anytime.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<form class="cp-newsletter-form" action="#" method="post">
		<div class="cp-newsletter-row">
			<input type="email" name="email" placeholder="Your email address" required aria-label="Email address">
			<button type="submit">Subscribe</button>
		</div>
	</form>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
