<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
			'footer' => __( 'Footer Menu', 'tailpress' )
		)
	);

	//register_widget( 'footer_widget' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer-widget-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer-widget-2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer-widget-3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 4',
		'id'            => 'footer-widget-4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();
	$ver = filemtime(get_template_directory().'/style.css');
	//wp_enqueue_style('yourtheme-style', get_template_directory_uri() . '/style.css', '', $ver);

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), "1.0.23" );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );	
	wp_enqueue_style('tailpress-style', get_template_directory_uri() . '/style.css', '', $ver);

	wp_enqueue_style(
        'font-awesome-main',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',array(), $ver
    );
	//Adding Slick Carousel Assets
	wp_enqueue_style('slick-css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), $ver);

	wp_enqueue_style('slick-theme-css','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), $ver);

	wp_enqueue_script('slick-js','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), $ver, true);


}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100, // Set the height of the logo
        'width'       => 200, // Set the width of the logo
        'flex-height' => true, // Allow flexible height
        'flex-width'  => true, // Allow flexible width
    ));

add_action('after_setup_theme', 'tailpress_setup');

//Email Field Site IDentity


function theme_customize_register($wp_customize) {
    // Add a new setting for the email field
    $wp_customize->add_setting('site_email', array(
        'default'           => '', // Default value
        'sanitize_callback' => 'sanitize_email', // Sanitize email input
        'transport'         => 'refresh', // Refresh the preview on change
    ));

	$wp_customize->add_setting('contact_phone', array(
        'default'           => '', // Default value
		'transport'         => 'refresh', // Refresh the preview on change
    ));
	

    // Add a new control for the email field
    $wp_customize->add_control('site_email', array(
        'label'    => __('Site Email', 'site-email'), // Label for the control
        'section'  => 'title_tagline', // Add to the Site Identity section
        'type'     => 'email', // Input type
        'priority' => 50, // Control position in the section
    ));

	// Add a new control for the email field
    $wp_customize->add_control('contact_phone', array(
        'label'    => __('Phone Number', 'site-phone'), // Label for the control
        'section'  => 'title_tagline', // Add to the Site Identity section
        'type'     => 'text', // Input type
        'priority' => 50, // Control position in the section
    ));
}
add_action('customize_register', 'theme_customize_register');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );




