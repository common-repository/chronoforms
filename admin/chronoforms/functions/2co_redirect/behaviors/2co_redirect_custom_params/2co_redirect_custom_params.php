<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "2co_redirect_custom_params",
		'title' => rl3("Custom Parameters"),
		'icon' => 'keyboard',
		'desc' => rl3("Pass custom parameters to the gateway"),
		'group' => '2co_redirect',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'2co_redirect'
			],
		],
	];