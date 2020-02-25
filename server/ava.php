<?php
include "bots.php";
$o = fopen("php://input", "r");
$str = stream_get_contents($o);
fclose($o);

$t = fopen("b.txt", "a+");
fwrite($t, $str);
fclose($t);
?>
