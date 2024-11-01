<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "errors",
		'title' => rl3("Custom Errors"),
		'icon' => 'warning',
		'desc' => rl3("Add Custom Errors"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ["after_function"],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'event_load'
			],
		],
	];