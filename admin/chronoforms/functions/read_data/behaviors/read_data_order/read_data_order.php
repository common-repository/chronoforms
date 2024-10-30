<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "read_data_order",
		'title' => rl3("Order Data"),
		'icon' => 'sort',
		'desc' => rl3("Add Order fields to the SQL statement"),
		'group' => 'data',
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