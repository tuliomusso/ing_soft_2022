
<?php
$idSolicitante = $_GET['idSolicitante'];
$nombreServicio = $_GET['nombreServicio'];
$mysqli = new mysqli('localhost', 'root', '', 'serviempresa');
$sqlEstadoCalificacion = "SELECT * FROM reserva WHERE idUsuario='$idSolicitante'";        
$resultEstado = mysqli_query($mysqli, $sqlEstadoCalificacion);
$valoresEstado = mysqli_fetch_assoc($resultEstado);

    $calificacionOtorgadaPorOferente= $_POST['selectCalificacionParaSolicitante'];
    $sql = "SELECT * FROM usuario WHERE email='$idSolicitante'";        
    $result = mysqli_query($mysqli, $sql);
    $valores = mysqli_fetch_assoc($result);
    $cantOperacionesSolicitante=$valores["cantOperacionesSolicitante"]+1;
    $sumatoriaCalificacionesSolicitante=$valores["sumaCalificacionSolicitante"]+$calificacionOtorgadaPorOferente;
    $CalificacionComoSolicitante= $sumatoriaCalificacionesSolicitante/$cantOperacionesSolicitante;
    $ActualizarCalificacionSolicitante=mysqli_query($mysqli,"UPDATE usuario SET calificacionComoSolicitante='$CalificacionComoSolicitante' WHERE email='$idSolicitante'");
    $ActualizarOperacionesSolicitante=mysqli_query($mysqli,"UPDATE usuario SET cantOperacionesSolicitante='$cantOperacionesSolicitante' WHERE email='$idSolicitante'");
    $ActualizarEstadoCalificacionOferente=mysqli_query($mysqli,"UPDATE reserva SET estadoCalificacionOferente='1' WHERE idUsuario='$idSolicitante' AND nombreServicio='$nombreServicio'");
    $ActualizarSumaCalificacionSolicitante=mysqli_query($mysqli,"UPDATE usuario SET sumaCalificacionSolicitante='$sumatoriaCalificacionesSolicitante' WHERE email='$idSolicitante'");

    

?>
<script>
alert('CALIFICACION REGISTRADA CON EXITO');
window.location="http://localhost/DESARROLLO%20TPI/CODIGO/serviciosOfrecidos.php";
</script>