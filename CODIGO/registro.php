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
<?php include 'NAV-FOOTER/navbar.php';?>
    <form id="formulario" method="POST">
        <div class="container-fluid bg-dark">
            <div class="container">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required><p>
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required><p>
                  </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label>
                      <input type="nombre" class="form-control" id="nombreApellido" name="nombreApellido" required><p>
                    </div>
                    <div class="mb-3">
                        <label for="example" class="form-label">Domicilio</label>
                        <input type="nombre" class="form-control" id="domicilio" name="domicilio" required><p>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Localidad</label>
                        <input type="nombre" class="form-control" id="nombreLocalidad" name="nombreLocalidad" required><p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Codigo Postal</label>
                        <input type="nombre" class="form-control" id="codigoPostal" name="codigoPostal" required><p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Provincia</label>
                        <input type="nombre" class="form-control" id="nombreProvincia" name="nombreProvincia" required><p>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefono</label>
                        <input type="nombre" class="form-control" id="telefono" name="telefono" required><p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DNI</label>
                        <input type="nombre" class="form-control" id="dni" name="dni" required><p>
                    </div>
                    <button type="submit" class="btn btn-success">REGISTRARSE</button>
                  </form>
            </div>
    </div>
    </form>
    <!-- FOOTER -->
    <?php include 'NAV-FOOTER/footer.php';?>
  <script src="app.js"></script>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>