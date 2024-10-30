<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "list_table_noheader",
		'title' => rl3("Disable Headers"),
		'icon' => 'ban',
		'desc' => rl3("Disable the table headers"),
		'group' => 'list_table',
		'category' => rl3("Style"),
		'triggers' => ['before_view'],
		'order' => -7,
		"accept" => [
			"views" => [
				"list_table",
			],
		],
	];