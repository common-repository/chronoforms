<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_link",
		'title' => rl3("Link"),
		'icon' => 'link',
		'desc' => rl3("Add Anchor tag to this Unit"),
		'group' => 'html',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view_build'],
		'order' => -1,
		"accept" => [
			"views" => [
				"field_button",
				"text_node",
			],
		],
	];