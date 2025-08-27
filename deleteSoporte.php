<?php
// Iniciar sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['codigo'])) {
    header("Location: /alienstage/login.php");
    exit();
}

// Verificar si el usuario es administrador o empleado
$isAdmin = strpos($_SESSION['codigo'], 'Adm') === 0;
$isEmployee = strpos($_SESSION['codigo'], 'Emp') === 0;

if (!$isAdmin && !$isEmployee) {
    header("Location: /alienstage/pages/inicio.php");
    exit();
}

// Datos de conexión a la base de datos
$servername = "localhost";
                  $username = "u326335575_alien";  // Cambia esto por tu usuario de MySQL
                  $password = "AlienStage1234";  // Cambia esto por tu contraseña de MySQL
                  $dbname = "u326335575_astage";  // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener el ID del soporte desde el formulario POST
$idSoporte = isset($_POST['id']) ? intval($_POST['id']) : 0;

// Verificar si el soporte tiene un estatus "Cancelado" o "Solucionado"
$sqlCheckStatus = "SELECT estatus FROM soporte WHERE idSoporte = ?";
$stmt = $conn->prepare($sqlCheckStatus);
$stmt->bind_param("i", $idSoporte);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $estatus = $row['estatus'];

    // Eliminar solo si el estatus es "Cancelado" o "Solucionado"
    if ($estatus === 'Cancelado' || $estatus === 'Solucionado') {

        // Primero eliminar las respuestas asociadas en respuestasoporte
        $sqlDeleteResponses = "DELETE FROM respuestasoporte WHERE idSoporte = ?";
        $stmtDeleteResponses = $conn->prepare($sqlDeleteResponses);
        $stmtDeleteResponses->bind_param("i", $idSoporte);
        $stmtDeleteResponses->execute();

        // Luego eliminar el soporte en la tabla soporte
        $sqlDelete = "DELETE FROM soporte WHERE idSoporte = ?";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->bind_param("i", $idSoporte);

        if ($stmtDelete->execute()) {
            // Redirigir con un mensaje de éxito
            header("Location: /alienstage/pages/soporte.php?message=Soporte eliminado con éxito");
        } else {
            // Redirigir con un mensaje de error
            header("Location: /alienstage/pages/soporte.php?message=Error al eliminar el soporte");
        }
    } else {
        // Redirigir con un mensaje de error si el estatus no es "Cancelado" o "Solucionado"
        header("Location: /alienstage/pages/soporte.php?message=Solo se pueden eliminar soportes con estatus 'Cancelado' o 'Solucionado'");
    }
} else {
    // Redirigir con un mensaje de error si no se encuentra el soporte
    header("Location: /alienstage/pages/soporte.php?message=Soporte no encontrado");
}

// Cerrar conexión
$conn->close();
?>
