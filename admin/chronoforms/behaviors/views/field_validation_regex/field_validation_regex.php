<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_regex",
		'title' => rl3("RegEx"),
		'icon' => 'question',
		'desc' => rl3("Match value to a Regular Expression"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => [],
		'order' => -5,
		"accept" => [
			"views" => [
				"field_text",
				"field_password",
				"field_textarea",
			],
		],
	];