<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "divider_section",
		'title' => rl3("Extra Margin"),
		'icon' => 'minus',
		'desc' => rl3("Increase the margins around the divider"),
		'group' => 'divider',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"divider",
			],
		],
	];