<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_redirect",
		'title' => rl3("Redirect Parameter"),
		'desc' => rl3("Include field in Redirect parameters"),
		'group' => 'data',
		'category' => rl3("Files"),
		'icon' => 'globe',
		'triggers' => ['event'],
		'order' => 0,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];