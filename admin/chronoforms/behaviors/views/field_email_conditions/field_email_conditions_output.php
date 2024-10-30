<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['email_conditions'])){
		if(!$this->controller->FData->conditions($unit['email_conditions'])){
			if(isset($unit['fns']['email']['units'][$unit['uid']])){
				unset($unit['fns']['email']['units'][$unit['uid']]);
			}
		}
	}