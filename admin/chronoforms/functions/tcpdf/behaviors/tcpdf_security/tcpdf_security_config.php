<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('User pass'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][user_pass]">
	</div>
	<div class="field">
		<label><?php el3('Owner pass'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][owner_pass]">
	</div>
</div>