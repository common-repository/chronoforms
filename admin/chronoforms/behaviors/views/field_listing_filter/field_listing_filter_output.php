<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['units']['filter_list']['uid'])){
		$ounit = $this->controller->FData->cdata('functions.'.$unit['units']['filter_list']['uid']);

		$unit['units']['filter_list']['settings']['models']['data']['filters'][$unit['uid']]['fieldname'] = $unit['nodes']['main']['attrs']['name'];

		$ounit = array_replace_recursive($ounit, $unit['units']['filter_list']['settings']);
		$this->controller->FData->cdata('functions.'.$unit['units']['filter_list']['uid'], $ounit, true);
	}