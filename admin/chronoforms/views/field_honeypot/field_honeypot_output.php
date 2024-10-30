<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['container']['attrs']['class']['hidden'] = 'hidden';
	echo $this->Field->build($view);