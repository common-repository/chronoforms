<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(empty($this->get('cf_settings.debug.user_groups', [])) OR !empty(array_intersect(\GApp3::user()->get('groups'), $this->get('cf_settings.debug.user_groups', [])))){
		$output .= $this->controller->Parser->parse('{debug:}');
	}