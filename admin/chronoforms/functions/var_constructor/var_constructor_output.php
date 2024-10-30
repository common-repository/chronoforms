<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($function['values'])){
		foreach($function['values'] as $value){
			$value['value'] = $this->Parser->parse($value['value']);
			
			if($value['type'] == 'var'){
				$this->controller->Parser->pset($value['name'], $value['value']);
			}else if($value['type'] == 'data'){
				$this->controller->Parser->pdata($value['name'], $value['value']);
			}else if($value['type'] == 'session'){
				\GApp3::session()->set($value['name'], $value['value']);
			}
		}
	}