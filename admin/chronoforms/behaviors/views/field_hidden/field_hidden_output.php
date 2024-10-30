<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(strpos($unit['type'], 'area_') === 0){
		$unit['nodes']['main']['attrs']['class']['hidden'] = 'hidden';
	}else{
		$unit['nodes']['container']['attrs']['class']['hidden'] = 'hidden';
	}