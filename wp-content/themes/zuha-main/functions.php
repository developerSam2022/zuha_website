<?php
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

function zuha_setup() {
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	$color_scheme             = zuha_get_color_scheme();
	$default_background_color = trim( $color_scheme[0], '#' );
	$default_text_color       = trim( $color_scheme[3], '#' );
	// Add theme support for Custom Logo.
	add_theme_support('custom-logo');

	add_theme_support(
		'custom-background',
		apply_filters(
			'zuha_custom_background_args',
			array(
				'default-color' => $default_background_color,
			)
		)
	);

	add_theme_support( 'post-thumbnails' , array( 'service','slider','technologi','page','post') );
		add_theme_support(
		'custom-header',
		apply_filters(
			'zuha_custom_header_args',
			array(
			//	'default-text-color' => $default_text_color,
				'width'              => 1200,
				'height'             => 280,
				'flex-height'        => true,
				//'wp-head-callback'   => 'zuha_header_style',
			)
		)
	);

	register_nav_menus( array( 
		'header' => 'Header menu', 
		'footer' => 'Footer menu' 
		) );
	

}
add_action( 'after_setup_theme', 'zuha_setup' );
function zuha_get_color_schemes() {
	/**
	 * Filter the color schemes registered for use with Twenty Sixteen.
	 *
	 * The default schemes include 'default', 'dark', 'gray', 'red', and 'yellow'.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @param array $schemes {
	 *     Associative array of color schemes data.
	 *
	 *     @type array $slug {
	 *         Associative array of information for setting up the color scheme.
	 *
	 *         @type string $label  Color scheme label.
	 *         @type array  $colors HEX codes for default colors prepended with a hash symbol ('#').
	 *                              Colors are defined in the following order: Main background, page
	 *                              background, link, main text, secondary text.
	 *     }
	 * }
	 */
	return apply_filters(
		'zuha_color_schemes',
		array(
			'default' => array(
				'label'  => __( 'Default', 'zuha' ),
				'colors' => array(
					'#1a1a1a',
					'#ffffff',
					'#007acc',
					'#1a1a1a',
					'#686868',
				),
			),
			'dark'    => array(
				'label'  => __( 'Dark', 'zuha' ),
				'colors' => array(
					'#262626',
					'#1a1a1a',
					'#9adffd',
					'#e5e5e5',
					'#c1c1c1',
				),
			),
			'gray'    => array(
				'label'  => __( 'Gray', 'zuha' ),
				'colors' => array(
					'#616a73',
					'#4d545c',
					'#c7c7c7',
					'#f2f2f2',
					'#f2f2f2',
				),
			),
			'red'     => array(
				'label'  => __( 'Red', 'zuha' ),
				'colors' => array(
					'#ffffff',
					'#ff675f',
					'#640c1f',
					'#402b30',
					'#402b30',
				),
			),
			'yellow'  => array(
				'label'  => __( 'Yellow', 'zuha' ),
				'colors' => array(
					'#3b3721',
					'#ffef8e',
					'#774e24',
					'#3b3721',
					'#5b4d3e',
				),
			),
		)
	);
}

if ( ! function_exists( 'zuha_get_color_scheme' ) ) :
	/**
	 * Retrieves the current Twenty Sixteen color scheme.
	 *
	 * Create your own zuha_get_color_scheme() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 *
	 * @return array An associative array of either the current or default color scheme HEX values.
	 */
	function zuha_get_color_scheme() {
		$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
		$color_schemes       = zuha_get_color_schemes();

		if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
			return $color_schemes[ $color_scheme_option ]['colors'];
		}

		return $color_schemes['default']['colors'];
	}
endif; // zuha_get_color_scheme

/*
* 	ADD CUSTOM CSS AND JS
*/
function bootstrapstarter_enqueue_styles() {
	wp_enqueue_style('style', get_template_directory_uri() .'/style.css' );
	wp_enqueue_style('nav', get_template_directory_uri() .'/assets/css/vendor.min.css' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/plugins.min.css' );
	//wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/css/font-awesome.css' );
	
}
 
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
// 	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', true );
//     wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', true );
//     wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', true );
//   // 
//     wp_enqueue_script('scrollReveal', get_template_directory_uri().'/js/scrollReveal', true );
//   	 wp_enqueue_script('owl.carousel', get_template_directory_uri().'/js/owl.carousel.js', true );
    
//     wp_enqueue_script('jquery.easypiechart.min', get_template_directory_uri().'/js/jquery.easypiechart.min.js', true );
// 	wp_enqueue_script('jquery.isotope.min', get_template_directory_uri().'/js/jquery.isotope.min.js', true );
// 	wp_enqueue_script('jquery.jigowatt', get_template_directory_uri().'/js/jquery.jigowatt.js', true );
// 	wp_enqueue_script('jquery.parallax-1.1.3', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', true );
// 	wp_enqueue_script('jquery.unveilEffects', get_template_directory_uri().'/js/jquery.unveilEffects.js', true );
// 	wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/js/smooth-scroll.js', true );

	//wp_enqueue_script('jquery.themepunch.revolution.min', get_template_directory_uri().'/js/jquery.themepunch.revolution.min.js', $dependencies, '3.3.6', true );
   // wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    
}
 
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

/* END */


/*
* 	ADD CUSTOM WIDGET SIDE BAR
*/
function zuha_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Foooter Content ', 'twentyseventeen' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Left', 'twentyseventeen' ),
			'id'            => 'footer-left',
			'class'         => 'ulstyle',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h6 class="footer-widget__title mb-20">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Middle', 'twentyseventeen' ),
			'id'            => 'footer-middle',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="footer-widget__title mb-20">',
			'after_title'   => '</h6>'
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Right', 'twentyseventeen' ),
			'id'            => 'footer-right',
			'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="footer-widget__title mb-20">',
			'after_title'   => '</h6>'
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Copyright', 'zuha' ),
			'id'            => 'copyright',
			'description'   => __( 'Add widgets here to appear in your footer.', 'zuha' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Top Section', 'zuha' ),
			'id'            => 'top_section',
			'description'   => __( 'Add widgets here to appear in your footer.', 'zuha' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Top Section for address', 'zuha' ),
			'id'            => 'top_section_2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'zuha' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'zuha_widgets_init' );



/*
* 	ADD CUSTOM POST TYPE PRODUCT
*/
// function product_post_type()
// {
//      $labels = array(
//             'name'               => _x( 'Products', 'post type general name' ),
//             'singular_name'      => _x( 'Product', 'post type singular name' ),
//             'add_new'            => _x( 'Add New', 'Product' ),
//             'add_new_item'       => __( 'Add New Product' ),
//             'edit_item'          => __( 'Edit Product' ),
//             'new_item'           => __( 'New Product' ),
//             'all_items'          => __( 'All Products' ),
//             'view_item'          => __( 'View Product' ),
//             'search_items'       => __( 'Search Products' ),
//             'not_found'          => __( 'No Products found' ),
//             'not_found_in_trash' => __( 'No Products found in the Trash' ), 
//             'parent_item_colon'  => '',
//             'menu_name'          => 'Products'
//         );
        
//         $args = array(
//             'labels'        => $labels,
//             'description'   => 'Holds our Products and Product specific data',
//             'public'        => true,
//             'menu_position' => 5,
//             'taxonomies' => array( 'product_category' ),
//             'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),

//             'has_archive'   => true,
//         );
//         register_post_type( 'product', $args ); 
// }
// add_action('init', 'product_post_type');

/*END*/

/*
*   ADD CUSTOM TAXONOMY FOR PRODUCT POST TYPE
*/

  function technology_category(){
        /* Create Product Type Taxonomy */
        $args = array(
                'label' => __( 'Categories' ),
                'rewrite' => array( 'slug' => 'technology_category' ),
                'hierarchical' => true,
                'has_archive' => 'shows',
            );

        register_taxonomy( 'technology_category', 'technologi', $args );

    }
add_action('init', 'technology_category');
/*END*/

function job_category(){
	/* Create Product Type Taxonomy */
	$args = array(
			'label' => __( 'Categories' ),
			'rewrite' => array( 'slug' => 'job_category' ),
			'hierarchical' => true,
			'has_archive' => 'shows',
		);

	register_taxonomy( 'job_category', 'job', $args );

}
add_action('init', 'job_category');

function create_post_type(  string $singular = 'Customer', 
                            string $plural = 'Customers', 
                            string $menu_icon = 'dashicons-carrot',
                            bool $hierarchical = FALSE, 
                            bool $has_archive = TRUE, 
                            string $description = '' ) {
        //Here, the default post type if no argument is passed to create_post_type() will be Customer CPT

        register_post_type( $singular, array(
        'public'            => TRUE,
        'show_in_rest'      => TRUE,
        'description'       => $description,
        'menu_icon'         => $menu_icon,
        'hierarchical'      => $hierarchical,
        'has_archive'       => $has_archive,
        'supports'          => array('title', 'editor', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'comments'),
        'labels' => array(
            'name'                      => $plural,
            'singular_name'             => $singular,
            'add_new'                   => 'Add New '.$singular,
            'add_new_item'              => 'New '.$singular,
            'edit_item'                 => 'Edit '.$singular,
            'view_item'                 => 'View '.$singular,
            'view_items'                => 'View '.$plural,
            'search_items'              => 'Search '.$plural,
            'not_found'                 => 'No '.$plural.' Found',
            'all_items'                 => 'All '.$plural,
            'archives'                  => $plural.' Archives',
            'attributes'                => $singular.' Attributes',
            'insert_into_item'          => 'Insert into '.$singular,
            'uploaded_to_this_item'     => 'Uploaded to this '.$singular,
            'featured_image'            => $singular.' Featured image',
            'set_featured_image'        => 'Set '.$singular.' featured image',
            'remove_featured_image'     => 'Remove '.$singular.' featured image',
            'use_featured_image'        => 'Use as '.$singular.' featured image',
            'filter_items_list'         => 'Filter '.$plural.' list',
            'filter_by_date'            => 'Filter '.$plural.' by date',
            'items_list_navigation'     => $plural.' list navigation',
            'items_list'                => $plural.' list',
            'item_published'            => $singular.' published.',
            'item_published_privately'  => $singular.' published privately.',
            'item_reverted_to_draft'    => $singular.' reverted to draft.',
            'item_scheduled'            => $singular.' scheduled.',
            'item_updated'              => $singular.' updated.',
            'item_link'                 => $singular.' link'
        ),

        'rewrite'           => array(
            'slug'                      => strtolower($plural),
            'pages'                     => TRUE,
        )
    ));
    
}
function custom_cpts() {
    create_post_type('slider', 'Sliders','dashicons-excerpt-view');
 	create_post_type('service', 'Services', 'dashicons-unlock');
    create_post_type('technologi', 'Technologies','dashicons-calendar');
	create_post_type('job', 'Jobs','dashicons-calendar');
}

add_action( 'init', 'custom_cpts' );

/*
*  	ADD CUSTOM CLASS TO MENU UL
*/
function atg_menu_classes($classes, $item, $args) {
	//echo '<pre>Itemaasa'; print_r($item);
	
	//exit;

	//if( !$item->has_children && $item->menu_item_parent > 0 ) {
	if($args->theme_location == 'header' && $item->menu_item_parent == 0  ) {
	  $classes[] = 'has-children has-children--multilevel-submenu';
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

  /*
* REMOVE DEFAULT ID OF UL LI FROM MENU
*/
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
function clear_nav_menu_item_id($id, $item, $args) {
    return "";
}

/*
* REMOVE DEFAULT CALSSSE FROM MENU UL LI AND ADD CUSTOM
*/
// add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
// function clear_nav_menu_item_class($classes, $item, $args) {
//     return array('scroll');
// }

/* Add custom class to link in menu */

function _namespace_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class=""', $ulclass);
}

add_filter('wp_nav_menu', '_namespace_modify_menuclass');

function register_menus() { 
    register_nav_menus(
        array(
            'mobile-menu' => 'Mobile Menu',
			'footer-menu-1' => 'Footer Menu Left',
			'footer-menu-2' => 'Footer Menu Middle',
			'footer-menu-3' => 'Footer Menu Right',
        )
    ); 
}
add_action( 'init', 'register_menus' );

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="my-custom-class"';
}

function dynamic_field_values ( $tag, $unused ) {
	$postDetails = get_post(get_the_ID());
	//echo '<pre>tag'; print_r($tag);
	$slug =isset($postDetails) && !empty($postDetails) ? $postDetails->post_name : '';
	$link=get_permalink( get_the_ID());
	if($tag['name'] == 'ApplyFor'){
		 $tag['raw_values'][0] = isset($postDetails) && !empty($postDetails) ? $postDetails->post_title : '';
		
        $tag['values'][0] ='<a hreg="'.get_site_url().'/'.$slug.'">'.  isset($postDetails) && !empty($postDetails) ? $postDetails->post_title : ''.'</a>';
		$tag['name']='ApplyFor';
	}
	else{
		return $tag;
	}
	

//	if($tag['name'] == 'PositionName'){
	 if ( ! $postDetails )
        return $tag;
	
		
	//}
		
	//echo '<pre>tag'; print_r($tag);exit;

    // $args = array (
    //     'numberposts'   => -1,
    //     'post_type'     => 'job',
    //     'orderby'       => 'title',
    //     'order'         => 'ASC',
    // );

    // $custom_posts = get_posts($args);

    // if ( ! $custom_posts )
    //     return $tag;

    // foreach ( $custom_posts as $custom_post ) {

    //     $tag['raw_values'][] = $custom_post->post_title;
    //     $tag['values'][] = $custom_post->post_title;
    //     $tag['labels'][] = $custom_post->post_title;

    // }

    return $tag;

}


add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 10, 2);

add_action( 'wpcf7_before_send_mail', 'add_my_second_recipient', 10, 1 );

function add_my_second_recipient($instance) {
    $properites = $instance->get_properties();
    // use below part if you want to add recipient based on the submitted data
    /*
    $submission = WPCF7_Submission::get_instance();
    $data = $submission->get_posted_data();
    */


	 $careerPage = get_page_by_path('career'); 
	$submission = WPCF7_Submission::get_instance();
	$data = $submission->get_posted_data();
        
    $instance->set_properties($properites);
    return ($instance);
}


// Function to change sender name
function wpb_sender_name( $original_email_from ) {
	return isset($_POST) && !empty($_POST['FullName']) ? $_POST['FullName'] : '';
   }
   
   // Hooking up our functions to WordPress filters 
 //  add_filter( 'wp_mail_from', 'wpb_sender_email' );
   add_filter( 'wp_mail_from_name', 'wpb_sender_name' );



add_shortcode('technology', 'get_technologies');


function get_technologies($atts, $content = null) {
	ob_start();
	include( get_template_directory() . '/templates/content-technologies.php'); 
	return ob_get_clean();
}


add_action('nav_menu_submenu_css_class', 'custom_submenu_css_class');
function custom_submenu_css_class() {
    return array('submenu');
}
add_action('admin_menu', 'wpdocs_unsub_add_pages');


function wpdocs_unsub_add_pages() {
	add_menu_page(
		__( 'Google analytics', 'textdomain' ),
	   __( 'Google analytics','textdomain' ),
	   'manage_options',
	   'google_analytics',
	   'add_google_analytics_code',
	   'dashicons-chart-pie'
   );
}

/**
* Disply callback for the Unsub page.
*/
function add_google_analytics_code() {
	//ob_start();
	include( get_template_directory() . '/google-analytics.php'); 
	//return ob_get_clean();
}
