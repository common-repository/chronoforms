<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_checkbox_selector",
		'title' => rl3("Selector Settings"),
		'icon' => 'check square',
		'desc' => rl3("Configure the Selector role"),
		'group' => 'field_checkbox',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"field_checkbox",
			],
		],
	];