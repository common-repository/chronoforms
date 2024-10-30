<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "group_events",
		'title' => rl3("Events"),
		'icon' => 'bolt',
		'desc' => rl3("Trigger events based on conditions"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'group'
			],
		],
	];