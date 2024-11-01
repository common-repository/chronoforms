<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_select_search",
		'title' => rl3("Search Settings"),
		'icon' => 'search',
		'desc' => rl3("Enable Options Search settings"),
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