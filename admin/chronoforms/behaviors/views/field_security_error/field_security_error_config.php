<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Custom Error message'); ?></label>
	<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][failed_error]">
	<small><?php el3('Override the global error message'); ?></small>
</div>