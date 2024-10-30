<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "wfield_rating_start_max",
		'title' => rl3("Start & Max Values"),
		'icon' => 'star',
		'desc' => rl3("Configure the default and max ratings"),
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