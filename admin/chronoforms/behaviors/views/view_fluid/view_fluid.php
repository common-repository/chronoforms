<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_fluid",
		'title' => rl3("Fluid"),
		'icon' => 'expand',
		'desc' => rl3("Element takes the full width available"),
		'group' => 'html',
		'category' => rl3("Style"),
		'triggers' => ['before_view'],
		'order' => -9,
		"accept" => [
			"views" => [
				// "area_container",
				"field_button",
				"area_popup",
				"menu",
			],
		],
	];