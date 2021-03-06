<?php
/**
 *
 * The starter file that holds everything togather.
 *
 * @package BootStart_1_0_0
 *
 * @since version 0.1.1
 *
 * */

/**
 *
 * Holds almost all the functionality that this nano framework supports.
 *
 *
 * We will eventually add more detailed description later.
 *
 * */
abstract class FM_BootStart{

	/**
	 *
	 * @var string $name name of the plugin
	 *
	 * */
	 protected $name;

	/**
	 *
	 * @var string $prefix Plugin wide prefix that will be used to differentiate from other plugin / or system vars
	 *
	 * */
	 protected $prefix;

	/**
	 *
	 * @var string $path Absolute path of the plugin.
	 *
	 * */
	 protected $path;

	/**
	 *
	 * @var bool $devEnv This variable is used to determine if the plugin will use the DevEnv variable which is defined at wp-config file.
	 *
	 * */
	 protected $devEnv;

	/**
	 *
	 * @var array $CPTD Custom Post Type Data
	 *
	 * */
	 protected $CPTD;

	/**
	 *
	 * @var array $SCD Short Code Data
	 *
	 * */
	 protected $SCD;

	/**
	 *
	 * @var object $options The object of the options class
	 *
	 * */
	 protected $options;

	/**
	 *
	 * @var string $upload_path :: This variable holds the path of the default upload folder
	 *
	 * */
	 public $upload_path;
	
	/**
	 *
	 * @var string $upload_url :: This variable holds the url of the default upload folder
	 *
	 * */
	 public $upload_url;

	/**
	 *
	 * @var array $menu :: Defines how the menu would be
	 *
	 * */
	protected $menu_data;
	
	/**
	 * 
	 * @var CE Cache Engine object
	 * 
	 * */
	protected $CE;
	
	/**
	 *
	 * Constructor function
	 *
	 *
	 * This function does the works that every plugin must do like checking ABSPATH,
	 * triggering activation and deactivation hooks etc.
	 *
	 * @todo Add an uninstall function
	 *
	 * */
	 function __construct($name){

		// Assigning name
		$this->name = trim($name);

		// Assigning prefix
		$this->prefix = str_replace( ' ', '-', strtolower(trim($this->name)) );

		// Assigning path
		$this->path = __FILE__;

		// Assigning DevEnv
		$this->devEnv = false;

		// Upload folder path
		$upload = wp_upload_dir();
		$this->upload_path = $upload['basedir'] . '/' . $this->prefix;

		// Upload folder url
		$upload = wp_upload_dir();
		$this->upload_url = $upload['baseurl'] . '/' . $this->prefix;

		// Setting php.ini variables
		$this->php_ini_settings();

		// Loading Options

		$this->options = new FM_OptionsManager($this->name);
		
		// Creating upload folder.
	   	$this->upload_folder();
	
		// Cache Object
		$this->CE = new FM_CacheEngine($this->prefix, $this->upload_path);
		
		// Frontend asset loading
		add_action('wp_enqueue_scripts', array(&$this, 'assets') );

		// Admin Panel asset loading
		add_action('admin_enqueue_scripts', array(&$this, 'admin_assets') );

		// Adding a menu at admin area
		add_action( 'admin_menu', array(&$this, 'menu') );

		// Adding uninstall hook


		// Adding Ajax hooks


		// Custom post hook
		add_action( 'init', array(&$this, 'custom_post') );

		// Shortcode hook
		add_action( 'init', array(&$this, 'shortcode') );
		
		// Registering activation hook
		register_activation_hook(__FILE__, array('BootStart', 'activate') );

		// Registering deactivation hook
		register_deactivation_hook(__FILE__, array('BootStart', 'deactivate') );
		
	 }

	/**
	 *
	 * Set the all necessary variables of php.ini file.
	 *
	 * @todo Add some php.ini variables.
	 *
	 * */
	 protected function php_ini_settings(){

		// This should have a standard variable list.
		/**
		 * 
		 * ## Increase file upload limit
		 * ## Turn on error if of php if debugging variable is defined and set to true.
		 * 
		 * */
		ini_set('post_max_size', '128M');
		ini_set('upload_max_filesize', '128M');
	 }

	/**
	 *
	 * Activation hook function
	 *
	 * @todo Add dependency check
	 *
	 * */
	 public static function activate(){
		
		// Nothing yet
		
	 }

	/**
	 *
	 * Deactivation hook function
	 *
	 * */
	 public static function deactivate(){

		// Nothing is added here yet.

	 }

	/**
	 *
	 * Loads frontend assets
	 *
	 * */
	 public function assets(){

		// Including front-style.css
		wp_enqueue_style($this->__('front-style'), $this->url('css/front-style.css'), false);

		// Including front-script.js
		wp_enqueue_script($this->__('front-script'), $this->url('js/front-script.js'), array(), '1.0.0', true );

		// Including media for media upload
		wp_enqueue_media();
		
		// Jquery UI CSS
		//~ wp_enqueue_style( 'fmp_jquery-ui-css', $this->url('jquery-ui-1.11.4/jquery-ui.min.css') );
		//~ 
		//~ // Jquery UI theme
		//~ wp_enqueue_style( 'fmp_jquery-ui-css-theme', $this->url('jquery-ui-1.11.4/jquery-ui.theme.css') );
		//~ 
		//~ // elFinder CSS
		//~ wp_enqueue_style( 'fmp_elfinder-css', $this->url('elFinder/css/elfinder.min.css') );
		//~ 
		//~ // elFinder theme CSS
		//~ wp_enqueue_style( 'fmp_elfinder-theme-css', $this->url('elFinder/css/theme.css') );
		//~ 
		//~ // elFinder Scripts depends on jQuery UI core, selectable, draggable, droppable, resizable, dialog and slider.
		//~ wp_enqueue_script( 'fmp_elfinder-script', $this->url('elFinder/js/elfinder.full.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'jquery-ui-resizable', 'jquery-ui-dialog', 'jquery-ui-slider', ) );
	 
	 }

	/*
	 *
	 * Loads the backend / admin assets
	 *
	 * */
	 public function admin_assets(){
		
		// Jquery UI CSS
		wp_enqueue_style( $this->__('jquery-ui-css'), $this->url('jquery-ui-1.11.4/jquery-ui.min.css') );
		
		// Jquery UI theme
		wp_enqueue_style( $this->__('jquery-ui-css-theme'), $this->url('jquery-ui-1.11.4/jquery-ui.theme.css') );
		
		// elFinder CSS
		wp_enqueue_style( $this->__('elfinder-css'), $this->url('elFinder/css/elfinder.min.css') );
		
		// elFinder theme CSS
		wp_enqueue_style( $this->__('elfinder-theme-css'), $this->url('elFinder/css/theme.css') );
		
		// Including admin-style.css
		wp_enqueue_style( $this->__('admin-style'), $this->url('css/admin-style.css') );

		// Including utility.php
		wp_enqueue_script( $this->__('utility-script'), $this->url('js/utility.php') );

		// Including admin-script.js
		wp_enqueue_script( $this->__('admin-script'), $this->url('js/admin-script.js'), array('jquery') );
		
		// elFinder Scripts depends on jQuery UI core, selectable, draggable, droppable, resizable, dialog and slider.
		wp_enqueue_script( $this->__('elfinder-script'), $this->url('elFinder/js/elfinder.full.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectable', 'jquery-ui-draggable', 'jquery-ui-droppable', 'jquery-ui-resizable', 'jquery-ui-dialog', 'jquery-ui-slider', ) );

	 }

	/**
	 *
	 * Adds a sidebar/sub/top menu
	 *
	 * */
	public function menu(){

		if( empty( $this->menu_data ) ) return;

		if($this->menu_data['type'] == 'menu'){
			// @ add_menu_page( $this->name, $this->name, 'manage_options', $this->prefix, array($this, 'admin_page'));
			add_menu_page( $this->name, $this->name, 'manage_options', $this->prefix.'_settings', array(&$this, 'admin_panel'), '', 7 );
			// @ add_posts_page( 'V Movies', 'V Movies', 'manage_options', 'v-movies', array($this, 'admin_panel') );
		}

	}

	/**
	 *
	 * Adds an admin page to the backend.
	 *
	 * */
	 public function admin_panel(){

		if(!current_user_can('manage_options')) die( $this->render('', 'access-denied') );

		$this->render('', 'admin/index');

	 }

	/**
	 *
	 * Absolute path finder
	 *
	 * @param string $relative_path relative path to the this plugin root folder.
	 * */
	 protected function path($relative_path){

		return ABSPATH.'wp-content/plugins/'.$this->prefix.'/'.$relative_path;

	 }

	/**
	 *
	 * Absolute URL finder
	 *
	 * @param string $string the relative url
	 *
	 * */
   	 public function url($string){

		return plugins_url('/'.$this->prefix.'/'.$string);

	 }

	/**
	 *
	 * Prefixes
	 *
	 * @param string $string Takes any literal string.
	 *
	 * */
	 private function __($string){

		return $string = $this->prefix.'__'.$string;

	 }

	/**
	 *
	 * Shows the debugs
	 *
	 * @param string/array/int $data
	 *
	 * */
	 public function pr($data){

		if($this->devEnv) if( !defined('DevEnv') || DevEnv == false ) return;
		echo "<pre>";
		print_r($data);
		echo "</pre>";

	 }

	/**
	 *
	 * Adds ajax hooks and functions automatically
	 *
	 *
	 * @param string $name Name of the function
	 *
	 * @param bool $guest Should the function work for guests *Default: false*
	 *
	 * */
	 public function add_ajax($name, $guest = false){

		// Adds admin ajax
		$hook = 'wp_ajax_'.$name;
		add_action( $hook, array($this, $name) );

		// Allow guests
		if(!$guest) return;

		$hook = 'wp_ajax_nopriv_'.$name;
		add_action( $hook, array($this, $name) );

	 }

	/**
	 *
	 * Get the script for ajax request
	 *
	 *
	 * @param string $name Name of the ajax request fuction.
	 *
	 * @param array $data Post data to send
	 *
	 * @return string $script A jQuery.post() request function to show on the the main page.
	 *
	 * */
	 public function get_ajax_script($name, $data){

		$data['action'] = $name;

	 ?>

		jQuery.post(
			'<?php echo admin_url('admin-ajax.php'); ?>',
			<?php echo json_encode($data);?>
			'<?php echo $name; ?>'
		);

	 <?php

	 }

	/**
	 *
	 * Adds custom post
	 *
	 * */
	 public function custom_post(){

		if(empty($this->CPTD)) return;

		foreach ( $this->CPTD as $custom_post ){

			$ret = register_post_type($custom_post[0], $custom_post[1]);

		}

	 }

	/**
	 *
	 * Adds Shortcodes
	 *
	 * */
	 public function shortcode(){

		if( empty($this->STD) ) return;

		foreach ( $this->STD as $std ){

			$ret = add_shortcode($std, array($this, $std.'_view') );

		}

	 }

	/**
	 *
	 * Includes a view file form the view folder which matches the called functions name
	 *
	 * @param string $view_file Name of the view file.
	 *
	 * */
	 protected function render($data=null, $view_file = null){

		if($view_file == null){

			// Generates file name from function name
			$trace = debug_backtrace();
			$view_file = $trace[1]['function'].'.php';

		} else {

			$view_file .='.php';

		}

		include( $this->path('views/'.$view_file) );

	 }

	/**
	 *
	 * @function upload_folder Checks if the upload folder is present. If not creates a upload folder.
	 *
	 * */
	protected function upload_folder(){

		// Creats upload directory for this specific plugin
		if( !is_dir($this->upload_path ) ) mkdir( $this->upload_path , 0777 );

	}
	
	/**
	 * 
	 * For persentable version of slugs
	 * 
	 * */
	public function __p($string){
		$string = str_replace('_', ' ', $string);
		$string = str_replace('-', ' ', $string);
		$string[0] = strtoupper($string[0]);
		return $string;
	}
	
	/**
	 * 
	 * string compression function
	 * 
	 * */
	public function zip($string){
		
		$string = trim($string);
		$string = str_replace(' ', '-', $string);
		$string = strtolower($string);
		return $string;
		
	}
}
