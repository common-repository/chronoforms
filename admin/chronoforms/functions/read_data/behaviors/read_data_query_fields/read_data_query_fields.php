<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "read_data_query_fields",
		'title' => rl3("Query Fields"),
		'icon' => 'question',
		'desc' => rl3("Add Query fields and Functions"),
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