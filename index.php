<?php

$pg = "index";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="../portfolio/images/laptop.svg">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center div-cohete">
                <img src="images/cohete.svg" alt="Cohete" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 text-center offset-sm-3 mb-5 mt-5">
                <div class="input-home">
                    <p class="pt-1 mb-1">Bienvenidos/as a mi portfolio</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.php" class="btn-blanco px-4 py-2 shadow">Conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>
<script src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>