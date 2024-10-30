<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_circular",
		'title' => rl3("Circular"),
		'icon' => 'circle',
		'desc' => rl3("Enable circular style mode"),
		'group' => 'html',
		'category' => rl3("Style"),
		'triggers' => ['before_view'],
		'order' => -9,
		"accept" => [
			"views" => [
				"area_segment",
				"field_button",
				"icon_node",
			],
		],
	];