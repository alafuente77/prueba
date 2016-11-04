<?php
$path = getcwd();
//echo "This Is Your Absolute Path: ";
//echo $path;
phpinfo();

?>
<html>
<title> Pagina Prueba </title>
<header> Wilcomen! </header>
<h2> Guten Mörgen !</h2>
<body>
<h4> El path es :"<?echo $path; ?> </h4>
</body>
<footer><b><center> todos los derechos reservados!</center> </b></footer>

</html>
<?
//adicionalmente coloco esta linea simplemente para agregarla y ver como se reflejan los cambios.
$b = 9 * 5;
echo $b;
// veamos que pasa... 

//en este comentario agrego este linea simplemente para agregar algo que haga bulto..
$prueba = "archivo de prueba";
if ($prueba =! ''){
echo "El contenido de prueba es:".$prueba;
}else{
echo "No hay contenido en prueba";
}
echo $prueba;
?>