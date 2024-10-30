<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$results = [];
	if(!empty($function['items'])){
		foreach($function['items'] as $sk => $sdata){
			$nresult = [];
			if(!empty($sdata['pairs'])){
				foreach($sdata['pairs'] as $pk => $pair){
					$nresult = \G3\L\Arr::setVal($nresult, $pair['key'], $pair[$pair['type']]);
				}
			}
			array_push($results, $nresult);
		}
	}

	$this->set($function['name'], $results);