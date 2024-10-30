<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_upload_errors",
		'title' => rl3("Custom Error Messages"),
		'icon' => 'exclamation',
		'desc' => rl3("Customize the error messages"),
		'group' => 'field_file',
		'category' => rl3("Files"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"ugroups" => ['files'],
		],
	];