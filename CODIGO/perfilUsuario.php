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
                <div class="col-md-5">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://i.ibb.co/ryGFw2c/LOGO-PERFIL.png" width="150" height="150" alt="imagen error" /> </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="product p-4">
                                <h5 class="text"><u><?php echo $valores["email"]?></u></h5>
                                <h8 class="text"><u>NOMBRE Y APELLIDO:</u>&nbsp;<b><?php echo $valores["nombreApellido"]?></b></h8>
                                <br>
                                <h8 class="text"><u>DOMICILIO:</u>&nbsp;<b><?php echo $valores["domicilio"]?></b></h8>
                                <br>
                                <h8 class="text"><u>TELEFONO:</u>&nbsp;<b><?php echo $valores["telefono"]?></b></h8>
                                <br>
                                <h8 class="text"><u>DNI:</u>&nbsp;<b><?php echo $valores["dni"]?></b></h8>
                                <br>
                                <h8 class="text"><u>CALIFICACION COMO OFERENTE:<b></u>&nbsp;<?php
                                if($valores["cantOperacionesOferente"]!=0){
                                    echo $valores["calificacionComoOferente"]; echo "/10";
                                }
                                else {
                                    echo "SIN OPERACIONES CONFIRMADAS";
                                }
                                ?></b></h8>
                                <br>
                                <h8 class="text"><u>CALIFICACION COMO SOLICITANTE:<b></u>&nbsp;<?php
                                if($valores["cantOperacionesSolicitante"]!=0){
                                    echo $valores["calificacionComoSolicitante"];; echo "/10";
                                }
                                else {
                                    echo "SIN OPERACIONES CONFIRMADAS";
                                }
                                ?></b></h8>
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