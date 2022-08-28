<?php
  session_start();
  $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : '';
  $idUsuario= $_SESSION['username'];
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $cantidadReservas = isset($_POST['cantidadReservas']) ? $_POST['cantidadReservas'] : '';
  $descripcionContacto = isset($_POST['descripcionContacto']) ? $_POST['descripcionContacto'] : '';

  try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=serviempresa", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO servicio(idCategoria, idUsuario, nombre, imagen, cantidadReservas, descripcionContacto) VALUES(?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $idCategoria);
    $pdo->bindParam(2, $idUsuario);
    $pdo->bindParam(3, $nombre);
    $pdo->bindParam(4, $imagen);
    $pdo->bindParam(5, $cantidadReservas);
    $pdo->bindParam(6, $descripcionContacto);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}

?>

