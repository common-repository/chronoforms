<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "external_dbs",
		'title' => rl3("External Databases"),
		'icon' => 'database',
		'desc' => rl3("Define form specific external db connections settings"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'triggers' => [],
		'order' => -10,
		'config_order' => 10,
		"accept" => [
			'settings' => true,
		],
		"paid" => 1,
	];