<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_select_countries",
		'title' => rl3("Countries List"),
		'icon' => 'flag',
		'desc' => rl3("Load a list of world countries"),
		'group' => 'field_select',
		'category' => rl3("Dropdown Settings"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"field_select",
			],
		],
		"paid" => 1,
	];