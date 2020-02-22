<?php
$lat =$_GET['dato'];
$long = $_GET['dato2'];
  

//obtengo la ip

if (!empty($_SERVER['HTTP_CLIENT_IP'])){ //Verificar la ip compartida de internet
$ip = 'Compartida HTTP_CLIENT_IP: '.$_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //verificar si la ip fue provista por un proxy
$ip = 'Proxy HTTP_X_FORWARDED_FOR: '.$_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
$ip = 'Remote REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR'];
}



echo 'IP:'.$ip.'<br/> Latitud:'.$lat.'<br/>Longitud'.$long;
session_start();
$ipUsuario[]=array('IP'=>$ip,'Latitud'=>$lat,'Longitud'=>$long);
$_SESSION[ipUsuario]=$ipUsuario;

?>