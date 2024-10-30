<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_button_page",
		'title' => rl3("Submit Page"),
		'icon' => 'arrow-right',
		'desc' => rl3("Choose the next page"),
		'group' => 'field_button',
		'category' => rl3("Button Settings"),
		'triggers' => ['before_view'],
		'order' => -10,
		"accept" => [
			"views" => [
				"field_button",
			],
		],
	];