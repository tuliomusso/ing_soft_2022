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
    <!-- NAVBAR -->
  <?php include 'NAV-FOOTER/navbar.php';
  ?>
   <br>
   <div class="container">
        <div class="d-grid gap-2">
            <type="button" class="btn btn-info btn-lg btn-block">MIS SERVICIOS OFRECIDOS</type= button>
        </div>
    </div>
   <?php
   $sql = "SELECT * FROM reserva";        
   $result = mysqli_query($mysqli, $sql);
   $cantidadFilas = mysqli_num_rows($result);
   for($fila=0;$fila<$cantidadFilas;$fila++){
   $valores = mysqli_fetch_assoc($result);
   if($valores["idOferente"]==$_SESSION['username']){
    $idSolicitante= $valores["idUsuario"];
    $nombreServicio=$valores["nombreServicio"];
    $ssql = "SELECT * FROM usuario WHERE email='$idSolicitante'"; 
    $result2 = mysqli_query($mysqli, $ssql);  
    $valores2 = mysqli_fetch_assoc($result2);
    $nombreApellidoSolicitante= $valores2["nombreApellido"];
    $telefonoSolicitante= $valores2["telefono"];
   ?>
    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo $valores["imagenServicio"]; ?>" width="150" height="150" alt="imagen error" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                                <h5 class="text-uppercase"><?php echo $valores["nombreServicio"]?></h5>
                                <h8 class="text">SOLICITADO POR: <u><?php echo $valores["idUsuario"]?></u></h8 >
                                <br>
                                <h8 class="text">NOMBRE Y APELLIDO DEL SOLICITANTE: <?php echo $nombreApellidoSolicitante?></h8 >
                                <br>
                                <h8 class="text">TELEFONO SOLICITANTE: <?php echo $telefonoSolicitante?></h8 >
                                <br>
                                <br>
                                <?php
                                if($valores['nombreServicio']==$nombreServicio && $valores["estadoCalificacionOferente"]==0){
                                ?>
                                <form action="confirmarCalificacionSolicitante.php?idSolicitante=<?php echo $idSolicitante;?>
                                &nombreServicio=<?php echo $nombreServicio;?>" method="POST">
                                <label>CALIFICAR SOLICITANTE:</label>
                                <select name="selectCalificacionParaSolicitante" id="selectCalificacionParaSolicitante">
                                <option value="">Selecciona:</option>
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                                </select>
                                <button type="submit">CALIFICAR</button>
                                </form>
                                <?php
                                }
                                else{
                                    echo "CALIFICACION YA REGISTRADA";
                                }
                                ?>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php
   }
   }
   ?>
    

  <!-- FOOTER -->
  <?php include 'NAV-FOOTER/footer.php';?>
  <script src="scriptFiltro.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>