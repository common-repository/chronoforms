<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_icon",
		'title' => rl3("Icon"),
		'icon' => 'info',
		'desc' => rl3("Set the element icon"),
		'group' => 'html',
		'category' => rl3("Style"),
		'triggers' => ['before_view'],
		'order' => -7,
		"accept" => [
			"views" => [
				"area_message",
				"field_button",
				"field_text",
				"field_password",
				"field_textarea",
				"wfield_rating",
				"header",
			],
		],
		"paid" => 1,
	];