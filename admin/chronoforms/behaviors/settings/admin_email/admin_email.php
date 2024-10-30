<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "admin_email",
		'title' => rl3("Admin Email"),
		'icon' => 'paper-plane',
		'desc' => rl3("Send email to the website admin"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["event_finish"],
		'order' => -1,
		"accept" => [
			'settings' => true,
		],
	];