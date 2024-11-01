<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "locales",
		'title' => rl3("Locales"),
		'icon' => 'language',
		'desc' => rl3("Activate Locales Dictionaries"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'triggers' => ["startup"],
		'order' => 0,
		'config_order' => 8,
		"accept" => [
			'settings' => true,
		],
	];