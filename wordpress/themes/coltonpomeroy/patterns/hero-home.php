<?php
/**
 * Title: Homepage Hero
 * Slug: coltonpomeroy/hero-home
 * Categories: coltonpomeroy, featured
 * Keywords: hero, homepage, banner
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"gradient":"warm-fade","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-warm-fade-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">

			<!-- wp:paragraph {"textColor":"copper","fontSize":"small","fontFamily":"heading"} -->
			<p class="has-copper-color has-text-color has-heading-font-family has-small-font-size">SENIOR SOFTWARE ENGINEER &amp; WEB DESIGNER</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontFamily":"display","fontSize":"gigantic"} -->
			<h1 class="wp-block-heading has-display-font-family has-gigantic-font-size" style="margin-top:var(--wp--preset--spacing--20)">I build websites &amp; apps that grow your business</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"gray-500","fontSize":"large"} -->
			<p class="has-gray-500-color has-text-color has-large-font-size" style="margin-top:var(--wp--preset--spacing--30)">From custom WordPress themes to full-stack web applications, I help businesses launch digital products that convert visitors into customers.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
				<!-- wp:button {"fontSize":"medium"} -->
				<div class="wp-block-button has-custom-font-size has-medium-font-size">
					<a class="wp-block-button__link wp-element-button" href="/portfolio">View My Work</a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","fontSize":"medium"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-medium-font-size">
					<a class="wp-block-button__link wp-element-button" href="#cp-contact-form">Let's Talk</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:html -->
			<div class="cp-hero-portrait">
				<div class="cp-hero-portrait__frame">
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/headshot.jpg' ) ); ?>" alt="Colton Pomeroy — Senior Software Engineer and Web Designer" width="800" height="800" loading="eager"/>
				</div>
				<div class="cp-hero-portrait__accent" aria-hidden="true"></div>
			</div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
