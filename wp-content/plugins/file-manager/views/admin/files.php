<?php

defined('ABSPATH') or die(include('../404.php'));

$connector_url =  $this->url('elFinder/php/connector.minimal.php');

?>


<div id='file-manager-wrapper'>

</div>

<script>

PLUGINS_URL = '<?php echo plugins_url();?>';

jQuery(document).ready(function(){
	jQuery('#file-manager-wrapper').elfinder({
		url: ajaxurl,
		customData:{action: 'connector'}
	});
});

</script>
