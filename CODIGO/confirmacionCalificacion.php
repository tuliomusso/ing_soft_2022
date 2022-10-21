
<?php
$idOferente = $_GET['idOferente'];
$nombreServicio = $_GET['nombreServicio'];
$mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
$sqlEstadoCalificacion = "SELECT * FROM reserva WHERE idOferente='$idOferente'";        
$resultEstado = mysqli_query($mysqli, $sqlEstadoCalificacion);
$valoresEstado = mysqli_fetch_assoc($resultEstado);

    $calificacionOtorgadaPorSolicitante= $_POST['selectCalificacionParaOferente'];
    $sql = "SELECT * FROM usuario WHERE email='$idOferente'";        
    $result = mysqli_query($mysqli, $sql);
    $valores = mysqli_fetch_assoc($result);
    $cantOperacionesOferente=$valores["cantOperacionesOferente"]+1;
    $sumatoriaCalificacionesOferente=$valores["sumaCalificacionOferente"]+$calificacionOtorgadaPorSolicitante;
    $CalificacionComoOferente= $sumatoriaCalificacionesOferente/$cantOperacionesOferente;
    $ActualizarCalificacionOferente=mysqli_query($mysqli,"UPDATE usuario SET calificacionComoOferente='$CalificacionComoOferente' WHERE email='$idOferente'");
    $ActualizarOperacionesOferente=mysqli_query($mysqli,"UPDATE usuario SET cantOperacionesOferente='$cantOperacionesOferente' WHERE email='$idOferente'");
    $ActualizarEstadoCalificacionSolicitante=mysqli_query($mysqli,"UPDATE reserva SET estadoCalificacionSolicitante='1' WHERE idOferente='$idOferente' AND nombreServicio='$nombreServicio'");
    $ActualizarSumaCalificacionOferente=mysqli_query($mysqli,"UPDATE usuario SET sumaCalificacionOferente='$sumatoriaCalificacionesOferente' WHERE email='$idOferente'");

    
    

?>
<script>
alert('CALIFICACION REGISTRADA CON EXITO');
window.location="http://localhost/DESARROLLO%20TPI/CODIGO/serviciosContratados.php";
</script>