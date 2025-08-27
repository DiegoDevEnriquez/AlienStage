<?php
$servername = "localhost";
$username = "u326335575_alien";  // Cambia esto por tu usuario de MySQL
$password = "AlienStage1234";  // Cambia esto por tu contraseña de MySQL
$dbname = "u326335575_astage";  // Cambia esto por el nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM equipos WHERE idEquipo='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /alienstage/pages/tables.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
