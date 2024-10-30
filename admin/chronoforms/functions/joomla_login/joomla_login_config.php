<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field required">
		<label><?php el3('Username field provider'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][username_provider]">
		<small><?php el3('The username value data source'); ?></small>
	</div>
	<div class="field required">
		<label><?php el3('Password field provider'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][password_provider]">
		<small><?php el3('The password value data source'); ?></small>
	</div>
</div>