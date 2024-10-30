<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	foreach($unit['meta'] as $key => $value){
		if(strlen($value)){
			if($key == 'title'){
				\GApp3::document()->title($value);
			}else{
				\GApp3::document()->meta($key, $value);
			}
		}
	}