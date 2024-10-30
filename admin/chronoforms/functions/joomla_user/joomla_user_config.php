<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field required">
		<label><?php el3('Name value'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][name_provider]">
		<small><?php el3('What value should be used for the user name'); ?></small>
	</div>
	<div class="field required">
		<label><?php el3('Username value'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][username_provider]">
		<small><?php el3('What value should be used for the username'); ?></small>
	</div>
</div>

<div class="equal width fields">
	<div class="field required">
		<label><?php el3('Password value'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][password_provider]">
		<small><?php el3('What value should be used for the password'); ?></small>
	</div>
	<div class="field required">
		<label><?php el3('Email value'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][email_provider]">
		<small><?php el3('What value should be used for the email'); ?></small>
	</div>
</div>

<div class="equal width fields">
	<div class="field">
		<label><?php el3('User is Blocked'); ?></label>
		<select name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][block_provider]" class="ui fluid dropdown search" data-allowadditions="1">
			<option value="1"><?php el3('Yes'); ?></option>
			<option value="0"><?php el3('No'); ?></option>
		</select>
		<small><?php el3('Select the block status or enter a status provider'); ?></small>
	</div>
	<div class="field">
		<label><?php el3('Account is activated'); ?></label>
		<select name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][activated]" class="ui fluid dropdown search">
			<option value="1"><?php el3('Auto Activated'); ?></option>
			<option value="0"><?php el3('Requires Manual Activation'); ?></option>
			<option value="user"><?php el3('Requires User Email Activation'); ?></option>
			<option value="admin"><?php el3('Requires Admin Email Activation'); ?></option>
		</select>
		<small><?php el3('You can select activation options in advanced settings'); ?></small>
	</div>
</div>
<?php
	$Group = new \G3\A\M\Group();
	$_groups = $Group->select('flat');
	// $_groups = array_merge([['Group' => ['id' => 'owner', 'title' => rl3('Owner'), '_parents' => []]]], $_groups);
	$groups = [];
	foreach($_groups as $g){
		$groups[$g['Group']['id']] = $g['Group']['title'];
	}
?>
<div class="field">
	<label><?php el3('User Groups'); ?></label>
	<select name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][groups_provider][]" class="ui fluid multiple dropdown search" data-allowadditions="1">
		<?php foreach($groups as $gid => $gtitle): ?>
		<option value="<?php echo $gid; ?>" <?php if($gid == 2): ?>selected<?php endif; ?>><?php echo $gtitle; ?></option>
		<?php endforeach; ?>
	</select>
	<small><?php el3('Which groups the user will be added to ?'); ?></small>
</div>

<div class="field">
	<label><?php el3('Data override'); ?></label>
	<?php $this->view($this->get('cf.paths.shared').'parameters_config.php', ['unit' => $unit, 'utype' => $utype, 'n' => $n, 'name' => 'data_override', 'text' => rl3('Add Field Override'), 'name_label' => rl3('Field name')]); ?>
</div>

<div class="field required">
	<label><?php el3('User exists error'); ?></label>
	<input type="text" value="<?php el3('A user with the same username or email already exists.'); ?>" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][userexists_error]">
	<small><?php el3('Error message displayed when a user with the same username or email address already exists.'); ?></small>
</div>