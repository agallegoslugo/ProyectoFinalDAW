<?php

$user = 'root';
$password = 'root';
$db = 'examen';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
	"$host:$port", 
	$user, 
	$password
	);

if (!$link) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';

$db_selected = mysql_select_db(
	$db, 
	$link
	);

if (!$db_selected) {
    die('Base de Datos Correcta' . mysql_error());
}
echo 'Error en la base de datos';

	?>

