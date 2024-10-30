<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if($this->controller->Page->check_page_type($page['pageid'], 'end')){
		if(!empty($unit['confirmation_message']['content'])){
			$function = [
				'type' => 'message',
				'name' => $unit['utype'].'_message',
				'message_type' => 'success',
				'content' => $unit['confirmation_message']['content'],
			];
			$this->controller->Page->fn($function);
		}
	}