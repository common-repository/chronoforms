<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$_map = [
		'progress' => ['tag' => 'div', 'active' => true, 'attrs' => ['class' => ['progress']]],
		'bar' => ['tag' => 'div', 'active' => true, 'children' => ['progress'], 'attrs' => ['class' => ['bar']]],
		'label' => ['tag' => 'div', 'active' => !empty($view['nodes']['label']['content']), 'attrs' => ['class' => ['label']]],
		'main' => ['tag' => 'div', 'active' => true, 'children' => ['bar', 'label'], 'attrs' => ['class' => ['ui progress']]]
	];

	echo $this->Field->build($view, $_map);