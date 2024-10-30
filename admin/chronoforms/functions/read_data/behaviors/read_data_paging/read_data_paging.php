<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "read_data_paging",
		'title' => rl3("Paging"),
		'icon' => 'file alternate',
		'desc' => rl3("Apply paging limits to the returned records"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['before_function'],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'read_data'
			],
		],
	];