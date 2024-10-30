<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Custom parameters'); ?></label>
	<?php $this->view($this->get('cf.paths.shared').'parameters_config.php', ['unit' => $unit, 'utype' => $utype, 'n' => $n]); ?>
	<small><?php el3('List of extra parameters to be passed to the gateway.'); ?></small>
</div>