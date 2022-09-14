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
  <form action= "serviciosFiltrados.php" method="POST">
  <label for="idCategoria">Categoría</label>
   <select name="filtroCategoria" id="filtroCategoria">
                  <option value="0">Selecciona:</option>
                  <?php
                  //consulta de categorias
                  $query = $mysqli -> query ("SELECT * FROM categoria");
                  while ($valores = mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                  }
                  ?>
                  </select>
    <button type="submit">FILTRAR</button>
  </form>
  <?php
    $filtroCategoria= $_POST['filtroCategoria'];
  ?>
  </form>
  <div class="container">
        <div class="container">
            <div class="row mt-5">
              <?php $mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
                    $sql = "SELECT * FROM servicio";        
                    $result = mysqli_query($mysqli, $sql);
                    $cantidadFilas = mysqli_num_rows($result);
                    for($fila=0;$fila<$cantidadFilas;$fila++){
                    $valores = mysqli_fetch_assoc($result);
                    if($valores["idCategoria"]==$filtroCategoria){
                    
              ?>
                <div class="col-3">
                    <div class="card" style="width: 17rem;">
                    <img src="data:image/png;base64,<?php echo base64_encode($valores['imagen'])?>" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">
                            <?php

                                  echo $valores["nombre"];
                            ?>
                          </h5>

                          <a href="publicacionServicio.php" class="btn btn-success"><i class="fas fa-link"></i> VER SERVICIO</a>
                        </div>
                      </div>
                </div>
              <?php
                    }
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