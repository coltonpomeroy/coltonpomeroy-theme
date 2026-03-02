<?php
/**
 * Colton Pomeroy Theme Functions
 *
 * @package ColtonPomeroy
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CP_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function coltonpomeroy_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'automatic-feed-links' );

	add_image_size( 'cp-card', 600, 400, true );
	add_image_size( 'cp-hero', 1200, 600, true );
	add_image_size( 'cp-portfolio', 800, 600, true );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'coltonpomeroy' ),
		'footer'  => __( 'Footer Menu', 'coltonpomeroy' ),
	) );
}
add_action( 'after_setup_theme', 'coltonpomeroy_setup' );


/**
 * Enqueue front-end assets.
 */
function coltonpomeroy_enqueue_assets() {
	// Google Fonts.
	wp_enqueue_style(
		'coltonpomeroy-google-fonts',
		'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700;800&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&family=JetBrains+Mono:wght@400&display=swap',
		array(),
		null
	);

	// Custom CSS.
	wp_enqueue_style(
		'coltonpomeroy-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		filemtime( get_template_directory() . '/assets/css/custom.css' )
	);

	wp_enqueue_style(
		'coltonpomeroy-dark-mode',
		get_template_directory_uri() . '/assets/css/dark-mode.css',
		array( 'coltonpomeroy-custom' ),
		filemtime( get_template_directory() . '/assets/css/dark-mode.css' )
	);

	// JavaScript.
	wp_enqueue_script(
		'coltonpomeroy-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);

	wp_enqueue_script(
		'coltonpomeroy-dark-mode-js',
		get_template_directory_uri() . '/assets/js/dark-mode.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/dark-mode.js' ),
		true
	);

	// Contact form JS only on contact page.
	if ( is_page( 'contact' ) ) {
		wp_enqueue_script(
			'coltonpomeroy-contact',
			get_template_directory_uri() . '/assets/js/contact-form.js',
			array(),
			filemtime( get_template_directory() . '/assets/js/contact-form.js' ),
			true
		);
		wp_localize_script( 'coltonpomeroy-contact', 'cpContact', array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'cp_contact_form' ),
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'coltonpomeroy_enqueue_assets' );


/**
 * Resource hints for performance.
 */
function coltonpomeroy_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href'        => 'https://fonts.googleapis.com',
			'crossorigin' => '',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'coltonpomeroy_resource_hints', 10, 2 );


/**
 * Register block pattern category.
 */
function coltonpomeroy_register_pattern_categories() {
	register_block_pattern_category( 'coltonpomeroy', array(
		'label' => __( 'Colton Pomeroy', 'coltonpomeroy' ),
	) );
}
add_action( 'init', 'coltonpomeroy_register_pattern_categories' );


/**
 * Schema markup for homepage and blog posts.
 */
function coltonpomeroy_schema_markup() {
	if ( is_front_page() ) {
		$schema = array(
			'@context'    => 'https://schema.org',
			'@type'       => 'ProfessionalService',
			'name'        => 'Colton Pomeroy — Web & App Development',
			'url'         => home_url( '/' ),
			'description' => get_bloginfo( 'description' ),
			'address'     => array(
				'@type'           => 'PostalAddress',
				'addressLocality' => 'Oklahoma City',
				'addressRegion'   => 'OK',
				'addressCountry'  => 'US',
			),
			'sameAs'  => array(
				'https://linkedin.com/in/coltonpomeroy',
				'https://github.com/coltonpomeroy',
			),
			'founder' => array(
				'@type'    => 'Person',
				'name'     => 'Colton Pomeroy',
				'jobTitle' => 'Senior Software Engineer',
			),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}

	if ( is_singular( 'post' ) ) {
		global $post;
		$schema = array(
			'@context'      => 'https://schema.org',
			'@type'         => 'Article',
			'headline'      => get_the_title(),
			'datePublished' => get_the_date( 'c' ),
			'dateModified'  => get_the_modified_date( 'c' ),
			'author'        => array(
				'@type' => 'Person',
				'name'  => get_the_author(),
			),
			'publisher'     => array(
				'@type' => 'Organization',
				'name'  => get_bloginfo( 'name' ),
			),
			'image'       => get_the_post_thumbnail_url( $post->ID, 'full' ),
			'description' => wp_strip_all_tags( get_the_excerpt() ),
		);
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'coltonpomeroy_schema_markup' );


/**
 * Reading time helper.
 */
function coltonpomeroy_reading_time( $post_id = null ) {
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}
	$content    = get_post_field( 'post_content', $post_id );
	$word_count = str_word_count( wp_strip_all_tags( $content ) );
	$minutes    = max( 1, ceil( $word_count / 250 ) );
	return $minutes . ' min read';
}


/**
 * Meta description fallback (skips if Rank Math is active).
 */
function coltonpomeroy_meta_description() {
	if ( defined( 'RANK_MATH_VERSION' ) || defined( 'WPSEO_VERSION' ) ) {
		return;
	}

	$desc = '';
	if ( is_singular() ) {
		$desc = wp_strip_all_tags( get_the_excerpt() );
	} elseif ( is_front_page() ) {
		$desc = get_bloginfo( 'description' );
	}

	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( wp_trim_words( $desc, 25, '...' ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'coltonpomeroy_meta_description', 1 );


/**
 * Contact form AJAX handler.
 */
function coltonpomeroy_handle_contact() {
	check_ajax_referer( 'cp_contact_form', 'nonce' );

	$name    = sanitize_text_field( $_POST['name'] ?? '' );
	$email   = sanitize_email( $_POST['email'] ?? '' );
	$type    = sanitize_text_field( $_POST['project_type'] ?? '' );
	$budget  = sanitize_text_field( $_POST['budget'] ?? '' );
	$message = sanitize_textarea_field( $_POST['message'] ?? '' );

	if ( ! $name || ! $email || ! $message ) {
		wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
	}

	$to      = get_option( 'admin_email' );
	$subject = sprintf( '[ColtonPomeroy.com] New inquiry from %s — %s', $name, $type );
	$body    = sprintf(
		"Name: %s\nEmail: %s\nProject Type: %s\nBudget: %s\n\nMessage:\n%s",
		$name, $email, $type, $budget, $message
	);
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $subject, $body, $headers );
	if ( $sent ) {
		wp_send_json_success( array( 'message' => "Thanks! I'll be in touch within 24 hours." ) );
	} else {
		wp_send_json_error( array( 'message' => 'Something went wrong. Please email me directly.' ) );
	}
}
add_action( 'wp_ajax_cp_contact', 'coltonpomeroy_handle_contact' );
add_action( 'wp_ajax_nopriv_cp_contact', 'coltonpomeroy_handle_contact' );


/**
 * Remove WordPress bloat.
 */
function coltonpomeroy_remove_bloat() {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );

	// Remove emoji scripts.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'after_setup_theme', 'coltonpomeroy_remove_bloat' );


/**
 * RSS feed: excerpts only.
 */
function coltonpomeroy_rss_excerpt( $content ) {
	return get_the_excerpt();
}
add_filter( 'the_content_feed', 'coltonpomeroy_rss_excerpt' );
add_filter( 'the_excerpt_rss', 'coltonpomeroy_rss_excerpt' );
