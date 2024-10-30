<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_custom",
		'title' => rl3("Custom Rule"),
		'icon' => 'code',
		'desc' => rl3("Add a custom validation function"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => [],
		'order' => -1,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];