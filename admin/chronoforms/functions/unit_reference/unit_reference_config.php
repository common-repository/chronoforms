<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Referenced Unit'); ?></label>
	<select name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][reference][uid]" class="ui fluid dropdown search" data-list=".functionsList"  data-keepnonexistent="1" data-clearable="1">
		<option value=""></option>
	</select>
	<small><?php el3('Select the unit to reference'); ?></small>
</div>
