<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "shopping_cart",
		"title" => rl3("Shopping Cart"),
		"icon" => "shopping-cart",
		"desc" => rl3(""),
		"group" => "Advanced",
		"ugroups" => ['dsources'],
		"order" => 0,
		// "areas" => ["found" => "green", "not_found" => "red"],
		"apps" => ["form", "connectivity"],
	];