<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_button_cloner",
		'title' => rl3("Cloner Settings"),
		'icon' => 'ellipsis-v',
		'desc' => rl3("Enable Cloning actions"),
		'group' => 'field_button',
		'category' => rl3("Button Settings"),
		'triggers' => ['before_view_build'],
		'order' => -10,
		"accept" => [
			"views" => [
				"field_button",
			],
		],
	];