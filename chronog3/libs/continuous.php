<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\L;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Continuous {
	private $maximum = 0;
	private $size = 0;

	function __construct($count, $size){
		$this->maximum = $count;
		$this->size = $size;
	}

	function keepon(){
		return (is_null(\G3\L\Request::data('start')) OR (int)\G3\L\Request::data('start') < $this->maximum);
	}

	function nextpage(){
		$doc = \G3\L\Document::getInstance();
		$start = $this->size + (int)\G3\L\Request::data('start');
		$url = \G3\L\Url::build(\G3\L\Url::current(), ['start' => $start]);
		$doc->addHeaderTag('<meta http-equiv="refresh" content="1;url='.$url.'" />');
	}
}