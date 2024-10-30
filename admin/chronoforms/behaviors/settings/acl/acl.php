<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "acl",
		'title' => rl3("ACL"),
		'icon' => 'shield-alt',
		'desc' => rl3("Apply ACL rules to the whole form"),
		'group' => 'data',
		'category' => rl3("Settings"),
		'triggers' => ["startup"],
		'order' => 0,
		'config_order' => 10,
		"accept" => [
			'settings' => true,
		],
		"paid" => 1,
	];