<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "data_conditions",
		'title' => rl3("Where Conditions"),
		'icon' => 'filter',
		'desc' => rl3("Add Where conditions to the SQL statement"),
		'group' => 'configs',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 1,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'read_data',
				'delete_data',
				'save_data',
			],
		],
	];