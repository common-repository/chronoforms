<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_ajax",
		'title' => rl3("Call AJAX"),
		'icon' => 'spinner',
		'desc' => rl3("Call a URL and load content"),
		'group' => 'html',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view_build'],
		'order' => 0,
		"accept" => [
			"views" => true,
		],
		"not_accept" => [
			"ugroups" => ['hidden'],
			"views" => [
				'unit_reference',
				'area_group',
				'area_form',
			]
		],
	];