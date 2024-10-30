<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['name'] .= '[]';
	echo $this->Field->buildMulti($view, 'checkbox');