<?php

$pg ="proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="icon" type="image/x-icon" href="../portfolio/images/laptop.svg">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
   <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 pb-4">
                <p>Los siguientes son algunos de los trabajos que vemos en clase:</p>
            </div>
            <div class="row">
                <div class="col-sm-4 proyecto">
                    <div class="m-1 border bg-white">
                        <img src="../portfolio/images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                        <div>
                            <h3 class="ps-2 py-2">ABM CLIENTES</h3>
                        </div>
                        <div class="ps-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officia labore corporis
                                quo eligendi</p>
                        </div>
                        <div class="row pb-5">
                            <div class="col-6 ps-0 ps-4">
                                <a href="" class="btn btn-rojo">Ver Online</a>
                            </div>
                            <div class="col-6 ps-0 text-center">
                                <a href="https://github.com" class="btn-link">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 proyecto">
                    <div class="m-1 border bg-white">
                        <img src="../portfolio/images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                        <div>
                            <h3 class="ps-2 py-2">ABM VENTAS</h3>
                        </div>
                        <div class="ps-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officia labore corporis
                                quo eligendi</p>
                        </div>
                        <div class="row pb-5">
                            <div class="col-6 ps-0 ps-4">
                                <a href="" class="btn btn-rojo">Ver Online</a>
                            </div>
                            <div class="col-6">
                                <a href="https://github.com" class="btn-link">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 proyecto">
                    <div class="m-1 border bg-white">
                        <img src="../portfolio/images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                        <div>
                            <h3 class="ps-2 py-2">PROYECTO INTEGRADOR</h3>
                        </div>
                        <div class="ps-2">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officia labore corporis
                                quo eligendi</p>
                        </div>
                        <div class="row pb-5">
                            <div class="col-6 ps-0 ps-4">
                                <a href="" class="btn btn-rojo">Ver Online</a>
                            </div>
                            <div class="col-6 ps-0 text-center">
                                <a href="https://github.com" class="btn-link">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start">Sponsor <a href="https://depcsuite.com/"
                    target="_blank">DePC Suit</a></div>
            <div class="col-12 col-sm-3 text-center text-sm-start"><a
                    href="to:moscatachado@hotmail.com">moscatachado@hotmail.com</a></div>
        </div>
        <div class="bloque-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541151163867"><i class="fab fa-whatsapp pb-4 pt-3 px-3"></i>
            </a>
        </div>
    </footer>

</body>
<script src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>