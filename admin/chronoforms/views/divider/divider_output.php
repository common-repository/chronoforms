<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($view['nodes']['main']['content'])){
		$view['nodes']['main']['attrs']['class']['content'] = 'horizontal header';
	}

	$_map = [
		'main' => ['tag' => 'div', 'attrs' => ['class' => ['default' => 'ui divider']]],
	];

	echo $this->Field->build($view, $_map);