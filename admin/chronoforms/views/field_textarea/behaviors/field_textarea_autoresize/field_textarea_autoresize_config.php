<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<div class="equal width fields">
    <div class="field">
        <label><?php el3('Maximum Rows'); ?></label>
        <input type="text" value="10" name="Connection[<?php echo $utype; ?>][<?php echo $n; ?>][nodes][main][attrs][data-autoresize]">
        <small><?php el3('Auto expand the textarea height up to this number of rows'); ?></small>
    </div>
</div>