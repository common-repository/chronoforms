<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_dbtable",
		'title' => rl3("Table Log"),
		'desc' => rl3("Save to Log Table"),
		'icon' => 'database',
		'category' => rl3("Database"),
		'group' => 'data',
		// 'default' => true,
		'triggers' => ['event'],
		'order' => -8,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];