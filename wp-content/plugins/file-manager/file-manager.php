<?php
/**
 * 
 * Plugin Name: File Manager
 * Author Name: Aftabul Islam
 * Version: 2.2.0
 * Author Email: toaihimel@gmail.com
 * License: GPLv2
 * Description: Manage your file the way you like. You can upload, delete, copy, move, rename, compress, extract files. You don't need to worry about ftp any more. It is realy simple and easy to use.
 *
 * */

// Including elFinder class
require_once('elFinder/elFinder.php');

// Including bootstarter
require_once('BootStart/__init__.php');

class FM extends FM_BootStart {

	public function __construct($name){

		// Adding Menu
		$this->menu_data = array(
			'type' => 'menu',
		);

		// Adding Shortcodes
		//~ $this->STD = array(
			//~ 'show_order', // Function Name {show_order}_view
			//~ 'order_new_test', // Function Name {order_new_test_view}
		//~ );

		// Adding Ajax
		$this->add_ajax('connector'); // elFinder ajax call
		$this->add_ajax('valid_directory'); // Checks if the directory is valid or not
		//~ $this->add_ajax('import_all_mtl'); // Function name will be "ajax_function_name"
		//~ $this->add_ajax('reorder'); // Function name reorder

		// Adding template loading hook for woocommerce
		//~ add_filter( 'woocommerce_locate_template', array($this, 'custom_templates'), 10, 3 );

		// Direct Checkout page
		//~ add_filter('woocommerce_add_to_cart_redirect', array(&$this, 'go_to_checkout') );

		// Setting up corn job
		//~ if ( ! wp_next_scheduled( 'import_hl7_files' ) ) wp_schedule_event( time(), 'hourly', 'import_hl7_files' );

		// Adding corn action
		//~ add_action( 'import_hl7_files', array( $this, 'import_all_mtl' ) );

		//~ add_action( 'wp_footer', array(&$this, 'footer_manager') );

		parent::__construct($name);

	}
	
	/**
	 * 
	 * File manager connector function
	 * 
	 * */
	public function connector(){
		
		$opts = array(
			'debug' => true,
			'roots' => array(
				array(
					'driver'        => 'LocalFileSystem',           // driver for accessing file system (REQUIRED)
					'path'          => ABSPATH,                 // path to files (REQUIRED)
					'URL'           => site_url(), // URL to files (REQUIRED)
					'uploadDeny'    => array(),                // All Mimetypes not allowed to upload
					'uploadAllow'   => array('image', 'text/plain', 'codeclimate.yml'),// Mimetype `image` and `text/plain` allowed to upload
					'uploadOrder'   => array('deny', 'allow'),      // allowed Mimetype `image` and `text/plain` only
					'accessControl' => 'access'                     // disable and hide dot starting files (OPTIONAL)
				)
			)
		);
		
		$elFinder = new FM_EL_Finder();
		$elFinder = $elFinder->connect($opts);
		$elFinder->run();
				
		die();
	}
	
	
	/**
	 * 
	 * Used to call with a option parameter.
	 * 
	 * */
	public function connector_with_opt($options = null){
		
		if($options == null){
			$options = array(
				'debug' => true,
				'roots' => array(
					array(
						'driver'        => 'LocalFileSystem',           // driver for accessing file system (REQUIRED)
						'path'          => ABSPATH,                 // path to files (REQUIRED)
						'URL'           => site_url(), // URL to files (REQUIRED)
						'uploadDeny'    => array(),                // All Mimetypes not allowed to upload
						'uploadAllow'   => array('image', 'text/plain', 'codeclimate.yml'),// Mimetype `image` and `text/plain` allowed to upload
						'uploadOrder'   => array('deny', 'allow'),      // allowed Mimetype `image` and `text/plain` only
						'accessControl' => 'access'                     // disable and hide dot starting files (OPTIONAL)
					)
				)
			);
		}
		
		$elFinder = new FM_EL_Finder();
		$elFinder = $elFinder->connect($opts);
		$elFinder->run();
		
	}
	
	/**
	 * 
	 * */
	public function valid_directory(){
		
		
		
		die();
	}
	
	/*
	 *
	 * Sample shortcode function
	 *
	 * */
	//~ public function show_order_view($data){
//~ 
		//~ $this->render($data); // Renders views/shortcode_name_view.php file
//~ 
	//~ }

	/**
	 *
	 * Ajax sample function
	 *
	 * */
	public function ajax_function_name(){

	}

}

global $FileManager;
$FileManager = new FM('File Manager');
