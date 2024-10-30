<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	foreach($unit['datapath'] as $keysData => $dataname){
		if(is_array($this->data($dataname))){
			$field_data = json_encode($this->get($dataname, $this->data($dataname, '')), JSON_UNESCAPED_UNICODE);
		}else{
			$field_data = $this->get($dataname, $this->data($dataname, ''));
		}
	}
	
	$unit['fns']['save_data']['models']['data']['sources']['u'.$unit['uid']] = [
		'field' => $unit['_lname'],
		'value' => $field_data,
	];