<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_choices",
		'title' => rl3("Choices"),
		'icon' => 'tasks',
		'desc' => rl3("Control selections count"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"field_checkboxes",
			],
		],
	];