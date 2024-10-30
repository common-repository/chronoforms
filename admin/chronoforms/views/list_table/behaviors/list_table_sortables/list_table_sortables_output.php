<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['sortables'])){
		if(!empty($unit['data_source'])){
			$this->controller->FData->cdata('functions.'.$unit['data_source'][1].'.models.data.sortable', $unit['sortables'], true);
		}
	}