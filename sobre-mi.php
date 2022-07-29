<?php
$pg = "sobre-mi";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobre-mi</title>
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../Portfolio/images/icono.png">
</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once("header.php"); ?>
    </header>

    <main>
        <section class="container" id="personal">
            <div class="row">
                <div class="col-sm-5 col-12 mt-5">
                    <h1 class="mb-3">
                        Sobre mí
                    </h1>
                    <p class="parrafo">Me considero una persona muy amigable, responsable y por sobre todo
                        respetuosa.Soy técnico
                        universitario en instrumentación quirúrgica,empezando por el camino de la programación.</p>

                    <a href="contacto.html" class="btn btn-rojo mt-3 mb-3">Enviar mensaje</a>
                </div>

                <div class="col-sm-3 col-12 offset-sm-2 mt-5 mx-auto text-center">
                    <img src="../Portfolio/images/foto.webp" alt="Ayrton Nicolas Acevedo" title="Ayrton Nicolas Acevedo" class="foto img-fluid">
                </div>

            </div>
        </section>
        <section id="Stack">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-12 mt-4 mb-5">
                        <h2>Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Javascript</h3>
                            <img src="../Portfolio/images/javascript.jpeg" alt="Javascript">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>PHP</h3>
                            <img src="../Portfolio/images/php.jpg" alt="PHP">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>HTML5</h3>
                            <img src="../Portfolio/images/html5.png" alt="HTML5">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>React.js</h3>
                            <img src="../Portfolio/images/react.png" alt="React.js">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>jQuery</h3>
                            <img src="../Portfolio/images/jquery.jpg" alt="jQuery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Bootstrap</h3>
                            <img src="../Portfolio/images/bootstrap.png" alt="Bootstrap">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Laravel</h3>
                            <img src="../Portfolio/images/220px-Laravel.svg_.png" alt="Laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>MySQL</h3>
                            <img src="../Portfolio/images/mysql.png" alt="MySQL">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>CSS</h3>
                            <img src="../Portfolio/images/css.png" alt="CSS">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Git</h3>
                            <img src="../Portfolio/images/git.png" alt="Git">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Apache</h3>
                            <img src="../Portfolio/images/apache.png" alt="Apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologias pt-5 mb-4">
                            <h3>Mercadopago</h3>
                            <img src="../Portfolio/images/mercado pago.jpg" alt="Mercadopago">
                        </div>
                    </div>
                </div>
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4 mt-3">
                        <h2>
                            <i class="fa-solid fa-briefcase"> Experiencia Laboral</i>
                        </h2>
                    </div>
                </div>
                <div class="row shadow bg-white rounded">
                    <div class="col-6 col-sm-3 d-none d-sm-block">
                        <div class="logos mt-3 ">
                            <img src="../Portfolio/images/fitness group.png" alt="Fitness group">
                        </div>
                    </div>
                    <div class="col-12 col-sm-9">
                        <div class="trabajo">
                            <h3>Vendedor-recepcionista</h3>
                            <h4>Fitness Group</h4>
                            <h5>Jun 2021-Dic 2021</h5>
                            <p>Encargado de abrir y cerrar el local, tomar asistencias a las personas que iban a
                                entrenar y controlar su correcta inscripción, ademas de atender a las visitas e informar
                                sobre los diferentes planes y luego realizar un correcto seguimiento.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 d-none d-sm-block">
                        <div class="logos mt-3">
                            <img src="../Portfolio/images/sanatorio allende.png" alt="Sanatorio Allende">
                        </div>
                    </div>
                    <div class="col-12 col-sm-9">
                        <div class="trabajo">
                            <h3>Instrumentador Quirúrgico</h3>
                            <h4>Sanatorio Allende</h4>
                            <h5>Dic 2021-Abr 2022</h5>
                            <p>En la central de esterilización se realiza el lavado, control, empaquetado, lubricado y
                                esterilizacion del material de cirugía a traves de los siguientes metodos de
                                esterilización: autoclave, óxido de etileno y plasma. Ádemas de todos los demas sectores
                                que necesitan del servicio diaramente.</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 d-none d-sm-block">
                        <div class="logos mt-3">
                            <img src="../Portfolio/images/cerebro 2.png" alt="Gest-Sal SRL">
                        </div>
                    </div>
                    <div class="col-12 col-sm-9">
                        <div class="trabajo">
                            <h3>Instrumentador Quirúrgico</h3>
                            <h4>Gest-Sal SRL</h4>
                            <h5>May 2022-Actualmente</h5>
                            <p>La empresa se encarga de prestar servivios a distintos hospitales, clinicas y sanatorios
                                en donde se especializa en neurocirugia con las siguientes técnicas: monitoreo
                                intraoperatorio, endoscopias cerebrales, base de craneo, navegación, tratamiento de
                                Parkinson, etc. Ádemas tambien se realizan cirugias Maxilo-faciales y cabeza y cuello.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formación">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4 mt-3">
                        <h2>
                            <i class="fa-solid fa-graduation-cap"> Formacion Academica</i>
                        </h2>
                    </div>
                </div>
                <div class="row shadow bg-white rounded">
                    <div class="col-6 col-sm-2 d-none d-sm-block">
                        <div class="logos mt-3">
                            <img src="../Portfolio/images/logo-ucc-2018.svg" alt="Universidad Católica de Córdoba">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="estudios">
                            <h3>Técnico universitario en instrumentación quirúrgica</h3>
                            <h4>Universidad católica de Córdoba</h4>
                            <h5>2014-2018</h5>
                            <p>https://www.ucc.edu.ar/</p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 d-none d-sm-block">
                        <div class="logos mt-3">
                            <img src="../Portfolio/images/colbert.png" alt="Instituto Colbert">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="estudios">
                            <h3>Biotecnología</h3>
                            <h4>Instituto Colbert</h4>
                            <h5>2017-2019</h5>
                            <p>Cursado 2 años de 3
                                https://institutocolbert.net/
                            </p>
                        </div>
                    </div>
                    <div class="col-6 col-sm-2 mt-3 d-none d-sm-block">
                        <div class="logos mt-3">
                            <img src="../Portfolio/images/depc.svg" alt="DepcSuite">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mt-3">
                        <div class="estudios">
                            <h3>Programación web full stack</h3>
                            <h4>DepcSuite</h4>
                            <h5>2022-Actualmente</h5>
                            <p>https://depcsuite.com/?v=d72a48a8ebd2</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="varios">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-sm-6 pb-4">
                        <div class="row shadow bg-white caja">
                            <div class="col-4 logos text-center">
                                <i class="fa-solid fa-language"></i>
                            </div>

                            <div class="col-8 p-4">
                                <div class="idioma">
                                    <h2>Idiomas</h2>
                                    <ul>
                                        <li>Español-nativo</li>
                                        <li>Ingles- B1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="row shadow bg-white caja">
                            <div class="col-4 logos text-center">
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="col-8 p-4">
                                <div class="hobbie">
                                    <h2>Hobbies</h2>
                                    <ul>
                                        <li>Salir a andar en bici</li>
                                        <li>Leer libros de misterios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <footer class="container mt-auto pb-2">
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=543512131135" target="_blank" title="Whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/Ayrton-33" target="_blank" title="https://github.com/"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/ayrton-acevedo-ba5244163/" target="_blank" title="https://www.linkedin.com/in/ayrton-acevedo-ba5244163/"><i class="fab fa-linkedin-in"></i></a>

            </div>
            <div class="col-12 col-sm-3">
                Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" title="DepcSuite">DepcSuite</a>
            </div>
            <div class="col-12 col-sm-3">
                <a href="mailto:ayrton.94acevedo@gmail.com" target="_blank" title="ayrton.94acevedo@gmail.com">ayrton.94acevedo@gmail.com</a>
            </div>

        </div>

    </footer>
</body>

</html>