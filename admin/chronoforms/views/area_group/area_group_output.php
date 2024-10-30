<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$_map = [
		'main' => ['active' => false, 'children' => ['content' => $this->Parser->section($view['uid'].'/body')]],
	];

	echo $this->Field->build($view, $_map);
?>