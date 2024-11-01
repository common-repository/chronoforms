<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "validate_fields",
		'title' => rl3("Validate Fields"),
		'icon' => 'shield-alt',
		'desc' => rl3("Validate form fields on the server side"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["new_event_start"],
		'order' => -7,
		// 'default' => true,
		"accept" => [
			'settings' => true,
		],
	];