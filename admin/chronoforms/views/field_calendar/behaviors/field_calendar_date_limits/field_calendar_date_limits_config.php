<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="field">
		<label><?php el3('Earliest date/time'); ?></label>
		<input type="text" placeholder="YYYY-MM-DD HH:mm:ss" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][calendar][mindate]">
	</div>
	<div class="field">
		<label><?php el3('Latest date/time'); ?></label>
		<input type="text" placeholder="YYYY-MM-DD HH:mm:ss" value="" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][calendar][maxdate]">
	</div>
</div>