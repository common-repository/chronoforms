<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_email_conditions",
		'title' => rl3("Email Conditions"),
		'icon' => 'question-circle',
		'desc' => rl3("Check Conditions before including in email"),
		'group' => 'data',
		'category' => rl3("Email"),
		'triggers' => ['event'],
		'order' => 0,
		//'global' => true,
		"accept" => [
			"ugroups" => ['inputs'],
		],
		"paid" => 1,
	];