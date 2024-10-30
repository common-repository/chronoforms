<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "inherit",
		'title' => rl3("Inheritance"),
		'icon' => 'copy',
		'desc' => rl3("Copy settings from another unit"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ['initialize'],
		'order' => -10000,
		'config_order' => 11,
		"accept" => [
			"views" => true,
		],
		"not_accept" => [
			"views" => [
				'unit_reference',
				'area_group',
				'area_form',
			]
		],
	];