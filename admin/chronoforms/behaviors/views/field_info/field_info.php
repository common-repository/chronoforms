<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_info",
		'title' => rl3("Help Text"),
		'icon' => 'info',
		'desc' => rl3("Add Help and/or Tooltip text"),
		'group' => 'html',
		'category' => rl3("Settings"),
		'triggers' => ['before_view'],
		'order' => -9,
		"accept" => [
			"ugroups" => ['inputs', 'actions'],
		],
		"not_accept" => [
			"ugroups" => ['hidden'],
		],
	];