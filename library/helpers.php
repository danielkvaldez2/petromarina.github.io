<?php 
//session_start();
require_once "class-inputfilter.php" ;

class Conectar
{
	/*public static function con()
	{
		/*$con=mysql_connect("localhost","almanaqu_kval","4554x12");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("almanaqu_esdetaco");
		return $con;*//*
		$con=mysql_connect("localhost","root","usbw",3307);
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("almanaqu_esdetaco");
		return $con;
		
	}*/
	
}
class trabajo 
{
	public static function limpiando($palabra) 
	{
		$limpia = new InputFilter();
	    $limpio = $limpia -> process($palabra);
	    return $limpio;
    }
	public static function chao_acento($entra)
	{	$traduce=array('á'=>'a','é'=>'e','í'=>'i','ó'=>'o','ú'=>'u','ñ'=>'n','Ñ'=>'N', 'ü'=>'u');
		$sale=sutrtr($entra, $traduce);
		return $sale;
	}
	public static function corta_palabra($palabra,$num)
	{	$largo=strlen($palabra);//indicarme el largo de una cadena trabajo::corta_palabra($palabra,$num)
		$cadena=substr($palabra,0,$num);
		return $cadena;
	}

	public static function con_guion($palabra) 
	{  $palabra=Conectar::chao_acento($palabra);
		$palabra=trim($palabra); 
		$palabra=str_replace(" ","-",$palabra);
		return $palabra;
	}
//Función para invertir fecha
     public static function invierte_fecha($fecha)
	{  $dia=substr($fecha,8,2);
	   $mes=substr($fecha,5,2);
	   $anio=substr($fecha,0,4);
	   $correcta=$dia."-".$mes."-".$anio;
	   return $correcta;
	}
}
