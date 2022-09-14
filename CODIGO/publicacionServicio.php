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
  <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="https://i.imgur.com/Dhebu4F.jpg" width="250" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">CATEGORIA(BD)</span>
                                <h5 class="text-uppercase">NOMBRE SERVICIO</h5>
                            </div>
                            <p class="about">DESCRIPCION DEL SERVICIO Y MEDIOS DE CONTACTO</p>
                            <a type="button" href="" class="btn btn-success">CONFIRMAR SERVICIO</a button>
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