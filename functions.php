<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package consultica
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
if (! function_exists('consulticatwo_support')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function consulticatwo_support()
	{

		add_editor_style(get_template_directory_uri() . '/assets/css/editor.css');

		load_theme_textdomain('consulticatwo', get_template_directory() . '/languages');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Add support for post thumbnails
		add_theme_support('post-thumbnails');
	}

endif;
add_action('after_setup_theme', 'consulticatwo_support');

// register own theme pattern

function consulticatwo_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'consulticatwo' => array( 'label' => __( 'consulticatwo', 'consulticatwo' ) )
	);

	$block_pattern_categories = apply_filters( 'consulticatwo_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'consulticatwo_register_pattern_category');





