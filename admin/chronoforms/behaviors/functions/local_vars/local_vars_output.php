<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['localvars'])){
		foreach($unit['localvars'] as $local){
			$this->set('_localvars_.'.$local['name'], $this->controller->Parser->parse($local['value']));
		}
	}