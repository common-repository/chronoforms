<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_select_additions",
		'title' => rl3("Allow Additions"),
		'icon' => 'edit',
		'desc' => rl3("User can add new options to the dropdown"),
		'group' => 'field_select',
		'category' => rl3("Dropdown Settings"),
		'triggers' => ['before_view'],
		'order' => -9,
		"accept" => [
			"views" => [
				"field_select",
			],
		],
		"paid" => 1,
	];