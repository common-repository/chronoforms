<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_email",
		'title' => rl3("Email"),
		'icon' => 'at',
		'desc' => rl3("Valid Email address required"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => ['initialize_event','before_view'],
		'order' => -9,
		"accept" => [
			"views" => [
				"field_text",
				"field_password",
			],
		],
	];