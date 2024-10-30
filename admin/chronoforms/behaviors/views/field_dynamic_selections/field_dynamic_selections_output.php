<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($unit['selections_data'])){
		foreach($unit['selections_data'] as $selection){
			$svalue = $this->controller->Parser->parse($selection['value']);
			if(is_array($svalue)){
				foreach($unit['foptions'] as $ovalue => $option){
					if(in_array($ovalue, $svalue)){
						if($unit['type'] == 'field_select'){
							$unit['foptions'][$ovalue]['selected'] = 'selected';
						}else{
							$unit['foptions'][$ovalue]['checked'] = 'checked';
						}
					}
				}
			}else{
				if(!empty($unit['foptions'][$svalue])){
					if($unit['type'] == 'field_select'){
						$unit['foptions'][$svalue]['selected'] = 'selected';
					}else{
						$unit['foptions'][$svalue]['checked'] = 'checked';
					}
				}
			}
		}
	}