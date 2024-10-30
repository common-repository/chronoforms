<?php
/**
* COMPONENT FILE HEADER
**/
namespace G3\A\C;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Languages extends \G3\A\App {
	use \G3\A\C\T\Language;
	
	function index(){
		$return = $this->Language($this->extension);
		if(!empty($return)){
			return $return;
		}
	}
	
	function build(){
		$this->buildLanguage($this->extension, true);
	}
}
?>