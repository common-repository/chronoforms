<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "area_repeater_cloner",
		'title' => rl3("Cloner"),
		'icon' => 'ellipsis-v',
		'desc' => rl3("Enable Cloning"),
		'group' => 'area_repeater',
		'category' => rl3("Settings"),
		'triggers' => ['before_view'],
		'order' => -10,
		"accept" => [
			"views" => [
				"area_repeater",
			],
		],
	];