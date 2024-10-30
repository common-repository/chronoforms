<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['conditions'])){
		$unit['invalid'] = ['conditions' => $unit['conditions']];
	}