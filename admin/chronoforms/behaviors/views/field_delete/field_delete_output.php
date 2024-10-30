<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$paths = [];
	$page = $this->controller->FData->sessiondata('pages.this');//$unit['_page']
	$page = $this->controller->FData->cdata('pages.'.$unit['_page'].'.next_page')[0];
	$page = $this->controller->FData->sessiondata('pages.chain.'.$unit['_page'], $page);

	foreach($unit['datapath'] as $keysData => $dataname){
		if(is_array($this->data($dataname))){
			$paths[] = $this->get($this->controller->FData->cdata('pages.'.$page.'.fullname').'_upload.'.$dataname.'.[n].path');
		}else{
			$paths[] = $this->get($this->controller->FData->cdata('pages.'.$page.'.fullname').'_upload.'.$dataname.'.path');
		}
	}

	if(!empty($paths)){
		$unit['files_to_delete'] = \G3\L\Arr::flatten($paths);
	}