<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_security_error",
		'title' => rl3("Custom Error Message"),
		'desc' => rl3("Override the global error message"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'icon' => 'ban',
		'triggers' => [],
		'order' => 0,
		"accept" => [
			"views" => [
				"field_secicon",
				"gcaptcha",
			],
		],
	];