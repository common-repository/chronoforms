<?php
namespace G3\L\T;
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
trait Groups{
	public function Groups($groups){
		return GroupsObject::getInstance($this, ['groups' => $groups]);
	}
	
}

class GroupsObject extends \G3\L\Component{
	use \G3\L\T\Model;
	
	var $groups = [];
	var $models = [
		'Group' => '\G3\A\M\Group',
		'User' => '\G3\A\M\User',
		'GroupUser' => '\G3\A\M\GroupUser',
	];
	
	function users(){
		$users = $this->Model('User')
		->hasOne($this->Model('GroupUser'), 'GroupUser', 'user_id')
		->where('GroupUser.group_id', $this->groups, 'in')
		->fields(['id', 'username', 'name', 'email'])
		->select('all');
		
		return $users;
	}
	
}
?>