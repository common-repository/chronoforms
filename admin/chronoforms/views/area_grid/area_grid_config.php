<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Grid Rows/Columns'); ?></label>
	<?php $this->view(dirname(__FILE__).DS.'rows_config.php', ['unit' => $unit, 'utype' => $utype, 'n' => $n]); ?>
</div>

<?php $this->view($this->get('cf.paths.shared').'refresh_button.php'); ?>