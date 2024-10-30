<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	if(!empty($this->get($unit['name']))){
		$results = $this->get($unit['name']);
		
		if($unit['type'] == 'read_data'){
			if($unit['models']['data']['select'] == 'first'){
				foreach($results as $model => $mdata){
					$this->set($model, $mdata);
				}
			}else if($unit['models']['data']['select'] == 'all'){
				foreach($results as $k => $result){
					foreach($result as $model => $mdata){
						$this->set($model.'.'.$k, $mdata);
					}
				}
			}
		}else if($unit['type'] == 'save_data'){
			foreach($results as $tfield => $value){
				$this->set($unit['models']['data']['vname'].'.'.$tfield, $value);
			}
		}
	}