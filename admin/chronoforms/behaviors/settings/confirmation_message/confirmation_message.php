<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "confirmation_message",
		'title' => rl3("Confirmation Message"),
		'icon' => 'comment',
		'desc' => rl3("Display a Confirmation message at the end of the form"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["event_finish"],
		'order' => -1,
		"accept" => [
			'settings' => true,
		],
	];