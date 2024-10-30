<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$unit['nodes']['main']['attrs']['name'] = 'gpage';

	$unit['nodes']['main']['attrs']['value'] = $this->controller->FData->cdata('pages.'.$unit['next_page'].'.urlname');