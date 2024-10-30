<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$result = $this->controller->Models->read($function['models']['data']);
	
	if(!empty($result)){
		$this->set($function['name'], $result);
		$this->fevents[$function['name']]['found'] = true;
		$this->debug[$function['name']]['result'] = rl3('Data read successfully!');
	}else{
		$this->set($function['name'], false);
		$this->fevents[$function['name']]['not_found'] = true;
		$this->debug[$function['name']]['result'] = rl3('Data not found!');
	}

	$this->debug[$function['name']]['log'] = $this->controller->Models->log;