<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	ob_start();
	eval('?>'.$unit['nodes']['main']['content']);
	$unit['nodes']['main']['d_content'] = ob_get_clean();