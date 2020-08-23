<?php 

 add_action('after_setup_theme','dizzency_theme_supports');

 function dizzency_theme_supports(){
 	add_theme_support( 'menus' );
 	add_theme_support( 'widgets' );
 	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('custom-logo');
 	register_nav_menus( array(
		 'top_menu'				=>'Top Menu',
		 'footer_menu'			=>'Footer Menu'
 	) );
 };

add_action('wp_enqueue_scripts','dizzency_assets');

function dizzency_assets(){


	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Raleway:100,300,400,700', null, true,'all');
	wp_enqueue_style( 'owl-carousel', get_theme_file_uri().'/css/owl.carousel.min.css', null, true,'all');
	wp_enqueue_style( 'owl-carousel-theme', get_theme_file_uri().'/css/owl.theme.default.min.css', null, true,'all');
	wp_enqueue_style( 'animate', get_theme_file_uri().'/css/animate.css', null, true,'all');
	wp_enqueue_style( 'icomoon', get_theme_file_uri().'/css/icomoon.css', null, true,'all');
	wp_enqueue_style( 'themify', get_theme_file_uri().'/css/themify-icons.css', null, true,'all');
	wp_enqueue_style( 'bootstrap', get_theme_file_uri().'/css/bootstrap.css', null, true,'all');
	wp_enqueue_style( 'magnific', get_theme_file_uri().'/css/magnific-popup.css', null, true,'all');
	wp_enqueue_style( 'main',get_stylesheet_uri());


	wp_enqueue_script('jquery', get_theme_file_uri().'/js/jquery.min.js',null,true, true);
	wp_enqueue_script('jquery-easing', get_theme_file_uri().'/js/jquery.easing.1.3.js',null,true, true);
	wp_enqueue_script('bootstrap', get_theme_file_uri().'/js/bootstrap.min.js',null,true, true);
	wp_enqueue_script('jquery-waypoints', get_theme_file_uri().'/js/jquery.waypoints.min.js',null,true, true);
	wp_enqueue_script('owl-carousel', get_theme_file_uri().'/js/owl.carousel.min.js', array('jquery'),true, true);
	wp_enqueue_script('jquery-magnific-popup', get_theme_file_uri().'/js/jquery.magnific-popup.min.js',null,true, true);
	wp_enqueue_script('magnific-popup-options', get_theme_file_uri().'/js/magnific-popup-options.js',null,true, true);
	wp_enqueue_script('modernizr', get_theme_file_uri().'/js/modernizr-2.6.2.min.js',null,true, true);
	wp_enqueue_script('main', get_theme_file_uri().'/js/main.js',array('jquery'),true, true);
};

 
	
include_once ('inc/redux-framework/ReduxCore/framework.php');
include_once ('inc/tgm/example.php');
include_once ('inc/redux-framework/config.php');
include_once ('shortcodes/home_hero_shortcode.php');
include_once ('shortcodes/client_shortcode.php');
include_once ('shortcodes/services_shortcode.php');
include_once ('shortcodes/products_shortcode.php');
include_once ('shortcodes/testimonial_shortcod.php');
include_once ('shortcodes/all_hero_shortcode.php');
include_once ('shortcodes/team_shortcode.php');
include_once ('shortcodes/portfolio_shortcode.php');
include_once ('shortcodes/contact_header_shortcode.php');
include_once ('shortcodes/contact_data_shortcode.php');



// custom post types
function cptui_register_my_cpts()
{

	/**
	 * Post Type: Clients.
	 */

	$labels = [
		"name" => __("Clients", "dizzency"),
		"singular_name" => __("Client", "dizzency"),
	];

	$args = [
		"label" => __("Clients", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "client_post", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-businessperson",
		"supports" => ["title", "thumbnail"],
	];

	register_post_type("client_post", $args);

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __("Services", "dizzency"),
		"singular_name" => __("Service", "dizzency"),
	];

	$args = [
		"label" => __("Services", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "services_area", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-desktop",
		"supports" => ["title", "editor"],
	];

	register_post_type("services_area", $args);

	/**
	 * Post Type: Products.
	 */

	$labels = [
		"name" => __("Products", "dizzency"),
		"singular_name" => __("Product", "dizzency"),
	];

	$args = [
		"label" => __("Products", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "product_post", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-store",
		"supports" => ["title", "editor", "thumbnail"],
	];

	register_post_type("product_post", $args);

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __("Testimonials", "dizzency"),
		"singular_name" => __("Testimonial", "dizzency"),
	];

	$args = [
		"label" => __("Testimonials", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "testimonial_area", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => ["title", "editor", "thumbnail"],
	];

	register_post_type("testimonial_area", $args);

	/**
	 * Post Type: Team Members.
	 */

	$labels = [
		"name" => __("Team Members", "dizzency"),
		"singular_name" => __("Team Member", "dizzency"),
	];

	$args = [
		"label" => __("Team Members", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "team_post", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => ["title", "editor", "thumbnail"],
	];

	register_post_type("team_post", $args);

	/**
	 * Post Type: Portfolios.
	 */

	$labels = [
		"name" => __("Portfolios", "dizzency"),
		"singular_name" => __("Portfolio", "dizzency"),
	];

	$args = [
		"label" => __("Portfolios", "dizzency"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "portfolio_post", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-add-page",
		"supports" => ["title", "editor", "thumbnail", "custom-fields"],
	];

	register_post_type("portfolio_post", $args);
}

add_action('init', 'cptui_register_my_cpts');

// custom fields
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_5ea06c0dca23b',
		'title' => 'Portfolio Data',
		'fields' => array(
			array(
				'key' => 'field_5ea06c21d4fbb',
				'label' => 'Project Link',
				'name' => 'portfolio_project_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio_post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5e9f25e9d5ddb',
		'title' => 'Product Area',
		'fields' => array(
			array(
				'key' => 'field_5e9f25f699a76',
				'label' => 'Product Link',
				'name' => 'product_area_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5e9f28a0003d7',
				'label' => 'Product Overlay Color',
				'name' => 'product_overlay_color',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product_post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5e9f21f9b00a4',
		'title' => 'Service Icon',
		'fields' => array(
			array(
				'key' => 'field_5e9f2207e88e0',
				'label' => 'Icon Class',
				'name' => 'service_icon_class',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'services_area',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5ea066b037360',
		'title' => 'Team Member Data',
		'fields' => array(
			array(
				'key' => 'field_5ea066d0d57d8',
				'label' => 'Member Role',
				'name' => 'member_role',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ea066ddd57d9',
				'label' => 'Facebook Link',
				'name' => 'team_facebook_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ea066f9d57da',
				'label' => 'Twitter Link',
				'name' => 'team_twitter_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5ea06706d57db',
				'label' => 'Linkedin Link',
				'name' => 'team_linkedin_link',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'team_post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;