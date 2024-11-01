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
class Component {
	use \G3\L\T\GetSet;
	use \G3\L\T\LoadFile;
	
	var $_vars = [];
	var $data = [];
	var $extension = [];
	var $controller;
	
	var $_models = [];
	
	function __construct(&$controller, $params = []){
		$this->_vars = &$controller->_vars;
		$this->data = &$controller->data;
		$this->extension = $controller->extension;
		
		$this->controller = &$controller;
		
		foreach($params as $k => $v){
			$this->$k = $v;
		}
		
		if(!empty($this->_models)){
			foreach($this->_models as $k => $model){
				if(is_numeric($k)){
					$alias = Base::getClassName($model);
					$this->$alias = new $model();
				}
			}			
		}
		
		return $this;
	}
	
	public static function getInstance(&$controller, $params = []){
		static $instances;
		if(!isset($instances)){
			$instances = array();
		}
		
		if(isset($controller->name)){
			$name = $controller->name;
		}else{
			$name = get_class($controller);
		}
		
		$key = md5(json_encode($params));
		
		if(empty($instances[$name])){
			return $instances[$name][$key] = new static($controller, $params);
		}else{
			return $instances[$name][$key];
		}
	}
	
}