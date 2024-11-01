<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "check_security_fields",
		'title' => rl3("Check Security Fields"),
		'icon' => 'fingerprint',
		'desc' => rl3("Auto check security fields"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["new_event_start"],
		'order' => -9,
		// 'default' => true,
		"accept" => [
			'settings' => true,
		],
	];