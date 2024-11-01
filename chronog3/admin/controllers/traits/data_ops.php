<?php
/**
* COMPONENT FILE HEADER
**/
namespace G3\A\C\T;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
trait DataOps {
	
	function DataOps(){
		return DataOpsObject::getInstance($this);
	}
	
}

class DataOpsObject extends \G3\L\Component{
	
	function chunk($vinput){
		if(!empty($this->data[$vinput])){
			$tot = [];
			foreach($this->data[$vinput] as $ch){
				parse_str($ch, $d);
				$tot = array_replace_recursive($tot, $d);
			}
			unset($this->data[$vinput]);
			$this->data = array_merge($this->data, $tot);
		}
	}
	
}
?>