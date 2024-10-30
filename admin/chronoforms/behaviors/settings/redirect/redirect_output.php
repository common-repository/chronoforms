<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if($this->controller->Page->check_page_type($page['pageid'], 'end')){
		if(!empty($unit['redirect']['pageurl'])){
			$function = [
				'type' => 'redirect',
				'name' => $unit['utype'].'_redirect',
				'form_end_behavior' => true,
			];

			$function = array_merge($function, $unit['redirect']);
			$this->controller->Page->fn($function);
		}
	}