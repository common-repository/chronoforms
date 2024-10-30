<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "field_listing_filter",
		'title' => rl3("Filter Listing"),
		'icon' => 'filter',
		'desc' => rl3("Use as a Listing Filter Field"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['event'],
		'order' => 0,
		"accept" => [
			"views" => [
				'field_text',
				'field_select',
			],
		],
	];