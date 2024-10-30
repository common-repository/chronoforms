<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($view['files'])){
		if(!empty($view['files'])){
			foreach($view['files'] as $file){
				\GApp3::document()->addJsFile($this->Parser->parse($file['url']));
			}
		}
	}
	
	$js = $this->Parser->parse($view['content']);
	
	if(!empty($view['domready'])){
		$js = implode("\n", ['jQuery(document).ready(function($){', $js, '});']);
	}
	
	\GApp3::document()->addJsCode($js);