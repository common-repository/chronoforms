<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_label",
		'title' => rl3("Label"),
		'icon' => 'font',
		'desc' => rl3("Add Label to this Unit"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'triggers' => [],
		'order' => 0,
		"accept" => [
			"views" => [
				'html_code',
				'field_button',
				"progress",
			],
		],
	];