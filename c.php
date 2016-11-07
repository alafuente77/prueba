<?php
$a = print exec('id');

?> 
<html>
<title> Pagina Prueba </title>
<header> Wilcomen! </header>
<h2> Guten Mörgen !</h2>
<body>
<h4> El path es :"<?echo $a; ?> </h4>
</body>
<?
//agregamos esto
$b = print exec('id');
//agregamos dos lineas mas!!
$c = print exec('id');
$d = print exec('id');
?>
<footer><b><center> todos los derechos reservados!</center> </b></footer>
</hmtl>

