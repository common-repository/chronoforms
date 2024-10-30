<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$owner_id = !empty($unit['rules']['owner_id']) ? $this->controller->Parser->parse($unit['rules']['owner_id']) : null;
	if(!empty(array_filter($unit['rules']['access'])) AND \GApp3::access($unit['rules'], 'access', $owner_id) !== true){
		$unit['invalid'] = true;
	}