<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('Title'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][chart][options][title]">
		<small><?php el3('Title text displayed with the chart'); ?></small>
	</div>
</div>