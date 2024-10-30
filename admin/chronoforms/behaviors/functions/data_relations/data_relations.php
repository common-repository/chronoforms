<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "data_relations",
		'title' => rl3("Relations"),
		'icon' => 'project-diagram',
		'desc' => rl3("Setup model relations"),
		'group' => 'configs',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 1,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'read_data',
			],
		],
	];