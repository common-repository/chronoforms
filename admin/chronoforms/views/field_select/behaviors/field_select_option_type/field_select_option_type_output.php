<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['header_options'])){
		$headers = $this->controller->Parser->options($unit['header_options'], 'data-type');
		$unit['foptions'] = array_replace_recursive($unit['foptions'] ?? [], $headers);

		$unit['nodes']['main']['attrs']['data-rich'] = '1';
	}