<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['php_where'])){
		$where = eval($unit['php_where']);
		$unit['models']['data']['where'] = $where;
	}