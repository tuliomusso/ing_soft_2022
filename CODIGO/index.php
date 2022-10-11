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
    <?php
    $consultaFechaHora = new DateTime("now", new DateTimeZone('America/Argentina/Buenos_Aires'));
    $fechaHoraActual=new DateTime("now", new DateTimeZone('America/Argentina/Buenos_Aires'));
    $fechaHoraAnterior = $consultaFechaHora->modify('-1 day');
    echo $fechaHoraAnterior->format('d-m-Y H:i');

    if($fechaHoraAnterior!=$fechaHoraActual){
        echo "hola";
    }
    ?>
       <!-- NAVBAR -->
       <?php include 'NAV-FOOTER/navbar.php';?>
     <!-- Slider -->
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.ibb.co/VLFmDb3/ej-slider.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="container">
        <div class="d-grid gap-2">
            <a type="button" href="listadoServicios.php" class="btn btn-success btn-lg btn-block">SOLICITAR SERVICIOS</a button>
            <a type="button" href="formularioServicio.php" class="btn btn-success btn-lg btn-block">OFRECER SERVICIOS</a button>
        </div>
    </div>
        <!-- FOOTER -->
        <?php include 'NAV-FOOTER/footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>