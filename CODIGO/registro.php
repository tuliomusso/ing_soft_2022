<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$nombreApellido = isset($_POST['nombreApellido']) ? $_POST['nombreApellido'] : '';
$domicilio = isset($_POST['domicilio']) ? $_POST['domicilio'] : '';
$nombreLocalidad = isset($_POST['nombreLocalidad']) ? $_POST['nombreLocalidad'] : '';
$codigoPostal = isset($_POST['codigoPostal']) ? $_POST['codigoPostal'] : '';
$nombreProvincia = isset($_POST['nombreProvincia']) ? $_POST['nombreProvincia'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$dni = isset($_POST['dni']) ? $_POST['dni'] : '';

try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=serviempresa", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuario(email, password, nombreApellido, domicilio, nombreLocalidad, codigoPostal, nombreProvincia, telefono, dni) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $email);
    $pdo->bindParam(2, $password);
    $pdo->bindParam(3, $nombreApellido);
    $pdo->bindParam(4, $domicilio);
    $pdo->bindParam(5, $nombreLocalidad);
    $pdo->bindParam(6, $codigoPostal);
    $pdo->bindParam(7, $nombreProvincia);
    $pdo->bindParam(8, $telefono);
    $pdo->bindParam(9, $dni);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}
?>