<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php $this->view($this->get('cf.paths.shared').'clonable'.DS.'clonable.php', [
		'groups' => ['selections_data'],
		'items' => $unit['selections_data'] ?? [],
		'btns' => ['selections_data' => ['main' => ['text' => rl3('Add Selection')]]],
		'inputs' => [
			'selections_data' => [
				'main' => [
					'r1' => [
						[
							'width' => 'twelve wide',
							'params' => [
								'origin' => ['name' => 'Connection['.$utype.']['.$n.'][selections_data][#selections_data#][value]', 'placeholder' => rl3('Option Value')]
							],
						],
						[
							'width' => 'two wide', 
							'type' => 'btns',
							'btns' => [
								'add' => [],
								'delete' => [],
							]
						],
					],
				],
			],
		]
	]);
?>