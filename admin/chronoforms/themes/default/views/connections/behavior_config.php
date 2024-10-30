<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$this->view($this->get('cf.paths.shared').'behavior_config.php', ['utype' => $utype, 'n' => $n, 'behavior' => $behavior, 'unit' => $unit]);
?>