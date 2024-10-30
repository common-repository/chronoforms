<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_calendar_opendates",
		'title' => rl3("Open Dates"),
		'icon' => 'check',
		'desc' => rl3("Disable/Enable Specific Dates"),
		'group' => 'field_calendar',
		'category' => rl3("Calendar Settings"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"field_calendar",
			],
		],
	];