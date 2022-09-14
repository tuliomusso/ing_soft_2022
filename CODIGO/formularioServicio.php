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
     <?php include 'NAV-FOOTER/navbar.php';?>
     <br>
    <div class="container">
        <div class="d-grid gap-2">
            <type="button" class="btn btn-info btn-lg btn-block">EMPECEMOS A DESCRIBIR TU SERVICIO</type= button>
        </div>
    </div>
    <div class="container my-5">
    <form id="formularioServicio" method="POST">
        <div class="container-fluid bg-dark">
            <div class="container">
                <form>
                  <label for="idCategoria">Categoría</label>
                  <select name="idCategoria" id="idCategoria">
                  <option value="0">Selecciona:</option>
                  <?php
                  //consulta de categorias
                  $query = $mysqli -> query ("SELECT * FROM categoria");
                  while ($valores = mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                  }
                  ?>
                  </select>
                  <br>
                  <div class="mb-3">
                  <br>
                    <label for="exampleInputPassword1" class="form-label">Nombre del servicio</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required><p>
                  </div>
                  <div class="form-group">
				       		  <span>Ingrese una foto de portada para el servicio</span>
						         <input type="file" id="imagen" name="imagen" class="form-control"required><p>
					        </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cantidad de reservas disponibles</label>
                    <input type="text" class="form-control" id="cantidadReservas" name="cantidadReservas" required><p>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Describa su servicio y medios de contacto</label>
                    <textarea class="form-control" id="descripcionContacto" name="descripcionContacto" rows="5"></textarea required><p>
                 </div>
                    <button type="submit" class="btn btn-success">CONFIRMAR</button>
                    <a type="button" href="index.php" class="btn btn-success">CANCELAR</a button>
                  </form>
            </div>
    </div>
    </form>
    </div>
      <!-- FOOTER -->
      <?php include 'NAV-FOOTER/footer.php';?>
      <script src="ofrecerServicios.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>