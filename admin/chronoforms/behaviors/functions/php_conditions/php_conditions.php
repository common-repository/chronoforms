<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "php_conditions",
		'title' => rl3("PHP Conditions"),
		'icon' => 'filter',
		'desc' => rl3("Add Where conditions to the SQL statement using PHP"),
		'group' => 'configs',
		'category' => rl3("Advanced"),
		'triggers' => ['before_function'],
		'order' => 1,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'read_data',
				'delete_data',
				'save_data',
			],
		],
		"paid" => 1,
	];