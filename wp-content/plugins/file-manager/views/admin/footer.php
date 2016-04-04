<?php

$footer_text = "<span><a href='http://www.giribaz.com'>Go Premium</span></a> Our premium plugin offers tons of features and priority support. Don't forget to leave us a <a href='https://wordpress.org/support/view/plugin-reviews/file-manager'>review</a>. If you find anything difficult jsut ask <a href='https://wordpress.org/support/plugin/file-manager'>here</a>.";

$footer_text = apply_filters( 'fm_footer', $footer_text );
?>
<div class='bootstart-admin-footer'>
<?php echo $footer_text; ?>
</div>
