<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "area_modal_settings",
		'title' => rl3("Modal Settings"),
		'icon' => 'cog',
		'desc' => rl3("Advanced modal settings"),
		'group' => 'area_modal',
		'category' => rl3("Style"),
		'triggers' => [],
		'order' => -9,
		"accept" => [
			"views" => [
				"area_modal",
			],
		],
	];