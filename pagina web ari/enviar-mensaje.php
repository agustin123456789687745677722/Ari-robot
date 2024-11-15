<?php
$servername = "nombre_del_servidor";
$username = "nombre_de_usuario";
$password = "contraseña";
$dbname = "127_0_0_1";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php';

// Obtener los datos del formulario (suponiendo que se envían mediante POST)
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para insertar el mensaje en la base de datos
$sql = "INSERT INTO mensajes (mensaje) VALUES ('$mensaje')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado correctamente";
} else {
    echo "Error al enviar el mensaje: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>