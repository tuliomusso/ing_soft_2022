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
   <label for="idMedioPago">Medio de pago</label>
   <select name="medioPago" id="medioPago">
                  <option value="0">Selecciona:</option>
                  <?php
                  //consulta de categorias
                  $query = $mysqli -> query ("SELECT * FROM categoria");
                  while ($valores = mysqli_fetch_array($query)){
                    echo '<option value="'.$valores['nombre'].'">'.$valores['nombre'].'</option>';
                  }
                  ?>
                  </select>
     <!-- FOOTER -->
  <?php include 'NAV-FOOTER/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>