<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if($this->controller->Page->check_page_type($page['pageid'], 'end')){
		if(!empty($unit['user_email']['body'])){
			$function = [
				'type' => 'email',
				'name' => $unit['utype'].'_user_email',
				'attachments_disabled' => true,
			];

			$function = array_merge($function, $unit['user_email']);
			echo $this->controller->Page->fn($function);
		}
	}