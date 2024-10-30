<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "2co_redirect_shipping",
		'title' => rl3("Shipping Information"),
		'icon' => 'ship',
		'desc' => rl3("Configure the Order shipping information"),
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