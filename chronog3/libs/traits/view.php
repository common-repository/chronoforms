<?php
namespace G3\L\T;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
trait View{
	public function View(){
		static $views;
		
		$name = get_class($this);
		
		if(empty($views[$name])){
			$views[$name] = new \G3\L\View($this);
		}
		
		return $views[$name];
	}
	
}