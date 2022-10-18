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
            <type="button" class="btn btn-info btn-lg btn-block">MI PERFIL</type= button>
        </div>
    </div>

    <?php
   $UsuarioLogueado=$_SESSION['username'];
   $sql = "SELECT * FROM usuario WHERE email='$UsuarioLogueado'";        
   $result = mysqli_query($mysqli, $sql);
   $cantidadFilas = mysqli_num_rows($result);
   $valores = mysqli_fetch_assoc($result);
   ?>
    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product p-4">
                                <h5 class="text"><u><?php echo $valores["email"]?></u></h5>
                                <h8 class="text">NOMBRE Y APELLIDO: <?php echo $valores["nombreApellido"]?></h8>
                                <br>
                                <h8 class="text">DOMICILIO: <?php echo $valores["domicilio"]?></h8>
                                <br>
                                <h8 class="text">TELEFONO: <?php echo $valores["telefono"]?></h8>
                                <br>
                                <h8 class="text">DNI: <?php echo $valores["dni"]?></h8>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- FOOTER -->
  <?php include 'NAV-FOOTER/footer.php';?>
  <script src="scriptFiltro.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>