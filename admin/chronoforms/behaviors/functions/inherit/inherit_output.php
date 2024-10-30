<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	require(str_replace('functions', 'views', dirname(__FILE__)).DS.$behavior['name'].'_output.php');