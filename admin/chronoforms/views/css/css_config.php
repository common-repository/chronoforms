<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="field">
	<label><?php el3('Content'); ?></label>
	<textarea name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][content]" rows="20" data-codeeditor='{"mode":"css"}'></textarea>
	<small><?php el3('CSS code WITHOUT style tags'); ?></small>
</div>