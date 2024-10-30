<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "google_charts_dimensions",
		'title' => rl3("Chart Dimensions"),
		'icon' => 'font',
		'desc' => rl3("Chart Dimensions"),
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