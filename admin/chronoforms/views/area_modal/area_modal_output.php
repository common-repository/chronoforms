<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['id'] = $view['name'];
	$_map = [
		'close' => ['tag' => 'i', 'attrs' => ['class' => ['icon close']]],
		'contents' => ['tag' => 'div', 'active' => true, 'children' => [$this->Parser->section($view['uid'].'/body')], 'attrs' => ['class' => ['content']]],
		'main' => ['tag' => 'div', 'children' => ['close', 'contents'], 'attrs' => ['class' => ['ui modal']]],
	];

	echo $this->Field->build($view, $_map);
