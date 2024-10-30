<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['errors'])){
		foreach(array_reverse($unit['errors']) as $error){
			$this->controller->Page->errors[] = $error['text'];
		}
	}