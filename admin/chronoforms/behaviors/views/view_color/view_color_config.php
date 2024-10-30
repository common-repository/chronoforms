<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php $this->view($this->get('cf.paths.shared').'color_dropdown.php', ['utype' => $utype, 'n' => $n]); ?>