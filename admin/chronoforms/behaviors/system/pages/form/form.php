<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "form",
		'title' => rl3("Form Settings"),
		'icon' => 'file-code',
		'desc' => rl3("Adjust Form settings"),
		'group' => 'html',
		'category' => rl3("Advanced"),
		'triggers' => ["section_finish"],
		'order' => 10,
		'system' => ['pages'],
		"accept" => [
			'pages' => true,
		],
	];