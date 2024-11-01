<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_calendar_locale",
		'title' => rl3("Translations"),
		'icon' => 'language',
		'desc' => rl3("Select the language of the calendar"),
		'group' => 'field_calendar',
		'category' => rl3("Calendar Settings"),
		'triggers' => ['before_view'],
		'order' => -7,
		"accept" => [
			"views" => [
				"field_calendar",
			],
		],
	];