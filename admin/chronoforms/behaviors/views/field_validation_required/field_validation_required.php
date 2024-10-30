<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_validation_required",
		'title' => rl3("Required"),
		'icon' => 'asterisk',
		'desc' => rl3("This field is Required and can NOT be empty"),
		'group' => 'validation',
		'category' => rl3("Validation"),
		'triggers' => ['initialize_event','before_view'],
		'order' => -19,
		"accept" => [
			"ugroups" => ['inputs'],
		],
	];