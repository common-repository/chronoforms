<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_save_data",
		'title' => rl3("Save Data"),
		'desc' => rl3("Add value to the Data Source of Save Data Actions"),
		'icon' => 'database',
		'category' => rl3("Database"),
		'group' => 'data',
		'triggers' => ['event'],
		'order' => -8,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];