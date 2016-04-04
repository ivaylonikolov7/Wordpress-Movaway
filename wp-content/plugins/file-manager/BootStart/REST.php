<?php
/**
 *
 * Works with REST. Recives REST data.
 *
 * @package BootStart_0_1_0
 *
 * @since version 0.1.0
 *
 *
 *
 * @name CSV
 *
 * @author Aftabul Islam <toaihimel@gmail.com>
 *
 * @license GNU/GPLv3 or later
 *
 *
 *
 * */

class FM_REST{

	/**
	 *
	 * @var array $post The post data that has to be sent to the the remove server.
	 *
	 * */
	 protected $post;

	/**
	 *
	 * @var string $url URL of the request.
	 *
	 * */
	 protected $url;

	/**
	 *
	 * @var array $header Header data that is to be included.
	 *
	 * */
	 protected $header;

	/**
	 *
	 * @var string $response_type What type of response does the request return JSON/XML
	 *
	 * */
	 protected $return_type;

	/**
	 *
	 * @var string $prefix The prefix of this class to store cached data in the database.
	 *
	 * */
	 protected $prefix;

    /**
     *
     * @var array $cache The cached data will be stored here.
     *
     * */
     protected $cache;

	/**
	 *
	 * Constructor function
	 *
	 * @param string $url URL of the request
	 *
	 * @param array $post The post data that had to be sent
	 *
	 * @param string $return_type The response type
	 *
	 * @param string $prefix Prefix to be used for saving cached data.
	 *
	 * */
	 function __construct($url, $return_type = 'JSON', $post = null, $header = null, $prefix = 'REST_'){

		$this->url = $url;

		$this->post = $post;

		$this->return_type = $return_type;

		$this->header = $header;

		$this->prefix = $prefix;

		// Loading cached data
		$this->cache = get_option($this->prefix);
		$this->cache = !empty($this->cache) ? $this->cache : array();

		// Registering function
		register_shutdown_function( array($this, 'destruct') );

	 }

	/**
	 *
	 * Get the response from the remote server.
	 *
	 * @param bool $from_cache Should the result be retirved from cache.
	 *
	 * @return array $response The data fetched from the request.
	 *
	 * */
	 public function get_response($from_cache = false){

		$key = $this->url.$this->return_type.serialize($this->post).serialize($this->header);

		// Should the data be returned from cahce
		if($from_cache){

			if( isset($this->cache["{$key}"])  && !empty($this->cache["{$key}"]) ) return $this->cache["{$key}"];

		}

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Setting header information
		if( !empty($this->header) ) curl_setopt( $ch, CURLOPT_HTTPHEADER, $this->header );

		$response = curl_exec($ch);



		curl_close($ch);

		$data = json_decode($response);

		$this->cache["{$key}"] = $data;

		return $data;
	 }

	/**
	 *
	 * Destructor function
	 *
	 * */
	 function destruct(){

		update_option($this->prefix, $this->cache);

	 }

}
