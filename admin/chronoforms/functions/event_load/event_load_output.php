<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($function['form_page'])){
		$this->event($this->controller->FData->cdata('pages.'.$function['form_page'].'.pageid'));
	}
	
	if(!empty($function['stop'])){
		$this->stopped = true;
	}