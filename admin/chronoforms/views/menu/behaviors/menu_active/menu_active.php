<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "menu_active",
		'title' => rl3("Active Item"),
		'icon' => 'check',
		'desc' => rl3("Set the active item"),
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