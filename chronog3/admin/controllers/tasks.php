<?php
/**
* COMPONENT FILE HEADER
**/
namespace G3\A\C;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class Tasks extends \G3\A\App {
	
	function clear_cache(){
		$path = \G3\Globals::get('FRONT_PATH').'cache'.DS;
		$files = \G3\L\Folder::getFiles($path);
		
		$path = \G3\Globals::get('CACHE_PATH');
		$files = array_merge($files, \G3\L\Folder::getFiles($path));
		
		$count = 0;
		foreach($files as $k => $file){
			if(basename($file) != 'index.html'){
				$result = \G3\L\File::delete($file);
				if($result){
					$count++;
				}
			}
		}
		if(function_exists('apc_delete')){
			apc_clear_cache('user');
		}
		$session = \GApp3::session();
		$session->flash('info', $count.' '.rl3('Cache files deleted successfully.'));
		$this->redirect(r3('index.php?ext='.$this->extension));
	}

	function settings(){
		$Group = new \G3\A\M\Group();
		$Extension = new \G3\A\M\Extension();
		
		$this->data = $Extension->where('name', $this->extension)->select('first', ['json' => ['settings']]);
		
		//permissions groups
		$groups = $Group->fields(['id', 'title'])->select('list');
		$this->set('groups', $groups);
	}
	
	function save_settings($data = false){
		$Extension = new \G3\A\M\Extension();
		
		$ext = $Extension->where('name', $this->extension)->select('first', ['json' => ['settings']]);
		if(empty($ext['Extension'])){
			$ext['Extension'] = [];
		}
		if($data === false){
			$data = $this->data['Extension'];
		}
		$data['id'] = $ext['Extension']['id'] ?? null;
		$data['name'] = $this->extension;
		$data['enabled'] = 1;
		$data['settings'] = array_replace($ext['Extension']['settings'] ?? [], $data['settings']);
		
		$result = $Extension->save($data, ['json' => ['settings']]);
		
		if($result !== false){
			\GApp3::session()->flash('success', rl3('Settings saved successfully.'));
		}else{
			\GApp3::session()->flash('error', rl3('Error updating settings.'));
		}
		
		$this->redirect(r3('index.php?ext='.$this->extension.'&cont=tasks&act=settings'));
	}

	function _vupdate($v, $update_fld = 'validated'){
		$Extension = new \G3\A\M\Extension();
		
		$ext = $Extension->where('name', $this->extension)->select('first', ['json' => ['settings']]);
		if(empty($ext)){
			$ext = [];
			$ext['Extension']['name'] = $this->extension;
			$ext['Extension']['enabled'] = 1;
		}
		
		if(!empty($ext['Extension']['settings'][$update_fld])){
			if(is_numeric($ext['Extension']['settings'][$update_fld])){
				if(strlen($ext['Extension']['settings'][$update_fld]) > 1){
					if(strlen($v) <= 1){
						//\GApp3::session()->flash('error', 'Validation error, using different subscription types is not allowed.');
						//$this->redirect(r3('index.php?ext='.$this->extension));
						$ext['Extension']['settings']['vdomain'] = [];
					}
				}else{
					if(strlen($v) > 1){
						//\GApp3::session()->flash('error', 'Validation error, using different subscription types is not allowed.');
						//$this->redirect(r3('index.php?ext='.$this->extension));
						$ext['Extension']['settings']['vdomain'] = [];
					}
				}
			}
		}
		
		$ext['Extension']['settings'][$update_fld] = $v;
		
		if(empty($ext['Extension']['settings']['vdomain'])){
			$ext['Extension']['settings']['vdomain'] = [];
		}
		
		$domain = $this->get('domain', \G3\L\Url::domain(false));
		
		$ext['Extension']['settings']['vdomain'] = array_merge((array)$ext['Extension']['settings']['vdomain'], [$domain]);
		$ext['Extension']['settings']['vdomain'] = array_unique($ext['Extension']['settings']['vdomain']);
		$result = $Extension->save($ext['Extension'], ['json' => ['settings']]);
		return $result;
	}
	
	function validate(){
		//$domain = \G3\L\Url::domain(false);//str_replace(array('http://', 'https://'), '', \G3\L\Url::domain());
		$domain = $this->data('domain_name', \G3\L\Url::domain(false));
		$this->set('domain', $domain);
		if(isset($this->data['trial'])){
			$status = (string)\GApp3::extension($this->extension)->valid('', true);
			if(is_numeric($status) AND strlen($status) > 1){
				\GApp3::session()->flash('error', 'Trial mode has been activated before.');
				$this->redirect(r3('index.php?ext='.$this->extension));
			}else if($status == 1){
				\GApp3::session()->flash('info', 'The extension has already been validated.');
				$this->redirect(r3('index.php?ext='.$this->extension));
			}else{
				$this->_vupdate(time() + (10 * 24 * 60 * 60), 'validated');
				$this->redirect(r3('index.php?ext='.$this->extension));
			}
		}
		if(!empty($this->data['license_key']) OR !empty($this->data['order_number'])){
			
			$fields = '';
			//$postfields = array();
			unset($this->data['option']);
			unset($this->data['cont']);
			unset($this->data['act']);
			$this->data['prod'] = str_replace('chrono', '', $this->extension);
			
			foreach($this->data as $key => $value){
				$fields .= "$key=".urlencode($value)."&";
			}
			
			$update_fld = 'validated';
			
			if(!empty($this->data['license_key'])){
				$target_url = 'https://www.chronoengine.com/index.php?option=com_chronocontact&task=extra&chronoformname=validateLicense&ver=7&api=4';
				
				if(strpos($this->data['license_key'], '@') !== false){
					$update_fld = explode('@', $this->data['license_key'])[0];
				}
			}else if(!empty($this->data['order_number'])){
				$target_url = 'https://www.chronoengine.com/index.php?option=com_chronocontact&task=extra&chronoformname=validateOrder&ver=7&api=4';
				
			}
			
			//$target_url = 'http://www.chronoengine.com/index.php?option=com_chronocontact&task=extra&chronoformname=validateLicense&ver=6&api=3';
			
			if(function_exists('curl_init')){
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $target_url);
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				curl_setopt($ch, CURLOPT_POSTFIELDS, rtrim($fields, "& "));
				
				$output = curl_exec($ch);
				
				if(curl_error($ch)){
					\GApp3::session()->flash('error', 'CURL Error: '.curl_error($ch));
					
					if(ini_get('allow_url_fopen')){
						$output = file_get_contents($target_url.'&'.rtrim($fields, "& "));
					}
				}
				
				curl_close($ch);
			}else if(ini_get('allow_url_fopen')){
				$output = file_get_contents($target_url.'&'.rtrim($fields, "& "));
			}else{
				\GApp3::session()->flash('error', 'Please enable the curl library on your server in order to be able to connect to the chronoengine.com web server');
				$this->redirect(r3('index.php?ext='.$this->extension));
			}
			
			$validstatus = $output;
			// pr3($output);die();
			if(strpos($validstatus, 'valid') === 0){
				$valresults = explode(':', $validstatus, 2);
				$valprods = json_decode($valresults[1], true);
				$result = false;
				
				$prod = str_replace('chrono', '', $this->extension);
				foreach($valprods as $valprod){
					if(!empty($valprod['ext']) AND $valprod['ext'] == $prod){
						if(!empty($valprod['maxtime'])){
							$result = $this->_vupdate($valprod['maxtime'], 'validated');
						}else{
							$result = $this->_vupdate(1, 'validated');
						}
					}else if(!empty($valprod['plg'])){
						$result = $this->_vupdate(1, 'validated_'.$valprod['plg']);
					}
				}
				
				if($result){
					\GApp3::session()->flash('success', 'Validated successfully.');
					$this->redirect(r3('index.php?ext='.$this->extension));
				}else{
					\GApp3::session()->flash('error', 'Validation error.');
				}
			}else if(strpos($validstatus, 'invalid') === 0){
				\GApp3::session()->flash('error', 'Validation error, you have provided incorrect data.');
				if(strpos($validstatus, ':') !== false){
					$msg_data = explode(':', $validstatus, 2);
					\GApp3::session()->flash('info', $msg_data[1]);
				}
			}else if(strpos($validstatus, 'Error') === 0){
				\GApp3::session()->flash('error', explode(':', $validstatus)[1]);
			}else{
				if(!empty($this->data['serial_number'])){
					$blocks = explode("-", trim($this->data['serial_number']));
					
					if(!empty($this->data['license_key'])){
						$hash = md5($this->data('license_key').str_replace('www.', '', $domain).$blocks[3]);
					}else if(!empty($this->data['order_number'])){
						//$hash = md5($this->data('order_number').str_replace('www.', '', $domain).$blocks[3]);
					}
					
					if(substr($hash, 0, 7) == $blocks[4]){
						$result = $this->_vupdate(1, 'validated');
						
						if($result){
							\GApp3::session()->flash('success', 'Validated successfully.');
							$this->redirect(r3('index.php?ext='.$this->extension));
						}else{
							\GApp3::session()->flash('error', 'Validation error.');
						}
					}else{
						\GApp3::session()->flash('error', 'Serial number invalid!');
					}
				}
				
				\GApp3::session()->flash('error', 'We could not connect to the chronoengine.com web server.');
				
				$this->redirect(r3('index.php?ext='.$this->extension));
			}
		}
	}

}
?>