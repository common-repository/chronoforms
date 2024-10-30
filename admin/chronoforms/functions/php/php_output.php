<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$returned = eval($function['code']);
	
	$this->debug[$function['name']]['returned'] = $returned;
	
	$this->set($function['name'], $returned);