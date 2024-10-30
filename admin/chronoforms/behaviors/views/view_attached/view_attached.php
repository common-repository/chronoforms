<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_attached",
		'title' => rl3("Attached"),
		'icon' => 'paperclip',
		'desc' => rl3("Control the element border and margin"),
		'group' => 'html',
		'category' => rl3("Basic"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"area_message",
				"menu",
				"progress",
				//"area_partitions",
			],
		],
	];