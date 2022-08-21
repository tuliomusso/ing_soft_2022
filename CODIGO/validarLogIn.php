<?php
session_start();
$conexion=mysqli_connect("localhost","root","","serviempresa");
$email = $_POST['email'];
$password = $_POST['password'];

$consulta="SELECT*FROM usuario where email='$email' and password='$password'";
 $resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['username'] = $email;
    header("location:home.php");

}else{
    include("login.php");
    ?>
echo '<script>alert("ERROR DE AUTENTIFICACION")</script>';
    <?php
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);