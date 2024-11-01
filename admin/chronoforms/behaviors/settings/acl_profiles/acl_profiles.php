<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "acl_profiles",
		'title' => rl3("ACL Profiles"),
		'icon' => 'user-shield',
		'desc' => rl3("Define form specific ACL profiles"),
		'group' => 'configs',
		'category' => rl3("Settings"),
		'triggers' => ["startup"],
		'order' => -10,
		'config_order' => 10,
		"accept" => [
			'settings' => true,
		],
		"paid" => 1,
	];