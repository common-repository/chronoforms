<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['id'] = $view['name'];
	$_map = [
		'main' => ['tag' => 'div', 'content' => $this->Parser->section($view['uid'].'/body'), 'attrs' => ['class' => ['ui container']]],
	];

	echo $this->Field->build($view, $_map);
?>