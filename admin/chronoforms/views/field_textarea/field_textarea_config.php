<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('Rows'); ?></label>
		<input type="text" value="5" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][nodes][main][attrs][rows]">
		<small><?php el3('The text rows height of the textarea'); ?></small>
	</div>
</div>