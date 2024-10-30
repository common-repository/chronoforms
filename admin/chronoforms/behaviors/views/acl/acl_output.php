<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!$this->controller->FData->acl($unit)){
		// $this->controller->FData->deny($unit);
		$unit['invalid'] = true;
	}