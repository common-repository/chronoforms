<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['nodes']['tooltip']['attrs']['data-hint'])){
		$unit['nodes']['tooltip']['active'] = true;
		$unit['nodes']['tooltip']['attrs']['data-hinttrigger'] = $this->get('cf_settings.tooltip.trigger', 'hover');
	}
	if(!empty($unit['nodes']['help']['content'])){
		$unit['nodes']['help']['active'] = true;
	}