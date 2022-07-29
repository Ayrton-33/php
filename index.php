<?php 
$pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../Portfolio/images/icono.png">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once ("header.php"); ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center espacial">
                <a href="proyectos.html">
                    <img src="images/cohete.svg" class="cohete">
                </a>

            </div>

            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-3">
                    <p class="py-2 px-3 mt-3">Bienvenid@ a mi sitio web sobre desarrollo de sistemas</p>
                </div>
            </div>

            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn shadow my-3">Conoce mis proyectos</a>
            </div>

        </div>



    </main>

    <footer class="container mt-auto pb-2 pt-3">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=543512131135" target="_blank" title="Whatsapp"><i
                    class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/Ayrton-33" target="_blank" title="https://github.com/"><i
                        class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/ayrton-acevedo-ba5244163/" target="_blank"
                    title="https://www.linkedin.com/in/ayrton-acevedo-ba5244163/"><i class="fab fa-linkedin-in"></i></a>

            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" title="DepcSuite">DepcSuite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:ayrton.94acevedo@gmail.com" target="_blank"
                    title="ayrton.94acevedo@gmail.com">ayrton.94acevedo@gmail.com</a>
            </div>

        </div>

    </footer>
</body>

</html>