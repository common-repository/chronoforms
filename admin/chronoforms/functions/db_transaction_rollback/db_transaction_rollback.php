<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		"name" => "db_transaction_rollback",
		"title" => rl3("Transaction RollBack"),
		"icon" => "undo",
		"desc" => rl3(""),
		"group" => "Database",
		"order" => 0,
		"areas" => ["fail" => "red"],
		"apps" => ["form", "connectivity"],
		"paid" => 1,
	];