<?php

$pg = "contacto";

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    $para = "moscatachado@hotmail.com";
    $titulo = "Recibiste un mensaje desde tu Web";
    $cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
Teléfono: $telefono <br>
Mensaje: $mensaje
";
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'To: moscatachado@hotmail.com' . "\r\n";
    $cabeceras .= 'From: contacto@matias.com.ar' . "\r\n";

    mail($para, $titulo, $cuerpo, $cabeceras);
    header("Location: confirmacion-envio.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" type="image/x-icon" href="../portfolio/images/laptop.svg">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto">
    <?php include_once "header.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por Whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui el mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3 float-start">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-blanco px-4 py-2">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include_once "footer.php"; ?>

</body>
<script src="./css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>