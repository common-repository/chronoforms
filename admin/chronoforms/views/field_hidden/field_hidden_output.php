<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$_map = [
		//'main' => ['children' => ['icon']],
		'container' => ['children' => ['main'], 'active' => false],
	];
	echo $this->Field->build($view, $_map);