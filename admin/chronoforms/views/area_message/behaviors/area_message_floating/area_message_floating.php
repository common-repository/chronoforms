<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "area_message_floating",
		'title' => rl3("Floating"),
		'icon' => 'cog',
		'desc' => rl3("Floating style message with a shadow"),
		'group' => 'area_message',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"area_message",
			],
		],
	];