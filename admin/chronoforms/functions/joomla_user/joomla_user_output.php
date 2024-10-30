<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
	$name = $this->Parser->parse(trim($function['name_provider']));
	$username = $this->Parser->parse(trim($function['username_provider']));
	$password = $this->Parser->parse(trim($function['password_provider']));
	$email = $this->Parser->parse(trim($function['email_provider']));
	$block = $this->Parser->parse(trim($function['block_provider']));
	$activated = $this->Parser->parse(trim($function['activated']));
	$groups = [];
	if(!empty($function['groups_provider'])){
		foreach($function['groups_provider'] as $gid){
			$groups[] = $this->Parser->parse($gid);
		}
	}
	
	$userData = [
		'name' => trim($name),
		'username' => trim($username),
		'email' => $email,
		'password' => trim($password),
		'block' => $block,
		'activation' => empty($activated) ? \G3\L\Str::uuid() : '',
	];
	
	if(!empty($function['data_override'])){
		$new_data = $function['data_override'];

		foreach($new_data as $new_data_line){
			$new_data_value = $this->Parser->parse($new_data_line['value']);
			$userData[$new_data_line['name']] = $new_data_value;
		}
	}
	
	if(!empty($userData['password'])){
		//$userData['password'] = JUserHelper::hashPassword($userData['password']);
	}
	
	if(empty($userData['id']) AND empty($userData['registerDate'])){
		$userData['registerDate'] = \G3\L\Dater::datetime('Y-m-d H:i:s');
	}
	
	foreach(['name', 'username', 'password', 'email'] as $req){
		if(isset($userData[$req]) AND empty($userData[$req])){
			$this->debug[$function['name']]['_error'] = rl3('Missing user data.');
			$this->set($function['name'], false);
			$this->fevents[$function['name']]['fail'] = true;
			return;
		}
	}
	
	$userModel = new \G3\A\M\User();
	
	if(empty($userData['id'])){
		//check if username/email are unique
		$exists = $userModel->where('username', $username)->where('OR')->where('email', $email)->select('first');
		
		if(!empty($exists)){
			if(!isset($function['userexists_error']) OR !empty($function['userexists_error'])){
				$this->errors[$function['name']][] = $this->Parser->parse($function['userexists_error']);
			}
			$this->debug[$function['name']]['_error'] = rl3('A user with the same username or email already exists.');
			$this->set($function['name'], false);
			$this->fevents[$function['name']]['user_exists'] = true;
			return;
		}
	}
	//save the user
	$userSave = $userModel->save($userData);
	
	if($userSave !== false){
		$user_id = $userModel->id;
		$userData['id'] = $user_id;
		
		if(!empty($groups)){
			$groups = (array)$groups;
			$groups = array_filter(array_unique($groups));
			
			$userGroupModel = new \G3\A\M\GroupUser();
			
			foreach($groups as $group){
				$groupSave = $userGroupModel->insert(['group_id' => $group, 'user_id' => $user_id]);
				
				if($groupSave === false){
					$this->debug[$function['name']]['_error'] = rl3('Error assignning the user to a group.');
					$this->set($function['name'], false);
					$this->fevents[$function['name']]['fail'] = true;
					return;
				}
			}
		}
		
		$this->set($function['name'], $userData);
		$this->fevents[$function['name']]['success'] = true;
		$this->debug[$function['name']]['_success'] = rl3('User saved successfully under id %s', [$user_id]);
	}else{
		$this->debug[$function['name']]['_error'] = rl3('Error saving user.');
		$this->set($function['name'], false);
		$this->fevents[$function['name']]['fail'] = true;
		return;
	}