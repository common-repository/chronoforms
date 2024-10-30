<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['data-icon'] = $view['nodes']['icon']['attrs']['class']['icon'] ?? '';

	$view['nodes']['hidden']['attrs']['name'] = $view['nodes']['main']['attrs']['name'];

	$_map = [
		'hidden' => ['active' => true, 'tag' => 'input', 'attrs' => ['type' => 'hidden']],
		'main' => ['tag' => 'div', 'attrs' => ['class' => ['default' => 'ui rating']]],
		'container' => ['children' => ['label', 'main', 'hidden']],
	];

	echo $this->Field->build($view, $_map, 'hidden');