<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "view_files_list",
		'title' => rl3("Files List"),
		'icon' => 'link',
		'desc' => rl3("Link files"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'triggers' => [],
		'order' => 0,
		"accept" => [
			"views" => [
				"javascript",
				"css",
			],
		],
	];