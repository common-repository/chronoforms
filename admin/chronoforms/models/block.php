<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\A\E\Chronoforms\M;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Block extends \G3\L\Model {
	var $tablename = '#ce__forms7_blocks';
	
	public function validate($data = array(), $new = false, $list = []){
		$return = true;
		if(empty($data['title'])){
			$return = false;
			$this->errors['title'] = rl3('Block title is required.');
		}
		
		return $return;
	}
}