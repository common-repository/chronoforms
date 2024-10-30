<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "html_code_php",
		'title' => rl3("Run PHP"),
		'icon' => 'code',
		'desc' => rl3("Run PHP code inside the HTML code"),
		'group' => 'html_code',
		'category' => rl3("Advanced"),
		'triggers' => ['before_view'],
		'order' => 0,
		"accept" => [
			"views" => [
				"html_code",
			],
		],
		"paid" => 1,
	];