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
class Config {
	
	function __construct(){
		
	}
	
	public static function getInstance(){
		static $instances;
		if(!isset($instances)){
			$instances = array();
		}
		if(empty($instances)){
			$instances = new self();
			return $instances;
		}else{
			return $instances;
		}
	}

	public static function get($key, $default = null){
		$value = Arr::getVal(\G3\Configuration::$config, $key, $default);
		
		return $value;
	}
	
	public static function set($key, $value){
		\G3\Configuration::$config = Arr::setVal(\G3\Configuration::$config, $key, $value);
	}
	
	public static function save(){
		//save config to file
	}
}