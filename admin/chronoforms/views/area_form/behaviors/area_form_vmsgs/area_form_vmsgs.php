<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "area_form_vmsgs",
		'title' => rl3("Validation Style"),
		'icon' => 'cog',
		'desc' => rl3("Choose the style of the validation messages"),
		'group' => 'area_form',
		'category' => rl3("Style"),
		'triggers' => [],
		'order' => -9,
		"accept" => [
			"views" => [
				"area_form",
			],
		],
	];