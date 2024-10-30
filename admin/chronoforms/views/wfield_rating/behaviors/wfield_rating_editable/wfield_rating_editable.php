<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "wfield_rating_editable",
		'title' => rl3("Editable Rating"),
		'icon' => 'edit',
		'desc' => rl3("Enable rating change"),
		'group' => 'wfield_rating',
		'category' => rl3("Rating Settings"),
		'triggers' => [],
		'order' => -7,
		"accept" => [
			"views" => [
				"wfield_rating",
			],
		],
	];