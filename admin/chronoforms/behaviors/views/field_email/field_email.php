<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_email",
		'title' => rl3("Email"),
		'icon' => 'paper-plane',
		'desc' => rl3("Include in Emails"),
		'group' => 'data',
		'category' => rl3("Email"),
		'default' => true,
		'triggers' => ['event'],
		'order' => -9,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];