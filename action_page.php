<?php
//echo "Hola"; //imprime Hola en pantalla

//var_dump($_GET); // toma los valores ingresados y nos da sus atributos (string, float, int)

//echo "Su nombre es ".$_GET['nombre']; //trae el nombre ingresado

$miobjeto = new stdClass();
$miobjeto->nombre=$_GET['nombre'];
$miobjeto->apellido=$_GET['apellido'];
var_dump(json_encode($miobjeto));

$archivo=fopen('usuario.txt', 'a'); //crea un archivo usuario.txt 'a' abre el archivo e ingresa datos
	
	fwrite($archivo,json_encode($miobjeto)."\n");

	//fwrite($archivo, $_GET['nombre']."\n"); //ingresa nombre dentro del archivo y agrega una linea

	fclose($archivo);


?>