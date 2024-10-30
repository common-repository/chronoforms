<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$view['nodes']['main']['attrs']['id'] = $view['name'];
	
	if(!empty($view['target'])){
		if(is_numeric($view['target'])){
			$view['nodes']['main']['attrs']['data-target'] = '[data-uid="'.$view['target'].'"]';
		}else{
			$view['nodes']['main']['attrs']['data-target'] = $view['target'];
		}
	}
	
	$_map = [
		// 'close' => ['tag' => 'i', 'attrs' => ['class' => ['icon close']]],
		// 'contents' => ['tag' => 'div', 'active' => true, 'children' => [$this->Parser->section($view['uid'].'/body')], 'attrs' => ['class' => ['content']]],
		'main' => ['tag' => 'div', 'children' => [$this->Parser->section($view['uid'].'/body')], 'attrs' => ['class' => ['ui popup']]],
	];

	echo $this->Field->build($view, $_map);
