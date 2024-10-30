<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "redirect",
		'title' => rl3("Redirect"),
		'icon' => 'directions',
		'desc' => rl3("Redirect the user after the form is completed"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["event_finish"],
		'order' => 100,
		'config_order' => 5,
		"accept" => [
			'settings' => true,
		],
	];