<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "email_from",
		'title' => rl3("From Data"),
		'icon' => 'user',
		'desc' => rl3("Configure the Email From Name/Email"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'email'
			],
		],
	];