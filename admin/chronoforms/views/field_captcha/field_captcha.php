<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "field_captcha",
		"title" => rl3("Captcha image"),
		"icon" => "font",
		"desc" => rl3(""),
		"group" => "Security",
		"order" => 0,
		"areas" => [],
		"apps" => ["xforms"],
	];