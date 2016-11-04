<?php
//script realizado por Alfredo Lafuente
session_start(); // Inicio la sesión
$usu=$_SESSION['user1'];
if (!isset($_SESSION[user1]))
header("location:index.php");
?>
<html>
	<head>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XMHTML  1.0 Transitional//EN" "http://www.w3.org./TR/xmhtml/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lamg="es">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                 <link rel="stylesheet" type="text/css" href="default.css">
                     <script type="text/javascript" src="rotadorAjax.js">
                     </script>
    	<title> Servicio de Remote Reboot</title>
        </head>
<?php
include ("encabezado.php");

include("conectar.php");
	// Ejecuto la sentencia.
	 //$cmd='cgi-bin/UU.pl 190.183.63.9:80 admin:rr_reboot-4 status';
	
	$rs=mysql_query("SELECT * from servicio where id_serv='$_POST[usereb]'",$link);
	$v = mysql_fetch_array($rs); // Guardo en un array asociativo la información que encontro en la busqueda.
	$iprr=$v[iprr];
	$prr=$v[prr];
	$pswdrr=$v[pswdrr];
	$hostname=$v[hostname];
	// Cierro la conexión a la base de datos.
	mysql_close($link);
echo "</br>Se ha enviado la orden de reseteo para el servidor <font color='green'>$hostname.</font><br>";
$port='80';
//$prog1='cgi-bin/UU.pl';
$prog1='/home/vnoc/domains/virtualnoc.com.ar/public_html/cgi-bin';
$prog='/UU.pl';
$us='admin';
$ac='pulse';
$cmd=$prog1..$prog." ".$iprr.":".$port." ".$us.":".$pswdrr." ".$prr.$ac;
$salida = exec($cmd);
echo "<pre>$salida</pre>";
echo "<br>$cmd";

?>
 <br><a href="listado.php">Volver atras</a>
 <?php include("pie.php");?>
 
      
	    