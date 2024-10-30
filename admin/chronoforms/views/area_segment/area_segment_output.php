<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['id'] = $view['name'];
	$_map = [
		'title' => ['tag' => 'div'],
		'main' => ['tag' => 'div', 'children' => ['title', 'content' => $this->Parser->section($view['uid'].'/body')], 'attrs' => ['class' => ['ui segment']]],
	];

	echo $this->Field->build($view, $_map);
?>