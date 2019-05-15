<?php
$name= $_POST['name'];
$value= $_POST['value'];
$type= $_POST['type'];

date_default_timezone_set("America/Chicago");

if($type == 'light') {
    if($value == 'true'){
        $txt= "The light ".$name." is on at ".date("h:i:sa d/m/Y");
;
    }
    if($value == 'false')
    {
        $txt="The light ".$name." is of at ".date("h:i:sa d/m/Y");
    }
}

if($type == 'appliance'){
    if($value == 'true'){
        $txt= "The ".$name." is on at ".date("h:i:sa d/m/Y");
    }
    if($value == 'false')
    {
        $txt="The ".$name." is of at ".date("h:i:sa d/m/Y");
    }
}

if($type == 'temperature'){
    $txt = "The temperature for ".$name." is set to ".$value." at time ".date("h:i:sa d/m/Y");
}

$myfile = file_put_contents('data.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
?>
