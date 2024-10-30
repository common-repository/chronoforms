<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "meta_tags",
		'title' => rl3("Meta Tags"),
		'icon' => 'tag',
		'desc' => rl3("Override the web page's meta tags"),
		'group' => 'html',
		'category' => rl3("Settings"),
		'triggers' => ["event_finish"],
		'order' => 0,
		'config_order' => 110,
		"accept" => [
			'settings' => true,
		],
		"paid" => 1,
	];