<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "php_events",
		'title' => rl3("Events"),
		'icon' => 'bolt',
		'desc' => rl3("Trigger events based on returned value"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['after_function'],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'php'
			],
		],
	];