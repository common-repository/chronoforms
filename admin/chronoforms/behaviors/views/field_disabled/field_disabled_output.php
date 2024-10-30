<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$unit['nodes']['container']['attrs']['class']['disabled'] = 'disabled';
	$unit['nodes']['main']['attrs']['disabled'] = 'disabled';

	if(!empty($unit['fns']['validation']['fields'][$unit['uid']])){
		$unit['fns']['validation']['fields'][$unit['uid']]['server_disabled'] = true;
	}