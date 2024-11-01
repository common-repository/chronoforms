<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\H;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Header extends \G3\L\Helper{
	
	public function render(){
		$header = '';
		
		$text = $this->params['text'];
		
		if(!empty($this->params['url'])){
			$text = '<a href="'.$this->params['url'].'">'.$text.'</a>';
		}
		
		$header = '<h1 class="ui header medium">'.$text.'</h1>';
		
		return $header;
	}
}