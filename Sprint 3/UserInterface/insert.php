<?php
$name= $_POST['name'];
$value= $_POST['value'];

$txt = "The button ".$name." and is ".$value;
$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>
