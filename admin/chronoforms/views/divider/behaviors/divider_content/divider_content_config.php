<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('Content'); ?></label>
		<input type="text" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][nodes][main][content]">
		<small><?php el3('Text used in the divider.'); ?></small>
	</div>
</div>