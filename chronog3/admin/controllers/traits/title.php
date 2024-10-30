<?php
/**
* COMPONENT FILE HEADER
**/
namespace G3\A\C\T;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
trait Title {
	
	function setTitle($text, $url = ''){
		\GApp3::document()->title(\GApp3::document()->title().' - '.$text);
		
		$this->_helpers['Header'] = ['name' => '\G3\H\Header'];
		$this->_helpers['Header']['params']['text'] = $text;
		$this->_helpers['Header']['params']['url'] = $url;
	}
	
}
?>