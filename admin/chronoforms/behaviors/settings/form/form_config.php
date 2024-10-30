<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php echo $this->view(dirname(dirname(dirname(__FILE__))).DS.'pages'.DS.'form'.DS.'form_config.php', ['n' => $n, 'utype' => $utype]); ?>