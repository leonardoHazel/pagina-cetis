<?php
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CETIS 43</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="assets/logo.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt="Logo" style="width:40px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Especialidades</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="programacion.php">Programacion</a>
                        <a class="dropdown-item" href="medico_clinico.php">Medico clinico</a>
                        <a class="dropdown-item" href="contabilidad.php">Contabilidad</a>
                        <a class="dropdown-item" href="comunicaciones.php">Comunicaciones</a>
                        <a class="dropdown-item" href="construccion.php">Construcion</a>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tramites.php">tramites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informacion.php">informacion</a>
                </li>
                <?php   session_start();
if(isset($_SESSION["newsession"])==true){
if($_SESSION["newsession"]==true){?>
                <li class="nav-item">
                    <a class="nav-link" href="sub_pub.php">agregar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="salir.php">salir</a>
                </li>
                <?php    }
    else {            
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="sesion.php">iniciar sesion</a>
                </li>
                <?php   } }  else {         
                ?><li class="nav-item">
                    <a class="nav-link" href="sesion.php">iniciar sesion</a>
                </li>
                <?php   }?>
            </ul>
        </div>
    </nav>

    <?php
?>
