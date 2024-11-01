<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_mask",
		'title' => rl3("Value Mask"),
		'icon' => 'mask',
		'desc' => rl3("Force a specific value format"),
		'group' => 'configs',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => -1,
		"accept" => [
			"views" => [
				"field_password",
				"field_text",
			],
		],
	];