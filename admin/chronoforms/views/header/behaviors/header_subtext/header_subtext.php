<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "header_subtext",
		'title' => rl3("Sub Text"),
		'icon' => 'font',
		'desc' => rl3("Sub header text"),
		'group' => 'header',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"header",
			],
		],
	];