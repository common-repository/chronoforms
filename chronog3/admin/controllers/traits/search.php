<?php
/**
* COMPONENT FILE HEADER
**/
namespace G3\A\C\T;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
trait Search {
	
	function Search($Model, $fields, $fieldname = 'search'){
		
		if(!is_null($this->data($fieldname)) AND is_string($this->data($fieldname)) AND strlen($this->data($fieldname)) > 0){
			$Model->where('(');
			foreach($fields as $k => $field){
				$Model->where($field, '%'.$this->data($fieldname).'%', 'LIKE');
				
				if($k < count($fields) - 1){
					$Model->where('OR');
				}
			}
			$Model->where(')');
		}
	}
	
}
?>