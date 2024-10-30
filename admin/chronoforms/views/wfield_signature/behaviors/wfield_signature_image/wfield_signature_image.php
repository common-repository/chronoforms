<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "wfield_signature_image",
		'title' => rl3("Save as Image"),
		'desc' => rl3("Save the signature data as an image"),
		'group' => 'wfield_signature',
		'category' => rl3("Settings"),
		'icon' => 'image',
		'triggers' => ['new_event_start'],
		'order' => 0,
		"accept" => [
			"views" => [
				"wfield_signature",
			],
		],
		"paid" => 1,
	];