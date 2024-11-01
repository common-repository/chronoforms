<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "menu_vertical",
		'title' => rl3("Vertical"),
		'icon' => 'ellipsis-v',
		'desc' => rl3("Display as a vertical Menu"),
		'group' => 'menu',
		'category' => rl3("Style"),
		'triggers' => ['before_view'],
		'order' => -7,
		"accept" => [
			"views" => [
				"menu",
			],
		],
	];