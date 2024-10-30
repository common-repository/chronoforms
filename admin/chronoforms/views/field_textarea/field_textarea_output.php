<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($view['nodes']['main']['attrs']['data-editor'])){
		\GApp3::document()->_('tinymce');
	}

	$view['nodes']['main']['tag'] = 'textarea';

	echo $this->Field->build($view);