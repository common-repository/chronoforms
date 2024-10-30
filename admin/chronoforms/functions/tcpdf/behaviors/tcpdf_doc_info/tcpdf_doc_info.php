<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	return [
		'name' => "tcpdf_doc_info",
		'title' => rl3("Document Info"),
		'icon' => 'info',
		'desc' => rl3("Set PDF document info"),
		'group' => 'data',
		'category' => rl3("Advanced"),
		'triggers' => [],
		'order' => 0,
		// 'default' => true,
		"accept" => [
			"functions" => [
				'tcpdf'
			],
		],
	];