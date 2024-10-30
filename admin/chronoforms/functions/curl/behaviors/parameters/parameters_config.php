<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php $this->view($this->get('cf.paths.shared').'parameters_config.php', ['unit' => $unit, 'utype' => $utype, 'n' => $n]); ?>