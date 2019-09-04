<?php
//echo "Hola"; //imprime Hola en pantalla

//var_dump($_GET); // toma los valores ingresados y nos da sus atributos (string, float, int)

//echo "Su nombre es ".$_GET['nombre'];

$archivo = fopen('usuario.txt', 'a');
	fwrite($archivo, $_GET['nombre']."\n");

?>