<?php
$dbHost='localhost';
$dbName='Integradora';
$dbUser='root';
$dbPass='root';
// Crear una conexión mysqli
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Verificar la conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
?>