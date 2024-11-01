<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_file_placeholder",
		'title' => rl3("File Placeholder"),
		'icon' => 'file',
		'desc' => rl3("Adjust the file placeholder"),
		'group' => 'field_file',
		'category' => rl3("Settings"),
		'triggers' => ['before_view_build'],
		'default' => true,
		'order' => -7,
		"accept" => [
			"views" => [
				"field_file",
			],
		],
	];