<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_message",
		'title' => rl3("Custom Error Message"),
		'icon' => 'font',
		'desc' => rl3("Add a custom validation message"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => [],
		'order' => -10,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];