<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\L\Wordpress;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Extension extends \G3\L\Extension{
	var $map = [
		'chronoforms7server' => 'chronoforms7server',
		'chronoforms' => 'chronoforms',
		'chronoconnectivity' => 'chronoconnectivity6',
		'chronoforums' => 'chronoforums2',
		'chronodirector' => 'chronodirector',
		'chronomarket' => 'chronomarket',
		'chronosocial' => 'chronosocial',
	];
	
	public function path($area = 'admin'){
		if(empty($this->map[$this->name])){
			return parent::path($area);
		}
		
		$path = '';
		if($area == 'admin'){
			$path .= WP_PLUGIN_DIR.DS.$this->map[$this->name].DS.'admin'.DS;
		}else{
			$path .= WP_PLUGIN_DIR.DS.$this->map[$this->name].DS.'front'.DS;
		}
		
		$path .= $this->name.DS;
		return $path;
	}
	
	public function url($area = 'admin'){
		if(empty($this->map[$this->name])){
			return parent::url($area);
		}
		
		$path = '';
		if($area == 'admin'){
			$path .= plugins_url().$this->map[$this->name].'/admin/'.$this->name.'/';
		}else{
			$path .= plugins_url().$this->map[$this->name].'/front/'.$this->name.'/';
		}
		
		//$path .= $this->map[$this->name].'/'.$this->name.'/';
		return $path;
	}
}