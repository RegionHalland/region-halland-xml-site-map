<?php

	/**
	 * @package Region Halland Post Type XML Site Map
	 */
	/*
	Plugin Name: Region Halland Post Type XML Site Map
	Description: Specialsida för att visa site map
	Version: 1.0.0
	Author: Roland Hydén
	License: MIT
	Text Domain: regionhalland
	*/

	// vid 'init', anropa funktionen region_halland_register_utbildning()
	add_action('init', 'region_halland_register_xml_site_map' );

	// Denna funktion registrerar en ny post_type och gör den synlig i wp-admin
	function region_halland_register_xml_site_map() {
		
		// Vilka labels denna post_type ska ha
		$labels = array(
		        'name' => _x( 'xml-site-map', 'Post type general name', 'textdomain' ),
		        'singular_name' => _x( 'xml-site-map', 'Post type singular name', 'textdomain' )
		    );
		
		// Inställningar för denna post_type 
	    $args = array(
	        'labels' => $labels,
	        'rewrite' => array('slug' => 'xml-site-map'),
			'show_ui' => false,
			'has_archive' => true,
			'publicly_queryable' => true,
			'public' => true,
			'show_in_menu' => false,
			'query_var' => false,
			'menu_icon' => 'dashicons-megaphone',
	        'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	    );

	    // Registrera post_type
	    register_post_type('xml-site-map', $args);
	    
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_post_type_xml_site_map_activate() {
		
		// Vi aktivering, registrera post_type "utbildning"
		region_halland_register_xml_site_map();

		// Tala om för wordpress att denna post_type finns
		// Detta gör att permalink fungerar
	    flush_rewrite_rules();


	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_post_type_xml_site_map_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_post_type_xml_site_map_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_post_type_xml_site_map_deactivate');

?>