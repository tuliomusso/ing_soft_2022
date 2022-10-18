<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-success">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">ServiEmpresa</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarColor02">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">
                                    Principal
                                    <span class="visually-hidden">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notificaciones</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php
                                session_start();
                                if (isset($_SESSION['username'])) {
                                      $email= $_SESSION['username'];
                                    echo $email;
                                    }else{
                                    echo "SESION NO INICIADA";
                                  }
                                ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="perfilUsuario.php">Perfil</a>
                                    <a class="dropdown-item" href="serviciosContratados.php">Servicios Contratados</a>
                                    <a class="dropdown-item" href="#">Servicios Ofrecidos</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.php" title="login">Iniciar Sesion</a>
                                    <a class="dropdown-item" href="logout.php" title="login">Cerrar Sesion</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>