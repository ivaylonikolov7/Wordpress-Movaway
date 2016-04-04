<?php 


class FM_Debug{
	
	public static function P($variable){
		
		if( !defined('B_DEBUG') || !B_DEBUG) return;
		
		echo "<pre>";
		print_r($variable);
		echo "</pre>";
		
	}
	
}

?>
