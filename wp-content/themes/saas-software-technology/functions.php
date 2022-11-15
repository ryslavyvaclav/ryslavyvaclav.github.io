<?php
/**
 * SAAS Software Technology functions and definitions
 *
 * @package SAAS Software Technology
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'saas_software_technology_setup' ) ) :

function saas_software_technology_setup() {

	$GLOBALS['content_width'] = apply_filters( 'saas_software_technology_content_width', 640 );

	load_theme_textdomain( 'saas-software-technology', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('saas-software-technology-homepage-thumb',240,145,true);
	
   	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'saas-software-technology' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	
	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', saas_software_technology_font_url() ) );
}
endif;
add_action( 'after_setup_theme', 'saas_software_technology_setup' );

/* Theme Widgets Setup */
function saas_software_technology_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'saas-software-technology' ),
		'description'   => __( 'Appears on blog page sidebar', 'saas-software-technology' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'saas-software-technology' ),
		'description'   => __( 'Appears on page sidebar', 'saas-software-technology' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'         => __( 'Third Column Sidebar', 'saas-software-technology' ),
		'description' => __( 'Appears on page sidebar', 'saas-software-technology' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$saas_software_technology_widget_areas = get_theme_mod('saas_software_technology_footer_widget_layout', '4');
	for ($i=1; $i<=$saas_software_technology_widget_areas; $i++) {
		register_sidebar( array(
			'name'        => __( 'Footer Nav ', 'saas-software-technology' ) . $i,
			'id'          => 'footer-' . $i,
			'description' => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-2">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'saas_software_technology_widgets_init' );

/* Theme Font URL */
function saas_software_technology_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';
	$font_family[] = 'Overpass';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre:300,300i,400,400i,700,700i';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';
	$font_family[] = 'Comfortaa:300,400,500,600,700';
	$font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$font_family[] = 'Martel:wght@200;300;400;600;700;800;900';
	$font_family[] = 'Jura:wght@300;400;500;600;700';
	$font_family[] = 'Cormorant Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$font_family[] = 'Catamaran:wght@100;200;300;400;500;600;700;800;900';
	$font_family[] = 'Sen:wght@400;700;800';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	$contents = wptt_get_webfont_url( esc_url_raw( $font_url ) );
	return $contents;
}

/* Theme enqueue scripts */
function saas_software_technology_scripts() {
	wp_enqueue_style( 'saas-software-technology-font', saas_software_technology_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'saas-software-technology-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'saas-software-technology-block-style', get_template_directory_uri().'/css/block-style.css' );

    // Body
    $saas_software_technology_body_color = get_theme_mod('saas_software_technology_body_color', '');
    $saas_software_technology_body_font_family = get_theme_mod('saas_software_technology_body_font_family', '');
    $saas_software_technology_body_font_size = get_theme_mod('saas_software_technology_body_font_size', '');
	// Paragraph
    $saas_software_technology_paragraph_color = get_theme_mod('saas_software_technology_paragraph_color', '');
    $saas_software_technology_paragraph_font_family = get_theme_mod('saas_software_technology_paragraph_font_family', '');
    $saas_software_technology_paragraph_font_size = get_theme_mod('saas_software_technology_paragraph_font_size', '');
	// "a" tag
	$saas_software_technology_atag_color = get_theme_mod('saas_software_technology_atag_color', '');
    $saas_software_technology_atag_font_family = get_theme_mod('saas_software_technology_atag_font_family', '');
	// "li" tag
	$saas_software_technology_li_color = get_theme_mod('saas_software_technology_li_color', '');
    $saas_software_technology_li_font_family = get_theme_mod('saas_software_technology_li_font_family', '');
	// H1
	$saas_software_technology_h1_color = get_theme_mod('saas_software_technology_h1_color', '');
    $saas_software_technology_h1_font_family = get_theme_mod('saas_software_technology_h1_font_family', '');
    $saas_software_technology_h1_font_size = get_theme_mod('saas_software_technology_h1_font_size', '');
	// H2
	$saas_software_technology_h2_color = get_theme_mod('saas_software_technology_h2_color', '');
    $saas_software_technology_h2_font_family = get_theme_mod('saas_software_technology_h2_font_family', '');
    $saas_software_technology_h2_font_size = get_theme_mod('saas_software_technology_h2_font_size', '');
	// H3
	$saas_software_technology_h3_color = get_theme_mod('saas_software_technology_h3_color', '');
    $saas_software_technology_h3_font_family = get_theme_mod('saas_software_technology_h3_font_family', '');
    $saas_software_technology_h3_font_size = get_theme_mod('saas_software_technology_h3_font_size', '');
	// H4
	$saas_software_technology_h4_color = get_theme_mod('saas_software_technology_h4_color', '');
    $saas_software_technology_h4_font_family = get_theme_mod('saas_software_technology_h4_font_family', '');
    $saas_software_technology_h4_font_size = get_theme_mod('saas_software_technology_h4_font_size', '');
	// H5
	$saas_software_technology_h5_color = get_theme_mod('saas_software_technology_h5_color', '');
    $saas_software_technology_h5_font_family = get_theme_mod('saas_software_technology_h5_font_family', '');
    $saas_software_technology_h5_font_size = get_theme_mod('saas_software_technology_h5_font_size', '');
	// H6
	$saas_software_technology_h6_color = get_theme_mod('saas_software_technology_h6_color', '');
    $saas_software_technology_h6_font_family = get_theme_mod('saas_software_technology_h6_font_family', '');
    $saas_software_technology_h6_font_size = get_theme_mod('saas_software_technology_h6_font_size', '');

	$saas_software_technology_custom_css ='
	    body{
		    color:'.esc_attr($saas_software_technology_body_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_body_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_body_font_size).'px !important;
		}
		p,span{
		    color:'.esc_attr($saas_software_technology_paragraph_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_paragraph_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_paragraph_font_size).'!important;
		}
		a{
		    color:'.esc_attr($saas_software_technology_atag_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_atag_font_family).';
		}
		li{
		    color:'.esc_attr($saas_software_technology_li_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_li_font_family).';
		}
		h1{
		    color:'.esc_attr($saas_software_technology_h1_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h1_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_attr($saas_software_technology_h2_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h2_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_attr($saas_software_technology_h3_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h3_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_attr($saas_software_technology_h4_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h4_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_attr($saas_software_technology_h5_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h5_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_attr($saas_software_technology_h6_color).'!important;
		    font-family: '.esc_attr($saas_software_technology_h6_font_family).'!important;
		    font-size: '.esc_attr($saas_software_technology_h6_font_size).'!important;
		}'
	;
	wp_add_inline_style( 'saas-software-technology-basic-style',$saas_software_technology_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'saas-software-technology-basic-style',$saas_software_technology_custom_css );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js' );
	wp_enqueue_script( 'saas-software-technology-custom-jquery', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'saas_software_technology_scripts' );

/*radio button sanitization*/
function saas_software_technology_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function saas_software_technology_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function saas_software_technology_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );

  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'saas_software_technology_loop_columns');
if (!function_exists('saas_software_technology_loop_columns')) {
	function saas_software_technology_loop_columns() {
		$columns = get_theme_mod( 'saas_software_technology_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'saas_software_technology_shop_per_page', 9 );
function saas_software_technology_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'saas_software_technology_product_per_page', 9 );
	return $cols;
}

function saas_software_technology_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function saas_software_technology_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'saas_software_technology_post_navigation' ) ) {
	function saas_software_technology_post_navigation() {
		$saas_software_technology_pagination_type = get_theme_mod( 'saas_software_technology_post_navigation_type', 'numbers' );
		if ( $saas_software_technology_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'saas-software-technology' ),
	            'next_text'          => __( 'Next page', 'saas-software-technology' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'saas-software-technology' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Webfonts */
require get_template_directory() . '/wptt-webfont-loader.php';