<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$classes = [];
	$classes[] = 'G3-body';
	if(\G3\Globals::get('app')){
		$classes[] = \G3\Globals::get('app');
	}
	$app = \GApp3::instance();
	$classes[] = $app->extension;
	$classes[] = $app->controller;
	$classes[] = $app->action;
?>
<div class="<?php echo implode(' ', $classes); ?>">
	{VIEW}
</div>