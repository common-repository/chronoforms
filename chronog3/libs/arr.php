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
class Arr {
	//is assoc array
	public static function is_assoc($arr){
		// return (bool)count(array_filter(array_keys($arr), 'is_string'));
		if (array() === $arr) return false;
		return array_keys($arr) !== range(0, count($arr) - 1);
	}
	public static function is_numeric($arr){
		return (bool)count(array_filter(array_keys($arr), 'is_numeric'));
	}
	//normalizes a multi dimensional array into 1 dimension
	public static function normalize($array = array()){
		$return = array();
		foreach($array as $k => $v){
			if(is_array($v)){
				$return = array_merge(self::normalize($v), $return);
			}else{
				$return[] = $v;
			}
		}
		$return = array_reverse($return);
		
		return $return;
	}
	//replace
	public static function replace_recursive($array, $array1, $type = 'replace'){
		$recurse = function($array, $array1) use(&$recurse, $type){
			foreach ($array1 as $key => $value){
				// create new key in $array, if it is empty or not an array
				if (!isset($array[$key]) || (isset($array[$key]) && !is_array($array[$key]))){
					$array[$key] = array();
				}
				// overwrite the value in the base array
				if(is_array($value)){
					if(Arr::is_assoc($value)){
						if(Arr::is_numeric($value)){
							// $value = $recurse($array[$key], $value);
						}else{
							$value = $recurse($array[$key], $value);
						}
					}else{
						if($type == 'merge'){
							$value = array_merge($value, $array[$key]);
						}else if($type == 'merge_unique'){
							$value = array_unique(array_merge($value, $array[$key]));
						}
					}
				}
				$array[$key] = $value;
			}
			return $array;
		};

		// handle the arguments, merge one by one
		if (!is_array($array)){
			return $array;
		}

		$array = $recurse($array, $array1);
		
		return $array;
	}

	public static function filter_recursive($input){ 
		foreach($input as &$value){ 
			if(is_array($value)){ 
				$value = self::filter_recursive($value); 
			} 
		}
		return array_filter($input); 
	} 
	//extract the value at the supplied path from the supplied data array
	public static function getVal($array, $indexes = array(), $default = NULL){
		if(is_string($indexes)){
			$indexes = explode('.', $indexes);
		}
		$indexes = array_filter($indexes, function($value) { return $value !== ''; });
		
		if(empty($indexes)){
			return $array;
		}
		
		if(count($indexes) == 1){
			if(is_array($array) AND isset($array[$indexes[0]])){
				return $array[$indexes[0]];
			}else{
				//return $default;
			}
		}
		$index = array_shift($indexes);
		if($index == '[n]' AND is_array($array)){
			//indexed numeric loop
			$data_array = array();
			foreach($array as $k => $v){
				$data_array[$k] = self::getVal($array[$k], $indexes, $default);
			}
			return $data_array;
		}else{
			if(isset($array[$index])){
				return self::getVal($array[$index], $indexes, $default);
			}else{
				return $default;
			}
		}
	}
	//set some array value at the given path and return the modified array back
	public static function setVal($array, $indexes, $value){
		if(is_string($indexes)){
			$indexes = explode('.', $indexes);
		}
		$indexes = array_filter($indexes, function($value) { return $value !== ''; });
		
		foreach($indexes as $k => $index){
			$indexes[$k] = str_replace('(', '', $index);
		}
		/*
		$current = &$array;
		foreach($indexes as $index){
			if(array_key_exists($index, $array) === false){
				$current[$index] = [];
			}
			$current = &$current[$index];
		}
		$current = $value;
		return $array;
		*/
		if(is_array($array)){
			$path = [];
			foreach($indexes as $index){
				$path[] = $index;
				
				eval('
				if(!isset($array["'.implode('"]["', $path).'"]) OR !is_array($array["'.implode('"]["', $path).'"])){
					$array["'.implode('"]["', $path).'"] = [];
				}
				');
			}
			
			if(is_null($value)){
				//eval('if(isset($array["'.implode('"]["', $indexes).'"]) AND $array["'.implode('"]["', $indexes).'"] != []){
				eval('if(isset($array["'.implode('"]["', $indexes).'"])){
					unset($array["'.implode('"]["', $indexes).'"]);
				}else{
					$array["'.implode('"]["', $indexes).'"] = $value;
				}');
			}else{
				eval('$array["'.implode('"]["', $indexes).'"] = $value;');
			}
		}
		return $array;
	}
	//flatten multi dimensional array
	public static function flatten($array, $preserve_keys = 0, &$out = array()){
		foreach($array as $key => $child){
			if(is_array($child)){
				if($preserve_keys == 2){
					$out[$key] = $child;
				}
				$out = self::flatten($child, $preserve_keys, $out);
			}elseif($preserve_keys + is_string($key) > 1){
				$out[$key] = $child;
			}else{
				$out[] = $child;
			}
		}
		return $out;
	}
	//search array for the given value
	public static function searchVal($array, $indexes, $values = array()){
		$values = (array)$values;
		if(count($indexes) == 1){
			if(is_array($array) AND isset($array[$indexes[0]]) AND in_array($array[$indexes[0]], $values)){
				return $array;
			}else{
				return array();
			}
		}
		$index = array_shift($indexes);
		if($index == "[n]" AND is_array($array)){
			//indexed numeric loop
			$data_array = array();
			foreach($array as $k => $v){
				$data_array[$k] = self::searchVal($array[$k], $indexes, $values);
			}
			return array_filter($data_array);
		}else{
			if(isset($array[$index])){
				return self::searchVal($array[$index], $indexes, $values);
			}else{
				return array();
			}
		}
	}
	
	public static function multisort($array, $path = '', $flag = SORT_ASC){
		$temp = array();
		foreach($array as $k => $item){
			$temp[$k] = self::getVal($item, explode('.', $path), null);
		}
		array_multisort($temp, $flag, $array);
		return $array;
	}
	//arranges a multi dimensional form fields list field[item][] to field[0][name]
	public static function rearrange($array){
		$keys = array_keys($array);
		$new = [];
		foreach($array[$keys[0]] as $k => $v){
			foreach($keys as $key){
				$new[$k][$key] = $array[$key][$k];
			}
		}
		return $new;
	}
}