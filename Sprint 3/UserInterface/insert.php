<?php
$name= $_POST['name'];
$value= $_POST['value'];
$type= $_POST['type'];

if($type == 'light') {
    if($value == 'true'){
        $txt= "The light ".$name." is on";
    }
    if($value == 'false')
    {
        $txt="The light ".$name." is off";
    }
}

if($type == 'appliance'){
    if($value == 'true'){
        $txt= "The ".$name." is on";
    }
    if($value == 'false')
    {
        $txt="The ".$name." is off";
    }
}

if($type == 'temperature'){
    $txt = "The temperature for ".$name." is set to ".$valuel;
}

$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>
