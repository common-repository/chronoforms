<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$_map = [
		'main' => ['active' => empty($view['pure_code']), 'tag' => 'div', 'children' => ['label', '__CONTENT__']],
	];

	// $_map = [
	// 	'container' => ['active' => true, 'tag' => 'div'],
	// ];

	$view['nodes']['main']['content'] = $view['nodes']['main']['d_content'] ?? $view['nodes']['main']['content'];
	
	echo $this->Field->build($view, $_map);