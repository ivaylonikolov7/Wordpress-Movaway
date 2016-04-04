<?php
/**
 *
 * Workis with .hl7 extension file
 *
 * @package BootStart_0_1_1
 *
 * @since version 0.1.1
 *
 *
 *
 * @name HL7
 *
 * @author Aftabul Islam <toaihimel@gmail.com>
 *
 * @license GNU/GPLv3 or later
 *
 * TERMINOLOGY FOR HL7 FILE
 *  	MSH = Message Id
 * 	    PID = Paitent Identity
 *  	OBR = Exam/Digonostic Information
 * 		ORC = Commor Order Request
 * 		OBX = Transmit single observation
 *
 * */

class FM_HL7{

	/**
	 *
	 * @var array $data :: This variable holds the entire data
	 *
	 * */
	protected $data;

	/**
	 *
	 * @var string $path :: This variable is the file path of the .hl7 file.
	 *
	 * */
	protected $path;

	/**
	 *
	 * @var string $token :: The token that devides the column of the .hl7.
	 *
	 * */
	protected $token;

	/**
	 *
	 * @var file-pointer $fp :: The pointer of the .hl7 file.
	 *
	 * */
	protected $fp;

	/**
	 *
	 * @var array $headers :: The headers of the .hl7 file.
	 *
	 * */
	public $headers;

	/**
	 *
	 * @var string $message :: Any message that the class has to show.
	 *
	 * */
	protected $message;

	/**
	 *
	 * Constructor function
	 *
	 * @param string $path :: Path of the .hl7 file. The path should be absolute path of the file.
	 *
	 * @param array $callback_function :: This is used to callback a function with the row array.
	 *
	 * @param string $token :: The token that devides the .hl7 columns
	 *
	 * */
	public function __construct( $path = null, $token = '|' ){

		// Checks if the file path is valid.
		if( !$path ){
			$this->message .= '<br/>Error: File Path is empty. It is essential that you input a valid file path.<br/>';
			return;
		}

		$this->path = $path;
		$this->token = $token;

		// Opening the file
		$this->fp = fopen( $path, "r" );

	}

	/**
	 *
	 * get_row function
	 *
	 * This function gets the row of the .hl7 file.
	 *
	 * */
	public function parse_data(){

		while ( $data = fgetcsv( $this->fp, 0, $this->token ) ) $this->data[$data[0]][] = $data;

		return $this->data;
	}

}
