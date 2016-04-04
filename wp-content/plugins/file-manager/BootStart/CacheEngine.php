<?php

/**
 * 
 * This class creates and saves a cache file on upload directory and provides necessary function to access special type of data as JSON.
 * 
 * */
class FM_CacheEngine{
	
	/**
	 * 
	 * @var $plugin_prefix prefix of the plugin that the CacheEngine will be used.
	 * 
	 * */
	public $plugin_prefix;
	
	/**
	 * 
	 * @var $upload_url upload path for the plugin
	 * 
	 * */
	public $upload_path;
	
	/**
	 * Constructor function
	 * 
	 * Checks if the upload derictory is created, and creates a subdirectory called "cache" to save the cache files.
	 * 
	 * @param $plugin_prefix prefix of the plugin that will hold the cache engine data.
	 * 
	 * @param $upload_path path of the upload directory
	 * 
	 * */
	public function __construct($plugin_prefix, $upload_path){
		
		// Initializing the class-global $plugin_prefix variable
		$this->plugin_prefix = $plugin_prefix;
		
		// Initializing the class-global $upload_url variable
		$this->upload_path = $upload_path;
		
		// Creates cache folder
		$this->create_cache_folder();
		
		// Creating the default text file
		$this->create_storage();
	}
	
	/**
	 * 
	 * Creates the cache folder to save the data file
	 * 
	 * */
	protected function create_cache_folder(){
		
		if( !is_dir($this->upload_path.'/cache/' ) ) mkdir( $this->upload_path.'/cache/' , 0777 );
		
	}
	
	
	/**
	 * 
	 * Create the data storeage file if not created
	 * 
	 * */
	public function create_storage($file_name = null){
		
		if($file_name == null) $file_name = $this->plugin_prefix;
		
		$file_path = $this->upload_path.'/cache/'.$file_name.'.txt';
		if(!file_exists($file_path)) fopen($file_path, 'w');
		
	}
	
	/**
	 * 
	 * Load the javascript array
	 * 
	 * @param $file_name Name of the file to fetch data form.
	 * 
	 * @param $as_array if the data is shown as array.
	 * 
	 * */
	public function get_data($file_name = null, $as_array = true){
		
		if($file_name == null) $file_name = $this->plugin_prefix;
		$file_path = $this->upload_path.'/cache/'.$file_name.'.txt';
		//~ if(!file_exists($file_path)) fopen($file_path, 'r');
		
		return json_decode(file_get_contents($file_path), $as_array);
		
	
	}
	
	/**
	 * 
	 * Updates the data file
	 * 
	 * @param $array array data to be saved.
	 * 
	 * @param $file_name Name of the file.
	 * 
	 * */
	public function set_data($array, $file_name = null){
		
		if($file_name == null) $file_name = $this->plugin_prefix;
		$file_path = $this->upload_path.'/cache/'.$file_name.'.txt';
		
	}
}
