<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$ubicacion = $_POST['ubicacion'];
$pago = $_POST['pago'];
$InfoExtra = $_POST['InfoExtra'];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = ""; // Set a secure password
$database = "database"; // Replace with your actual database name

// Create connecton
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$database);
$EnterDataFrom = "INSERT INTO formulario VALUES ('$nombre','$telefono','$ubicacion','$pago','$InfoExtra')";
mysqli_query($conn,$EnterDataFrom);
mysqli_close($conn);
?>
