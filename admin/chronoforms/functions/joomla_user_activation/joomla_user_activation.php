<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "joomla_user_activation",
		"title" => rl3("User activation"),
		"icon" => "checkmark",
		"desc" => rl3(""),
		"group" => "Joomla",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["xforms"],
	];