<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "google_charts_options",
		'title' => rl3("Custom Options"),
		'icon' => 'cog',
		'desc' => rl3("Add custom chart options"),
		'group' => 'google_charts',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"google_charts",
			],
		],
	];