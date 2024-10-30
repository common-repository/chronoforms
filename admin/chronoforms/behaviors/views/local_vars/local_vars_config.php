<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php $this->view($this->get('cf.paths.shared').'clonable'.DS.'clonable.php', [
		'groups' => ['localvars'],
		'items' => $unit['localvars'] ?? [],
		'btns' => ['localvars' => ['main' => ['text' => rl3('Add Local Variable')]]],
		'inputs' => [
			'localvars' => [
				'main' => [
					'r1' => [
						[
							'width' => 'six wide',
							'params' => [
								'placeholder' => rl3('Variable name'), 
								'origin' => ['name' => 'Connection['.$utype.']['.$n.'][localvars][#localvars#][name]']
							],
						],
						[
							'width' => 'six wide',
							'params' => [
								'placeholder' => rl3('Variable value'), 
								'origin' => ['name' => 'Connection['.$utype.']['.$n.'][localvars][#localvars#][value]']
							],
						],
						[
							'width' => 'two wide', 
							'type' => 'btns',
							'btns' => [
								'add' => [],
								'delete' => [],
								'sort' => [],
							]
						],
					],
				],
			],
		]
	]);
?>