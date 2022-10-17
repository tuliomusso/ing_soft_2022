<!DOCTYPE html>
<?php
  $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a7606874aa.js" crossorigin="anonymous"></script>
</head>
<body>
      <?php
$categoria = $_GET['categoria'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$oferente=$_GET['oferente'];
$imagen=$_GET['imagen'];
$idServicio=$_GET['idServicio'];
$cantidadReservas=$_GET['cantidadReservas'];
?> 

         <!-- NAVBAR -->
  <?php include 'NAV-FOOTER/navbar.php';
  ?>



  <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo $imagen; ?>" width="300" height="300" alt="imagen error" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">CATEGORIA: <?php echo $categoria?></span>
                                <h5 class="text-uppercase"><?php echo $nombre?></h5>
                                <h8 class="text">OFRECIDO POR: <u><?php echo $oferente?></u></h8 >
                            </div>
                            <p class="about">DESCRIPCION: <?php echo $descripcion?></p>
                            <p class="about">TURNOS DISPONIBLES: <?php echo $cantidadReservas?></p>
                            <form method="POST">
                            <input type="submit" class="btn btn-success" name="btn-atc" value="CONFIRMAR SERVICIO">
                            </form>
                            
                            <?php
                            if(isset($_POST['btn-atc'])){
                                
                                $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
                                $sql = "SELECT * FROM servicio";        
                                $result = mysqli_query($mysqli, $sql);
                                $cantidadFilas = mysqli_num_rows($result);
                                for($fila=0;$fila<$cantidadFilas;$fila++){
                                $valores = mysqli_fetch_assoc($result);
                                if($valores["idServicio"]==$idServicio){
                                    $calculoReservas=$valores["cantidadReservas"]-1;
                                    $sSQL=mysqli_query($mysqli,"UPDATE servicio SET cantidadReservas='$calculoReservas' WHERE idServicio='$idServicio'");
                                    $username=$_SESSION['username'];
                                    $servicioNombre=$valores["nombre"];
                                    $oferenteId=$valores["idUsuario"];
                                    $contactoOferente=$valores["descripcionContacto"];
                                    $imagenServicio=$valores["imagen"];
                                    $sSQLL=mysqli_query($mysqli,"INSERT INTO reserva (idUsuario, nombreServicio, idOferente, contactoOferente, imagenServicio) VALUES ('$username', '$servicioNombre', '$oferenteId', '$contactoOferente', '$imagenServicio')");
                                }
                                }
                                ?>
                                <script>alert('SE CONFIRMO SU RESERVA')</script>
                            <?php    
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- FOOTER -->
  <?php include 'NAV-FOOTER/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>