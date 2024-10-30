<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Next Pages list'); ?></label>
	<select name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][next_pages][]" class="ui fluid dropdown multiple search" data-list=".pagesList" data-keepnonexistent="1" data-clearable="1" multiple="multiple">
		<option value=""></option>
	</select>
	<small><?php el3('A list of permitted next pages, this setting is only useful for sequential pages'); ?></small>
</div>