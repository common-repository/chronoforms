<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "debug",
		'title' => rl3("Debug"),
		'icon' => 'bug',
		'desc' => rl3("Display Form debug data"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["section_finish"],
		'order' => -1,
		"accept" => [
			'settings' => true,
		],
	];