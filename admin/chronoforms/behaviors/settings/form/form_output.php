<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['form'])){
		$page_form_settings = $this->controller->FData->cdata('pages.'.$page['pageid'].'.form', []);
		$this->controller->FData->cdata('pages.'.$page['pageid'].'.form', array_replace_recursive($unit['form'], $page_form_settings), true);
	}