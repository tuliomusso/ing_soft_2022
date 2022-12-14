<?php
 $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
  session_start();
  $idCategoria = isset($_POST['idCategoria']) ? $_POST['idCategoria'] : '';
  $idUsuario= $_SESSION['username'];
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  //$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $imagen='';
  if(isset($_FILES["imagen"])){
    $file= $_FILES["imagen"];
    $nombreFoto= $file["name"];
    $tipo= $file["type"];
    $ruta_provisional= $file["tmp_name"];
    $size= $file["size"];
    $dimensiones= getimagesize($ruta_provisional);
    $width= $dimensiones[0];
    $height= $dimensiones[1];
    $carpeta= "fotosServicios/";

    if($tipo !='image/jpg' && $tipo !='image/JPG' && $tipo !='image/jpeg' && $tipo !='image/png' && $tipo !='image/gif'){
      echo "Error, el archivo no es una imagen";
    }
    else{
      $src= $carpeta.$nombreFoto;
      move_uploaded_file($ruta_provisional, $src);
      $imagen="fotosServicios/".$nombreFoto;
    }
  }
  $cantidadReservas = isset($_POST['cantidadReservas']) ? $_POST['cantidadReservas'] : '';
  $descripcionContacto = isset($_POST['descripcionContacto']) ? $_POST['descripcionContacto'] : '';
  $sql = "SELECT * FROM usuario";        
  $result = mysqli_query($mysqli, $sql);
  $cantidadFilas = mysqli_num_rows($result);
  for($fila=0;$fila<$cantidadFilas;$fila++){
    $valores = mysqli_fetch_assoc($result);
    if($valores["email"]==$idUsuario){
      // guardo los datos de localizacion del oferente
      $provinciaOferente= $valores["nombreProvincia"];
      $departamentoOferente= $valores["nombreDepartamento"];
      $localidadOferente= $valores["nombreLocalidad"];
    }
  }
  $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
  $SQL=mysqli_query($mysqli,"INSERT INTO disponibilidadoriginal (nombreServicio, reservasServicio) VALUES ('$nombre', '$cantidadReservas')");
  try {

    $conexion = new PDO("mysql:host=localhost;port=3306;dbname=serviempresa", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $pdo = $conexion->prepare('INSERT INTO servicio(idCategoria, idUsuario, nombre, imagen, cantidadReservas, descripcionContacto, provinciaOferente, departamentoOferente, localidadOferente) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $pdo->bindParam(1, $idCategoria);
    $pdo->bindParam(2, $idUsuario);
    $pdo->bindParam(3, $nombre);
    $pdo->bindParam(4, $imagen);
    $pdo->bindParam(5, $cantidadReservas);
    $pdo->bindParam(6, $descripcionContacto);
    $pdo->bindParam(7, $provinciaOferente);
    $pdo->bindParam(8, $departamentoOferente);
    $pdo->bindParam(9, $localidadOferente);
    $pdo->execute() or die(print($pdo->errorInfo()));
    echo json_encode('true');

} catch(PDOException $error) {
    echo $error->getMessage();
    die();
}

?>

