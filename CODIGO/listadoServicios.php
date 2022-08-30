<!DOCTYPE html>
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
  <div class="container">
        <div class="container">
            <div class="row mt-5">
              <?php $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
                    $sql = "SELECT * FROM categoria";        
                    $result = mysqli_query($mysqli, $sql);
                    $cantidadFilas = mysqli_num_rows($result);
                    for($fila=0;$fila<4;$fila++){
              ?>
                <div class="col-3">
                    <div class="card" style="width: 17rem;">
                        <img class="card-img-top" src="https://i.ibb.co/cCdWX4S/Servicios-generica.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">
                            <?php
                                 $valores = mysqli_fetch_assoc($result);
                                  echo $valores["nombre"];
                            ?>
                          </h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-success"><i class="fas fa-link"></i> VER SERVICIO</a>
                        </div>
                      </div>
                </div>
              <?php
                    }
              ?>
            </div>
        </div>
    </div>
     <!-- FOOTER -->
  <?php include 'NAV-FOOTER/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>