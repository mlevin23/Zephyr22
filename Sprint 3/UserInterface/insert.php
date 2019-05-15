<?php
$name= $_POST['name'];
$value= $_POST['value'];

$txt = $value $name;
$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>
