<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_events",
		'title' => rl3("Events"),
		'icon' => 'bolt',
		'desc' => rl3("Listen to events and change the element state"),
		'group' => 'html',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view_build'],
		'order' => -5,
		"accept" => [
			"ugroups" => ['inputs', 'actions', 'areas'],
			// "views" => [
			// 	"area_segment",
			// ]
		],
		"not_accept" => [
			"ugroups" => ['hidden'],
			"views" => [
				"area_group",
				'area_form',
			]
		],
		"paid" => 1,
	];