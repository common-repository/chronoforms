<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "acl",
		'title' => rl3("ACL"),
		'icon' => 'shield-alt',
		'desc' => rl3("Apply ACL rules to this unit"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => ['initialize'],
		'order' => -1000,
		'config_order' => 10,
		//'global' => true,
		"accept" => [
			"functions" => true,
		],
		"paid" => 1,
	];