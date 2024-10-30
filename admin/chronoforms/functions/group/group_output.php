<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($function['areas'])){
		foreach($function['areas'] as $sek => $area){
			if(!empty($function['switch_events'])){
				$event_conditions = $function['switch_events'][$sek];
				if($this->controller->FData->conditions([$event_conditions]) === true){
					$this->fevents[$function['name']][$area['name']] = true;
				}
			}
		}
	}else{
		$this->fevents[$function['name']]['actions'] = true;
	}