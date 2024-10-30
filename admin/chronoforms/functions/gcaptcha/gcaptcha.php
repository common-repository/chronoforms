<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "gcaptcha",
		"title" => rl3("Google reCaptcha"),
		"icon" => "google red",
		"desc" => rl3(""),
		"group" => "Security",
		"order" => 0,
		"areas" => ["success" => "green","fail" => "red",],
		"apps" => ["xforms"],
	];