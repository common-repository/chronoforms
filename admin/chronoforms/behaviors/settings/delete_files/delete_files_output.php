<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if($this->controller->Page->check_page_type($page['pageid'], 'end')){
		$inputs = $this->controller->FData->inputs();

		foreach($inputs as $uid => $view){
			if($view['type'] == 'field_file' AND !empty($view['files_to_delete'])){
				foreach($view['files_to_delete'] as $file){
					if(!empty($file)){
						$this->controller->Page->debug[$page['fullname'].'_delete']['files'][] = $file;

						unlink($file);
					}
				}
			}
		}
	}