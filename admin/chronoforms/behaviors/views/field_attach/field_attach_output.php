<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$paths = [];
	$upload_page = $unit['fns']['upload']['fields'][$unit['uid']]['page'] ?? $unit['_page'];
	$page = $this->controller->FData->cdata('pages.'.$unit['_page'].'.next_page')[0];
	$page = $this->controller->FData->sessiondata('pages.chain.'.$unit['_page'], $page);
	// $upload_page_id = $this->controller->FData->cdata('pids.'.$upload_page);
	
	foreach($unit['datapath'] as $keysData => $dataname){
		if(is_array($this->data($dataname))){
			$paths[] = $this->get($this->controller->FData->cdata('pages.'.$page.'.fullname').'_upload.'.$dataname.'.[n].path');
		}else{
			$paths[] = $this->get($this->controller->FData->cdata('pages.'.$page.'.fullname').'_upload.'.$dataname.'.path');
		}
	}
	
	$unit['fns']['email']['attachments'][$unit['uid']]['path'] = \G3\L\Arr::flatten($paths);