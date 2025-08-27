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
$sqlSelect = "SELECT * FROM loginweb WHERE idWeb='$id'";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();

    // Insertar los datos en la tabla usuariosinactivos y establecer el estatus como 'Inactivo'
    $sqlInsert = "INSERT INTO usuariosinactivos (idUsuari, nombre, apellido, correo, contraseña, fecha, estatus)
                  VALUES ('{$userData['idWeb']}', '{$userData['nombre']}', '{$userData['apellido']}', '{$userData['correo']}', '{$userData['contraseña']}', '{$userData['fecha']}', 'Inactivo')";

    if ($conn->query($sqlInsert) === TRUE) {
        // Luego, eliminar el usuario de loginweb
        $sqlDelete = "DELETE FROM loginweb WHERE idWeb='$id'";

        if ($conn->query($sqlDelete) === TRUE) {
            header("Location: /alienstage/pages/usuarios.php?message=Usuario eliminado y movido a inactivos");
        } else {
            echo "Error al eliminar el usuario: " . $sqlDelete . "<br>" . $conn->error;
        }
    } else {
        echo "Error al insertar en usuariosinactivos: " . $sqlInsert . "<br>" . $conn->error;
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();
?>
