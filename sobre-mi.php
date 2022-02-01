<?php

$pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="icon" type="image/x-icon" href="../portfolio/images/laptop.svg">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
   <?php include_once "header.php"; ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 col-12 mt-5 ms-4 me-5 px-5">
                    <h1>Sobre mi</h1>
                    <p class="pb-sm-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>Aspernatur obcaecati
                        iste modi maxime
                        magni illo ea<br>incidunt tempora cupiditate!</p>
                    <a href="contacto.php" class="btn btn-rojo mb-4">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-5 offset-sm-2 ms-5">
                    <img src="./images/avatar.png" alt="avatar" class="avatar img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="stack-tecnologico">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="my-5 py-3 ps-10 stack" style="color: white;">Stack Tecnológico</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 pb-5 bg-white rounded">
                        <h3 style="font-size: 14px;">Javascript</h3>
                        <img src="./images/javascript.jpeg" alt="Javascript" style="width: 60px; height: 60px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bg-white rounded">
                        <h3 style="font-size: 14px;">PHP</h3>
                        <img src="./images/php.jpg" alt="PHP" style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bg-white rounded">
                        <h3 style="font-size: 14px;">HTML5</h3>
                        <img src="./images/html5.png" alt="HTML5" style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bg-white rounded">
                        <h3 style="font-size: 14px;">React.js</h3>
                        <img src="./images/reactjs.png" alt="React.js"
                            style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bg-white rounded">
                        <h3 style="font-size: 14px;">iQuery</h3>
                        <img src="./images/jquery.jpg" alt="iQuery"
                            style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 bg-white rounded">
                        <h3 style="font-size: 14px;">Bootstrap</h3>
                        <img src="./images/bootstrap.png" alt="Bootstrap"
                            style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">Laravel</h3>
                        <img src="./images/laravel.png" alt="Laravel"
                            style="width: 100px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">MySQL</h3>
                        <img src="./images/mysql.png" alt="MySQL" style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">CSS</h3>
                        <img src="./images/css.png" alt="CSS" style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">GIT</h3>
                        <img src="./images/git.png" alt="GIT" style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">Apache</h3>
                        <img src="./images/apache.png" alt="Apache"
                            style="width: 100px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
                <div class="col-6 col-sm-2 mb-5 text-center">
                    <div class="px-4 py-5 mx-0 mb-4 mb-sm-0 mt-sm-4 bg-white rounded">
                        <h3 style="font-size: 14px;">Mercadopago</h3>
                        <img src="./images/mercadopago.jpg" alt="Mercadopago"
                            style="width: 60px; height: 60px; margin-left: 5px;">
                    </div>
                </div>
            </div>
    </section>
    <section id="experiencia-laboral">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2 style="color: #370a6d;">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row bg-white">
                <div class="col-12 shadow">
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-2 px-4 py-5 mx-0 mb-4 mb-sm-0 d-none d-sm-block bg-white sepelios">
                            <img src="./images/sepelios.jpg" alt="Empresa de sepelios" class="sepelios">
                        </div>
                        <div class="col-10 col-2 pt-3 sepelios">
                            <h3>Empleado</h3>
                            <h4>Sepelios San Nicolás</h4>
                            <h5>Junio/2016 - presente</h5>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae quos deleniti aspernatur
                                itaque corporis eius est animi fugiat et ducimus accusamus, rem quia consequuntur. Harum
                                eveniet possimus eum ullam pariatur.<br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis odio atque commodi
                                iste nulla, ex pariatur nihil ea incidunt. Voluptatum qui provident ad? Facere autem in
                                voluptatum sequi. Quis, asperiores.</p>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-2 px-4 py-5 mx-0 mb-4 mb-sm-0 d-none d-sm-block bg-white proveeduria">
                            <img src="./images/proveeduria.png" alt="Proveeduria" class="proveeduria">
                        </div>
                        <div class="col-10 col-2 pt-3 proveeduria">
                            <h3>Empleado</h3>
                            <h4>Proveeduría Complejo Penitenciario Federal de
                                la C.A.B.A,</h4>
                            <h5>Marzo/2018 - Abril/2018</h5>
                            <p>Armado de pedidos, control de stock, depósito<br>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae quos deleniti aspernatur
                                itaque corporis eius est animi fugiat et ducimus accusamus, rem quia consequuntur. Harum
                                eveniet possimus eum ullam pariatur.</p>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-2 px-4 py-5 mx-0 mb-4 mb-sm-0 d-none d-sm-block bg-white locutorio">
                            <img src="./images/locutorio.png" alt="Locutorio" class="locutorio">
                        </div>
                        <div class="col-10 col-2 pt-3 locutorio">
                            <h3>Encargado</h3>
                            <h4>Locutorio Boyacá</h4>
                            <h5>Marzo/2014 - Noviembre/2015</h5>
                            <p>Atención al cliente, administración, ventas<br>Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Quasi, rem sequi, eaque quis a cum consequatur esse reprehenderit modi
                                reiciendis quo minus est praesentium temporibus distinctio excepturi laborum quos
                                recusandae?</p>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-2 px-4 py-5 mx-0 mb-4 mb-sm-0 d-none d-sm-block bg-white agencia">
                            <img src="./images/loteria.png" alt="Loterias de la Ciudad" class="agencia">
                        </div>
                        <div class="col-10 col-2 pt-3 agencia">
                            <h3>Empleado</h3>
                            <h4>Agencia de Quiniela "512"</h4>
                            <h5>Marzo/2010 - Septiembre/2013</h5>
                            <p>Atención al cliente, administración, ventas<br>Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Quae quos deleniti aspernatur itaque corporis eius est animi fugiat et
                                ducimus accusamus, rem quia consequuntur. Harum eveniet possimus eum ullam pariatur.</p>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </section>
    <section id="formacion-academica">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2 style="color: #E20000;">Formación académica</h2>
                </div>
            </div>
            <div class="row bg-white">
                <div class="col-12 pt-3 shadow">
                    <div class="my-4 formacion">
                        <img src="./images/sin-logo.png" alt="Colegio"
                            style="float: left; width: 70px; height: 70px; margin-right: 20px;" class="formacion">
                        <h3>Bachiller</h3>
                        <h4>Instituto Guillermo Rawson</h4>
                        <h5>2008</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="desarrollo-profesional">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2 style="color: #E20000;">Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row bg-white mb-4">
                <div class="col-6 pt-3 shadow">
                    <div class="my-4 curso">
                        <img src="./images/curso.jpg" alt="depcsuite"
                            style="float: left; width: 70px; height: 70px; margin-right: 20px;" class="curso">
                        <h3>Programación Web Full Stack</h3>
                        <h4>DePCsuite</h4>
                        <h5>En curso</h5>
                    </div>
                </div>
                <div class="col-6 pt-3 shadow">
                    <div class="my-4 ingles">
                        <img src="./images/sin-logo.png" alt="Inglés"
                            style="float: left; width: 70px; height: 70px; margin-right: 20px;">
                        <h3>Instituto de Idiomas</h3>
                        <h4>Escuela Nº 12 D.E. 07 "Facundo Zuviría"</h4>
                        <h5>2001 - 2006</h5>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="idiomas-hobbies">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-12 text-center">
                    <div class="px-4 pb-4 my-5 ps-0 bg-white rounded shadow">
                        <img src="./images/idiomas.jpg" alt="Idiomas"
                            style="float: left; width: 180px; height: 180px; border-radius: 5px;">
                        <h2 style="font-size: 16px; text-align: center; padding-top: 50px; margin-left: 32px;">IDIOMAS
                        </h2>
                        <ul style="font-size: 14px; text-align: center; list-style-type: none">
                            <li>ESPAÑOL - Nativo</li>
                            <li>INGLES - Avanzado</li>
                            <li>(Certificado)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-12 text-center">
                    <div class="px-4 pb-4 my-5 ps-0 bg-white rounded shadow">
                        <img src="./images/hobbies.jpg" alt="Hobbies"
                            style="float: left; width: 180px; height: 180px; border-radius: 5px;">
                        <h2 style="font-size: 16px; text-align: center; padding-top: 50px; margin-left: 32px;">HOBBIES
                        </h2>
                        <ul style="font-size: 14px; text-align: center; list-style-type: none">
                            <li>Música</li>
                            <li>Literatura</li>
                            <li>Cine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class=" container mt-5">
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
    </main>
</body>
<script src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>