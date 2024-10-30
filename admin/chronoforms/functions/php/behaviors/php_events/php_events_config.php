<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$this->view($this->get('cf.paths.shared').'parameters_config.php', [
		'unit' => $unit, 
		'utype' => $utype, 
		'n' => $n,
		'name' => 'areas',
		'text' => rl3('Add Return Event'),
		'name_label' => rl3('Event Name'),
		'value_label' => rl3('Return Value'),
	]);
?>

<?php $this->view($this->get('cf.paths.shared').'refresh_button.php'); ?>