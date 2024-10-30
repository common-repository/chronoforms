<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "menu_style",
		'title' => rl3("Style"),
		'icon' => 'paint-brush',
		'desc' => rl3("Choose the menu style"),
		'group' => 'menu',
		'category' => rl3("Style"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"menu",
			],
		],
	];