<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Values'); ?></label>
	<?php $this->view(dirname(__FILE__).DS.'values_config.php', ['unit' => $unit, 'utype' => $utype, 'n' => $n]); ?>
</div>