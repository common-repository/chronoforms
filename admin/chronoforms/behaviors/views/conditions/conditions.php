<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "conditions",
		'title' => rl3("Run Conditions"),
		'icon' => 'question-circle',
		'desc' => rl3("Check Conditions before processing"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['initialize'],
		'order' => -999,
		'config_order' => 10,
		//'global' => true,
		"accept" => [
			"views" => true,
		],
	];