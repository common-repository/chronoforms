<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	ob_start();
	eval('?>'.$unit['body']);
	$unit['body'] = ob_get_clean();