<?php
namespace G3\L;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Cache{
	protected static $instances;
	
	public static function getInstance($domain = 'gcore', $params = array(), $engine = 'file'){
		$domain = !empty($domain) ? $domain : 'gcore';
		$engine = (func_num_args() > 2) ? $engine : Config::get('cache_engine');
		if(empty(self::$instances[$engine][$domain])){
			$class = '\G3\L\CacheEngines\\'.Str::camilize($engine);
			self::$instances[$engine][$domain] = new $class($domain, $params);
		}
		return self::$instances[$engine][$domain];
	}

	public function get($key){
		
	}

	public function set($key, $data){
		
	}

	public function clear($key){
		
	}
	
	public function destroy(){
		
	}
}
?>