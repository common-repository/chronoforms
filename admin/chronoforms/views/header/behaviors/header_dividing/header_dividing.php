<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "header_dividing",
		'title' => rl3("Dividing"),
		'icon' => 'minus',
		'desc' => rl3("A horizontal line will be added below the header"),
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