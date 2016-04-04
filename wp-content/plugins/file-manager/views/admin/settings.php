<!--
## Root Directory Setting for wordpress [webroot, wp]
## toogle hidden files
## Change File Manager width and height
-->
<?php

defined('ABSPATH') or die();

//~ $this->pr($this->options->options);

?>

<form name="settings-form" method="post" action="">
		
	<div class='form-blokc'>
		<label for="root-directory-id">Root Directory: </label>
		<input type='text' value='' id='root-directory-id' />
		<small>Root directory of admin file manager.</small>
	</div>
	
	<div class='form-blokc'>
		<input type='checkbox' value='' id='hidden-files-id' />
		<label for="hidden-files-id">Show hidden files</label>
		<small>Toogle file manager.</small>
	</div>
	
	<div class='form-blokc'>
		<label for="width-id">Width: </label>
		<input type='int' value='' id='width-id' />
	
		<label for="height-id">Height: </label>
		<input type='int' value='' id='height-id' />
		<small>Height and width of the file manager.</small>
	</div>
	
	<input type='submit' value="Save" />
	
</form>
