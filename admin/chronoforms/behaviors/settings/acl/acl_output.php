<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if($this->controller->FData->acl($unit) !== true){
		\GApp3::redirect(r3('index.php?ext=chronoforms&cont=manager&act=e403'));
	}