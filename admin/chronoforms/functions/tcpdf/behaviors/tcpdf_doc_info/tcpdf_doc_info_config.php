<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="two fields">
	<div class="field">
		<label><?php el3('Author'); ?></label>
		<input type="text" value="Chronoforms" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][pdf_author]">
	</div>
	<div class="field">
		<label><?php el3('Subject'); ?></label>
		<input type="text" value="Powered by Chronoforms & TCPDF" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][pdf_subject]">
	</div>
</div>

<div class="field">
	<label><?php el3('Keywords'); ?></label>
	<input type="text" value="Chronoforms, TCPDF Plugin, TCPDF, PDF" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][pdf_keywords]">
</div>