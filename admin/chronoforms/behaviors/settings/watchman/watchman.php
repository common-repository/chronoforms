<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "watchman",
		'title' => rl3("WatchMan"),
		'icon' => 'user-secret',
		'desc' => rl3("Control form open dates/hours, number of submissions (per user)"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["startup2"],
		'order' => 0,
		"accept" => [
			'settings' => true,
		],
		"paid" => 1,
	];