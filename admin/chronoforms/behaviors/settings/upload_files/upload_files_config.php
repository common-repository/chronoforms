<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Upload Path'); ?></label>
	<input type="text" placeholder="<?php el3('Leave empty to use the Global uploads path'); ?>" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][upload][path]">
	<small><?php el3('Full server path to the upload directory'); ?></small>
</div>