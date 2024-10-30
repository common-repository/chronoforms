<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('Upload path'); ?></label>
		<input type="text" value="<?php echo $this->get('cf_settings.upload.path', ''); ?>" name="Connection[views][<?php echo $n; ?>][fns][upload][fields][<?php echo $n; ?>][path]">
		<small><?php el3('Abolsute upload path on the server'); ?></small>
	</div>
</div>