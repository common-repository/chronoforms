<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "form_tags",
		'title' => rl3("Form Tags"),
		'icon' => 'tag',
		'desc' => rl3("Set form tags"),
		'group' => 'admin',
		'category' => rl3("Settings"),
		'triggers' => [],
		'order' => 0,
		"accept" => [
			'settings' => true,
		],
	];