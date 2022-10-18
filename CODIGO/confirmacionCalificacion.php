<script>
alert('CALIFICACION REGISTRADA CON EXITO');
</script>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
$calificacionOtorgadaPorSolicitante= $_POST['selectCalificacionParaOferente'];
$idOferente = $_GET['idOferente'];
$sql = "SELECT * FROM usuario WHERE email='$idOferente'";        
$result = mysqli_query($mysqli, $sql);
$valores = mysqli_fetch_assoc($result);
$cantOperacionesOferente=$valores["cantOperacionesOferente"]+1;
$sumatoriaCalificacionesOferente=$valores["calificacionComoOferente"]+$calificacionOtorgadaPorSolicitante;
$CalificacionComoOferente= $sumatoriaCalificacionesOferente/$cantOperacionesOferente;
$ActualizarCalificacionOferente=mysqli_query($mysqli,"UPDATE usuario SET calificacionComoOferente='$CalificacionComoOferente' WHERE email='$idOferente'");
$ActualizarOperacionesOferente=mysqli_query($mysqli,"UPDATE usuario SET cantOperacionesOferente='$cantOperacionesOferente' WHERE email='$idOferente'");

?>