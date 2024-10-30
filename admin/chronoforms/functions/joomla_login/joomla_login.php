<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "joomla_login",
		"title" => rl3("Login"),
		"icon" => "sign-in-alt",
		"desc" => rl3(""),
		"group" => "Joomla",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["form", "connectivity"],
		"paid" => 1,
	];