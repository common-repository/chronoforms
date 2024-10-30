<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "upload_errors",
		'title' => rl3("Errors"),
		'icon' => 'exclamation',
		'desc' => rl3("Override the upload errors messages"),
		'group' => 'upload',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'upload'
			],
		],
	];