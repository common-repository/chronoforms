<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_dynamic_selections",
		'title' => rl3("Dynamic Selections"),
		'icon' => 'check-double',
		'desc' => rl3("Specify a list of selected values"),
		'group' => 'configs',
		'category' => rl3("Database"),
		'triggers' => ['before_view'],
		'order' => 10,
		"accept" => [
			"views" => [
				"field_checkboxes",
				"field_radios",
				"field_select",
			],
		],
		"paid" => 1,
	];