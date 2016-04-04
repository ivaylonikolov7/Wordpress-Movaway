<?php
/**
 *
 * Downloads file to local server for later use.
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

class FM_FTP{

	/**
	 *
	 * @var string $server :: Name of the remote file server where the file resides.
	 *
	 * */
	protected $server;

	/**
	 *
	 * @var string $username :: Username
	 *
	 * */
	protected $username;

	/**
	 *
	 * @var string $password :: Password of the associated username.
	 *
	 * */
	protected $password;

	/**
	 *
	 * @var pointer $connect :: The server connection.
	 *
	 * */
	protected $connect;

	/**
	 *
	 * @var constant $file_transfer_mode :: File transfer mode FTP_ASCII and FTP_BINARY
	 *
	 * */
	protected $file_transfer_mode;

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
	 * */
	public function __construct( $server = null, $username = null, $password = null){

		// Populating Global Variables
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->stablish_connection();
	}

	/**
	 *
	 * stablish_connection
	 *
	 * Stablishes connection
	 *
	 * */
	public function stablish_connection(){
		// Connecting
		$this->connect = ftp_connect( $this->server );

		// Populating Local Variables
		$login = ftp_login( $this->connect, $this->username, $this->password );
	}

	/**
	 *
	 * get_file function
	 *
	 * This function gets the row of the .csv file.
	 *
	 * */
	public function get_file($file_location_local, $file_location_remote, $file_transfer_mode = FTP_ASCII){

		$response = ftp_get( $this->connect, $file_location_local, $file_location_remote, $file_transfer_mode );
		ftp_close($this->connect);
		return $response;
	}

	/**
	 *
	 * get_files
	 *
	 * Gets all the file list in a directory
	 *
	 * */
	public function get_files($directory_path){

		$file_list = ftp_nlist( $this->connect, $directory_path );

		return $file_list;

	}

	/**
	 *
	 * delete_file
	 *
	 * Deletes single file from the remote server
	 *
	 * */
	public function delete_file($file_path){
		return ftp_delete($this->connect, $file_path);
	}

}
