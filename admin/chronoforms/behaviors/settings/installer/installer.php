<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "installer",
		'title' => rl3("Installer"),
		'icon' => 'plug',
		'desc' => rl3("Form Installer actions"),
		'group' => 'admin',
		'category' => rl3("Settings"),
		'triggers' => ["install"],
		'order' => 10,
		"accept" => [
			'settings' => true,
		],
	];