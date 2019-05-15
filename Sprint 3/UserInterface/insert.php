<?php
$name= $_POST['name'];
$value= $_POST['value'];
$type= $_POST['type'];

if($type == 'light') {
    if($value)
        $txt= "The light ".$name." is on";
    else
        $txt="The light ".$name." is off";
}

$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>
