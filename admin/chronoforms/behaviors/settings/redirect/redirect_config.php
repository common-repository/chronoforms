<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
	<div class="twelve wide field required">
		<label><?php el3('Redirect URL'); ?></label>
		<input type="text" placeholder="http://www.domain.com/page" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][redirect][pageurl]">
		<small><?php el3('The full URL to redirect the user to, including http:// or https://'); ?></small>
	</div>
	
	<div class="four wide field">
		<label><?php el3('Redirect Delay'); ?></label>
		<input type="text" placeholder="0" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][redirect][time]">
		<small><?php el3('Display the last page Views then redirect after this time in seconds'); ?></small>
	</div>
</div>