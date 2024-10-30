<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "divider_content",
		'title' => rl3("Divider Content"),
		'icon' => 'font',
		'desc' => rl3("Display text in the divider"),
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