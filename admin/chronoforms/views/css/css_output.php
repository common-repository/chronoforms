<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($view['files'])){
		if(!empty($view['files'])){
			foreach($view['files'] as $file){
				\GApp3::document()->addCssFile($file['url']);
			}
		}
	}

	$css = $this->Parser->parse($view['content']);
	\GApp3::document()->addCssCode($css);