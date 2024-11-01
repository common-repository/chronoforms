<?php
/**
* ChronoCMS version 1.0
* Copyright (c) 2012 ChronoCMS.com, All rights reserved.
* Author: (ChronoCMS.com Team)
* license: Please read LICENSE.txt
* Visit http://www.ChronoCMS.com for regular updates and information.
**/
namespace G3\A\M;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
class User extends \G3\L\Model {
	var $tablename = '#__users';
	var $fieldsMap = array('registerDate' => 'register_date');
	
	public function afterSelect($data, $type, $settings){
		$data = parent::afterSelect($data, $type, $settings);
		
		if($type == 'first'){
			if(!empty($data[$this->name]['password'])){
				$data[$this->name]['password'] = '';
			}
		}
		
		return $data;
	}
	
	public function beforeInsert($data, $settings){
		$data = parent::beforeInsert($data, $settings);
		
		if(!empty($data['password'])){
			$data['password'] = \JUserHelper::hashPassword($data['password']);
		}
		
		if(empty($data['registerDate'])){
			$data['registerDate'] = \G3\L\Dater::datetime('Y-m-d H:i:s');
		}
		
		return $data;
	}
	
	public function afterInsert($data, $settings){
		if(!empty($data['groups'])){
			$groups = (array)$data['groups'];
			$groups = array_filter(array_unique($groups));
			
			$userGroupModel = new \G3\A\M\GroupUser();
			
			foreach($groups as $group){
				$groupSave = $userGroupModel->insert(['group_id' => $group, 'user_id' => $data['id']]);
				
				if($groupSave === false){
					//return 4;
				}
			}
		}
	}
	
	public function beforeUpdate($data, $settings){
		$data = parent::beforeUpdate($data, $settings);
		
		if(empty($data['password'])){
			unset($data['password']);
		}else{
			$data['password'] = \JUserHelper::hashPassword($data['password']);
		}
		
		return $data;
	}
	
	public function remove($id){
		if(empty($id)){
			return ['error' => rl3('Missing ID.')];
		}
		
		$result = $this
		->fields(['User.*', 'GroupUser.*'])
		->hasOne('\G3\A\M\GroupUser', 'GroupUser', 'user_id')
		->where('id', $id)
		->delete();
		
		if($result !== false){
			return true;
		}else{
			return ['error' => rl3('Error deleting user.')];
		}
	}
}