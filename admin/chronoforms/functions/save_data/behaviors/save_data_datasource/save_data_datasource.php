<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "save_data_datasource",
		'title' => rl3("Data Source"),
		'icon' => 'book',
		'desc' => rl3("Modify the data to be saved"),
		'group' => 'save_data',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 1,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'save_data',
			],
		],
	];