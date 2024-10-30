<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "php_html_support",
		'title' => rl3("HTML support"),
		'icon' => 'code',
		'desc' => rl3("Support HTML code with PHP"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['before_function'],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'php'
			],
		],
	];