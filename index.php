<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "curriculum";

    $conn = mysqli_connect($host, $user, $pass, $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michael Eduardo Sandoval Pérez</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free-6.2.1-web/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/uikit-3.16.14/css/uikit.min.css">
    <!-- General -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <header class="header border">
        <nav class="navegacion border">
            <div class="container-fluid border">
                <div class="row border">
                    <div class="col-md-6 border">
                        <div class="row border">
                            <div class="col-md-4 border">
                                Yo
                            </div>
                            <div class="col-md-4 border">
                                Proyectos
                            </div>
                            <div class="col-md-4 border">
                                Sobre mi
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border">
                        <div class="row border">
                            <div class="col border">
                                redes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    

    <main class="principal border">
        <div class="container border">
            <div class="row border">
                <div class="col-md-9 mx-auto border">
                    <div class="row border">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center border">
                            <img src="img/yo2.jpg" class="img-fluid rounded-circle" alt="Mi foto">
                        </div>
                        <div class="col-md-9 border">
                            <div class="row">
                                <div class="col">
                                    <p class="display-5">Michael Eduardo Sandoval Pérez</p>
                                    <p>Programador Jr</p>
                                    <p>Egresado de Ingeniería Informática</p>
                                    <p>
                                        <a href="https://twitter.com/Mike__EDD" class="uk-icon-button" uk-icon="twitter"></a>
                                        <a href="" class="uk-icon-button" uk-icon="facebook"></a>
                                        <a href="" class="uk-icon-button" uk-icon="instagram"></a>
                                        <a href="" class="uk-icon-button" uk-icon="linkedin"></a>
                                        <a href="" class="uk-icon-button" uk-icon="tiktok"></a>
                                        <a href="" class="uk-icon-button" uk-icon="youtube"></a>
                                        <a href="" class="uk-icon-button" uk-icon="whatsapp"></a>
                                        <a href="" class="uk-icon-button" uk-icon="discord"></a>
                                        <a href="" class="uk-icon-button" uk-icon="reddit"></a>
                                        <a href="https://github.com/mikeed1998" class="uk-icon-button" uk-icon="github"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-5 py-1">
                <div class="col text-center">
                    <p class="display-5">Habilidades</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-start border-end border-bottom border-dark mt-5">
                    <h3 class="text-center border">Lenguajes de Programación, Diseño y Bases de Datos</h3>
                    <ul class="list-group">
                        <li class="list-group-item ">
                            <img src="img/python.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Python </strong>
                        </li>
                        <ul class="mt-0">
                            <li class="list-group-item">
                                <img src="img/flask.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Flask 
                            </li>
                            <li class="list-group-item">
                                <img src="img/django.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Django 
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/c.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Lenguaje C</strong> 
                        </li>
                        <ul  class="mt-0">
                            <li class="list-group-item">
                                <img src="img/gtk.png" alt="" class="img-fluid" style="width: 64px; height: 32px;">
                                GTK
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/cplusplus.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>C++</strong> 
                        </li>
                        <ul  class="mt-0">
                            <li class="list-group-item">
                                <img src="img/qt.png" alt="" class="img-fluid" style="width: 36px; height: 32px;">
                                QT Creator
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/php.png" alt="" class="img-fluid" style="width: 64px; height: 32px;">
                            <strong>PHP </strong>                       
                        </li>
                        <ul class="mt-0">
                            <li class="list-group-item">
                                <img src="img/native.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Nativo
                            </li>
                            <li class="list-group-item">
                                <img src="img/laravel.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Laravel 
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/js.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>JavaScript</strong>
                        </li>
                        <ul class="mt-0">
                            <li class="list-group-item">
                                <img src="img/jquery.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                JQUERY
                            </li>
                            <li class="list-group-item">
                            <img src="img/ajax.png" alt="" class="img-fluid" style="width: 32px; height: 42px;">
                                AJAX
                            </li>
                            <li class="list-group-item">
                                <img src="img/react.png" alt="" class="img-fluid" style="width: 42px; height: 32px;">
                                React
                            </li>
                            <li class="list-group-item">
                                <img src="img/node.png" alt="" class="img-fluid" style="width: 50px; height: 32px;">
                                Node
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/html.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>HTML5</strong>
                        </li>
                        <li class="list-group-item">
                            <img src="img/css.png" alt="" class="img-fluid" style="width: 28px; height: 32px;">
                            <strong>CSS3</strong>
                        </li>
                        <ul class="mt-0">
                            <li class="list-group-item">
                                <img src="img/bootstrap.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Bootstrap
                            </li>
                            <li class="list-group-item">
                                <img src="img/uikit.jpg" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                UIKit
                            </li>
                        </ul>
                        <li class="list-group-item">
                            <img src="img/sql.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>SQL</strong>
                        </li>
                        <ul class="mt-0 mb-5">
                            <li class="list-group-item">
                                <img src="img/mysql.png" alt="" class="img-fluid" style="width: 64px; height: 32px;">
                                MySQL
                            </li>
                            <li class="list-group-item">
                                <img src="img/sqlite.png" alt="" class="img-fluid" style="width: 64px; height: 32px;">
                                SQLite
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-start border-end border-bottom border-dark mt-5">
                    <h3 class="text-center mb-5 border">Software</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <img src="img/git.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Git (Github)</strong>
                        </li>
                        <li class="list-group-item">
                            <img src="img/sublimetext.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Sublime Text</strong>
                        </li>
                        <li class="list-group-item">
                            <img src="img/vscode.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Visual Studio Code</strong>
                        </li>
                        <li class="list-group-item">
                            <img src="img/linux.jpg" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                            <strong>Linux</strong>
                        </li>
                        <ul class="mt-0">
                            <li class="list-group-item">
                                <img src="img/debian.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Debian
                            </li>
                            <li class="list-group-item">
                                <img src="img/ubuntu.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Ubuntu
                            </li>
                            <li class="list-group-item">
                                <img src="img/puppy.png" alt="" class="img-fluid" style="width: 32px; height: 32px;">
                                Puppy Linux
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-start border-bottom border-dark mt-5">
                    <h3 class="text-center mb-5 border">Otros Conocimientos</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Metodogias Secuenciales</strong></li>
                        <ul class="mt-0">
                            <li class="list-group-item">Cascada</li>
                        </ul>
                        <li class="list-group-item"><strong>Metodologias Agiles</strong></li>
                        <ul class="mt-0">
                            <li class="list-group-item">SCRUM</li>
                        </ul>
                        <li class="list-group-item"><strong>Patrones de diseño</strong></li>
                        <ul class="mt-0">
                            <li class="list-group-item">Modelo Vista Controlador (MVC)</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <?php
            $sql_categorias = "SELECT * FROM categorias";
            $categorias = mysqli_query($conn, $sql_categorias);
            
                echo "
                    <div class='container-fluid py-5 mt-5'>
                        <div class='row'>
                            <div class='col text-center py-5'>
                                <div class='display-3'>Portafolio</div>
                            </div>
                        </div>
                        <div class='row'>           
                            <div uk-filter='target: .js-filter; animation: fade'>
                                <div class='col-xl-6 col-lg-6 col-md-9 col-sm-12 col-xs-12 mx-auto text-center'>
                                    <ul class='uk-subnav uk-subnav-pill'>
                    ";
                        
                    
                    while($row = $categorias->fetch_assoc()) {
                        echo "
                                        <li uk-filter-control='.proyectos_". $row['id'] ."'><a href='#'>". $row['categoria'] ."</strong></a></li>
                            ";
                    }
                    
                    echo "  
                                    </ul>
                                </div>
                                <ul class='js-filter uk-child-width-1-1 uk-child-width-1-1@m uk-text-center' uk-grid>
                        ";
                    
                    $sql_categorias2 = "SELECT * FROM categorias";
                    $categorias2 = mysqli_query($conn, $sql_categorias2);
                    while($row2 = $categorias2->fetch_assoc()) {
                        echo "
                                    <li class='proyectos_". $row2['id'] ."'>
                                        <div class='uk-card uk-card-body'>
                                            <div class='carrusel_proyectos'>
                            ";

                        $sql_proyectos = "SELECT * FROM proyecto";
                        $proyectos = mysqli_query($conn, $sql_proyectos);
                        while($subrow = $proyectos->fetch_assoc()) {
                            if($row2['id'] == $subrow['categoria']) {
                                echo "
                                                <div>
                                                    <div class='row'>
                                                        <div class='col-9 mx-auto'>
                                                            <div class='row'>
                                                                <div class='col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 border py-3'>
                                                                    <h2>". $subrow['nombre'] ."</h2>
                                                                    <h3>". $subrow['origen'] ."</h3>
                                                                    <a href='". $subrow['enlace'] ."' class='mt-5 mb-5 btn btn-block btn-outline border border-dark'>Ver</a>
                                                                </div>
                                                                <div class='col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 border py-3'>
                                                                    <ul class='list-group'>
                                                                        <li class='list-group-item'>
                                                                            <h3>Frontend</h3>
                                                                            <ul class='mt-0'>
                                                                                <li class='list-group-item'>". $subrow['front'] ."</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class='list-group'>
                                                                        <li class='list-group-item'>
                                                                            <h3>Backend</h3>
                                                                            <ul class='mt-0'>
                                                                                <li class='list-group-item'>". $subrow['back'] ."</li>
                                                                             </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class='col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 border py-3'>
                                                                    <div class='row'>
                                                                        <div class='col'>
                                                                            <h3>Funciones</h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class='row'>
                                                                        <div class='col'>
                                                                            ". $subrow['descripcion'] ."
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                ";
                            }     
                        }

                            echo "
                                            </div>
                                        </div>
                                    </li>
                            ";
                    }

                    echo "
                                </ul>
                            </div>
                        </div>
                    </div>";
                
        ?>

        <div class="container-fluid border py-5">
            <div class="row py-5">
                <div class="col-md-6 text-center mx-auto">
                    <h3>Experiencia profesional</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="row">
                        <div class="col-md-9">
                            <h5><b>Empresa: </b> Wozial Marketing Lovers</h5>
                            <h5><b>Puesto: </b> Web Development Internship </h5>
                            <h5><b>Periodo: </b> Agosto - Febrero 2022 (7 meses)</h5>
                            <h5><b>Actividades: </b> Desarrollo web Front y Back </h5>
                            <h5>
                                <b>Skills: </b>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3 (Bootstrap y UIKit)</li>
                                    <li>JavaScript (AJAX y JQUERY)</li>
                                    <li>PHP (Nativo y con Laravel)</li>
                                    <li>SQL (MySQL)</li>
                                    <li>Patron MVC</li>
                                </ul>
                            </h5>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="img/logo.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-9 mx-auto">
                    <div class="row">
                        <div class="col-md-9">
                            <h5><b>Empresa: </b> Codenation</h5>
                            <h5><b>Puesto: </b> Bootcamp (remoto) </h5>
                            <h5><b>Periodo: </b> Septiembre - Octubre 2022 (1.5 meses), Diciembre 2022 (1 mes)</h5>
                            <h5><b>Actividades: </b> Entrenamiento en el desarrollo web mediante cursos los cuales fuimos completando en equipo así como la evaluación de nuestros avances aplicando SCRUM </h5>
                            <h5>
                                <b>Tecnologias: </b>
                                <ul>
                                    <li>HTML5</li>
                                    <li>CSS3 (BOOTSTRAP, SASS)</li>
                                    <li>PHP (Nativo y Laravel)</li>
                                    <li>JavaScript (Gulp.js)</li>
                                    <li>Git (Github)</li>
                                    <li>Patron MVC</li>
                                    <li>Metodologia SCRUM</li>
                                    <li>NextJS</li>
                                </ul>
                            </h5>
                        </div>
                        <div class="col-md-3 text-center">
                            <img src="img/logoCodenation.png" class="img-fluid h-50" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>


    <footer class="footer border">

    </footer>

    <script type="text/javascript" src="vendor/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <!-- UIkit JS -->
    <script type="text/javascript" src="vendor/uikit-3.16.14/js/uikit.min.js"></script>
    <script type="text/javascript" src="vendor/uikit-3.16.14/js/uikit-icons.min.js"></script>
    <!-- General -->
    <script type="text/javascript" src="js/main.js"></script>
    <script>      
        $('.carrusel_proyectos').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
        });		
    </script>
</body>
</html>