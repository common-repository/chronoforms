<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['areas'])){
		foreach($unit['areas'] as $ak => $area){
			if(!empty($area['value']) AND ($this->get($unit['name']) == $area['value'])){
				$this->controller->Page->fevents[$unit['name']][$area['name']] = true;
			}
		}
	}