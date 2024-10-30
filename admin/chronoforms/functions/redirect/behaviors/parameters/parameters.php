<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "parameters",
		'title' => rl3("Parameters"),
		'icon' => 'keyboard',
		'desc' => rl3("Add Custom Parameters"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'curl'
			],
		],
	];