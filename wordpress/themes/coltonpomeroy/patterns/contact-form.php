<?php
/**
 * Title: Contact Form
 * Slug: coltonpomeroy/contact-form
 * Categories: coltonpomeroy
 * Keywords: contact, form, lead
 */
?>

<!-- wp:group {"align":"full","anchor":"cp-contact-form","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" id="cp-contact-form" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

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
			<?php echo do_shortcode( '[wpforms id="34"]' ); ?>
			<!-- /wp:html -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"40%","className":"cp-contact-sidebar"} -->
		<div class="wp-block-column is-vertically-aligned-top cp-contact-sidebar" style="flex-basis:40%">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"gray-500","fontFamily":"heading","fontSize":"x-small"} -->
				<h3 class="wp-block-heading has-gray-500-color has-text-color has-heading-font-family has-x-small-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Recent Work</h3>
				<!-- /wp:heading -->

				<!-- wp:html -->
				<a href="https://coltonpomeroy.github.io/Crossroads/mockups/concept-b.html" target="_blank" rel="noopener" class="cp-portfolio-preview">
					<div class="cp-portfolio-preview__browser">
						<div class="cp-portfolio-preview__dots">
							<span></span><span></span><span></span>
						</div>
						<span class="cp-portfolio-preview__url">crossroadscommons.org</span>
					</div>
					<img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/portfolio-crossroads.png' ) ); ?>" alt="Crossroads Commons website mockup" loading="lazy" width="1320" height="689">
					<div class="cp-portfolio-preview__caption">
						<strong>Crossroads Commons</strong>
						<span>Community Hub &middot; Website Design</span>
					</div>
				</a>
				<!-- /wp:html -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|30"}},"border":{"top":{"color":"var:preset|color|gray-200","width":"1px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--gray-200);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">

					<!-- wp:paragraph {"textColor":"sage","fontSize":"small","fontFamily":"heading"} -->
					<p class="has-sage-color has-text-color has-heading-font-family has-small-font-size">&#x25CF; Currently accepting new projects</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"iconColor":"gray-500","iconColorValue":"#6B6760","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--20)">
						<!-- wp:social-link {"url":"https://github.com/coltonpomeroy","service":"github"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com/in/coltonpomeroy","service":"linkedin"} /-->
						<!-- wp:social-link {"url":"https://twitter.com/coltonpomeroy","service":"x"} /-->
					</ul>
					<!-- /wp:social-links -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
