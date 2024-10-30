<?php
/*** FILE_DIRECT_ACCESS_HEADER ***/
defined("GCORE_SITE") or die;
?>
<?php
// $result = '';
// foreach($this->data('Connection.views') as $view){
//     $result .= $this->Parser->view($view);
// }
$result = $this->Parser->section($section);

echo $result;