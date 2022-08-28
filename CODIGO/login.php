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
    <br>
    <section class="vh-90">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://i.ibb.co/mTnkR04/iniciar.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="validarLogIn.php" method="post">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Iniciar sesión con</p>
                  <button type="button" class="btn btn-success btn-floating mx-1">
                    <i class="fa-brands fa-facebook"></i>
                  </button>
      
                  <button type="button" class="btn btn-success btn-floating mx-1">
                    <i class="fa-brands fa-google"></i>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">O</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="Introduzca una direccion de Email valida" />
                  <label class="form-label" for="form3Example3">Dirección de Email</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Introduzca su contraseña" />
                  <label class="form-label" for="form3Example4">Contraseña</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Recuerdame
                    </label>
                  </div>
                  <a href="#!" class="text-body">Olvido su contraseña?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-success">INICIAR SESION</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">No tiene una cuenta? <a href="formularioRegistro.php"
                      class="link-light">Registrese</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div></div>
      </section>
        <!-- FOOTER -->
        <?php include 'NAV-FOOTER/footer.php';?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>