<?php
include_once 'php/parametros_bd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index Software C.A.</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" >

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" >
    <link rel="stylesheet" href="css/owl.theme.css" >
    <link rel="stylesheet" href="css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <!--<link rel="stylesheet" type="text/css" href="css/color/blue.css">-->
    <link rel="stylesheet" type="text/css" href="css/color/blue.css">



    <!-- Colors CSS -->
    <!--<link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">-->
    <!--<link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">-->
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <!--<link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">-->
    <!--<link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">-->
    <!--<link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">-->
    <!--<link rel="stylesheet" type="text/css" href="css/fuentes.css" title="fuentes">-->

    <!-- Custom Fonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>-->


    <!-- Modernizer js -->
    <script src="js/modernizr.custom.js"></script>


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body class="index">


    <!-- Styleswitcher
================================================== -->
        <!--<div class="colors-switcher">-->
            <!--<a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>-->
                <!--<ul class="colors-list">-->
                    <!--<li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>-->
                    <!--<li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>-->
                    <!--<li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>-->
                    <!--<li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>-->

                    <!--<li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>-->
                    <!--<li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>-->

                <!--</ul>-->
        <!--</div>-->
<!-- Styleswitcher End
================================================== -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Index Software</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#feature">Resumen</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="#portfolio">Proyectos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#censo_cursos">Cursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#service">Servicios</a>
                    </li>
                    <!--li>
                        <a class="page-scroll" href="#team">Equipo</a>
                    </li-->
                    <!--li>
                        <a class="page-scroll" href="#pricing">Precios</a>
                    </li-->
                    <!--li>
                        <a class="page-scroll" href="#latest-news">Últimas Noticias</a>
                    </li-->
                    <!--li>
                        <a class="page-scroll" href="#testimonial">Testimonios</a>
                    </li-->
                    <!--li>
                        <a class="page-scroll" href="#partner">Socios</a>
                    </li-->
                    <!--li>
                        <a class="page-scroll" href="#contact">Contactos</a>
                    </li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>




    <!-- Start Home Page Slider -->
    <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
                <li data-target="#main-slide" data-slide-to="3"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="images/principal.jpg" alt="slider" style="width: 100%;height: 100%;">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong>Index Software</strong> Creando Soluciones</span>
                            </h1>
                            <p class="animated2">Soluciones Informáticas para tu empresa, negocio o comercio.<br> Agilizando los procesos productivos y administrativos.</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated1">Ver Más</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images/header1.png" alt="slider" style="width: 100%;height: 100%;">

                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                    		  <span>Desarrollo <strong>Web</strong></span>
                    	    </h1>
                            <p class="animated2">Creando páginas web publicitarias y herramientas administrativas<br> Adaptadas a tus necesidades</p>
                            <a href="#feature" class="page-scroll btn btn-primary animated3">Ver Más</a>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="images/galaxy.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>Aplicaciones <strong>Android</strong></span>
                            </h1>
                            <p class="animated1">Desarrollo de Sistemas en dispositivos Android<br> brindando un servicio multiplataforma para comodidad<br> de todos los usuarios</p>
                            <!--<a class="animated3 slider btn btn-primary btn-min-block" href="#">Get Now</a><a class="animated3 slider btn btn-default btn-min-block" href="#">Live Demo</a>-->

                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="images/galaxy.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>Aplicativos de <strong>Escritorio</strong></span>
                            </h1>
                            <p class="animated1">Utilizamos las últimas herramientas en desarrollo <br> aprovechando al máximo las los equipos informáticos</p>
                            <!--<a class="animated3 slider btn btn-primary btn-min-block" href="#">Get Now</a><a class="animated3 slider btn btn-default btn-min-block" href="#">Live Demo</a>-->

                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Nuestros Trabajos</h3>
                            <p>Nuestros productos principales, desarrollados en distintas plataformas</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <!-- Start Portfolio items -->
                        <ul id="portfolio-list">
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/400x320.png" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Q-Sort</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img2.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Index-Administrativo</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img3.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Lotindex</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img4.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Sirtev</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img5.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Sintedac</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="portfolio-item">
                                    <img src="images/portfolio/img6.jpg" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>Index-Restaurant</h4>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-magic"></i></a>
                                        <a href="#" class="link-2"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                        <!-- End Portfolio items -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

    <!-- Start Portfolio Modal Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Portfolio Details</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                        </div>
                        <div class="col-md-6">
                            <img src="images/portfolio/img1.jpg" class="img-responsive" alt="..">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Portfolio Modal Section -->


    <!-- Start About Us Section -->
    <section id="censo_cursos" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Cursos</h3>
                            <p>Registre su solicitud de Cursos que tenemos para ofrecer:</p>
                        </div>
                </div>
            </div>
            <div class="row">
                <?php
                $con=new PDO("mysql:host=localhost;dbname=".NOMBRE_BD.";charset=utf8", USUARIO_BD,CLAVE_BD);
                $stm=$con->prepare("SELECT * from cursos;");
                $stm->execute();
                $cursos=$stm->fetchAll();
                foreach ($cursos as $k=>$v){
                ?>
                <div class="col-md-4">
                    <div class="welcome-section text-center contenedor">
                        <input type="radio" class="curso" data-id="<?php echo $v["id"] ?>" name="curso" id="<?php echo $v["id"] ?>" value="<?php echo $v["id"] ?>">
                        <label for="<?php echo $v["id"] ?>">
                            <img src="images/about-01.jpg" class="img-responsive" alt="..">
                            <h4><?php echo $v["nombre"] ?></h4>
                            <div class="border"></div>
                            <p><?php echo $v["descripcion"] ?></p>
                        </label>
                    </div>
                </div>
                <?php
                }
                ?>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cédula *" id="cedula" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre *" id="nombre" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido *" id="apellido" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Telefono *" id="telefono" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea id="comentario" class="form-control" placeholder="Comentario" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button class="btn btn-success" id="registrar_postulacion">Registrar Solicitud</button>
                    </div>
                </div>
                <!--<div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-01.jpg" class="img-responsive" alt="..">
                        <h4>Office Philosophy</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-02.jpg" class="img-responsive" alt="..">
                        <h4>Office Mission & Vission</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-03.jpg" class="img-responsive" alt="..">
                        <h4>Office Value & Rules</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>-->

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->


    <!-- Start About Us Section 2 -->
    <!--div class="about-us-section-2">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="skill-shortcode">

                        <div class="skill">
                            <p>Web Design</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="60">
                                    <span class="progress-bar-span" >60%</span>
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>HTML & CSS</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="95">
                                    <span class="progress-bar-span" >95%</span>
                                    <span class="sr-only">95% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Wordpress</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="80">
                                    <span class="progress-bar-span" >80%</span>
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Joomla</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="100">
                                    <span class="progress-bar-span" >100%</span>
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>

                        <div class="skill">
                            <p>Extension</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"  data-percentage="70">
                                    <span class="progress-bar-span" >70%</span>
                                    <span class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide about-slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>


                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/about-01.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-02.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/about-03.jpg" alt="">
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start About Us Section 2 -->





    <!-- Start Feature Section -->
        <section id="service" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Nuestros Servicios</h3>
                            <p>Servicios que ofrece nuestra empresa.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-magic"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Diseño Web</h4>
                                    <p>Diseño de Páginas Web publicitarias, facil administración y soporte personalizado.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-graduation-cap"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Asesorias Tecnológicas</h4>
                                    <p>Brindamos asesorías tecnológicas a universitarios y público en general. </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-laptop"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Servicio Técnico</h4>
                                    <p>Brindamos Servicio Técnico especializado para computadores y demás equipos electrónicos.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-print"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Servicio de Impresión</h4>
                                    <p>Impresión y fotocopiado, papelería, recarga de cartuchos y toner.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-code"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Sistemas Administrativos</h4>
                                    <p>Creación de sistemas admnistrativos y comerciales, manejo de puntos de ventas, impresoras fiscales y más.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="feature-2">
                            <div class="media">
                                <div class="pull-left">
                                    <i class="fa fa-shopping-cart"></i>
                                    <div class="border"></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Repuestos de Computadoras</h4>
                                    <p>Ventas de repuestos para computadoras, laptop e impresoras con garantía y a los mejores precios.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->

    <!-- Start Fun Facts Section -->
    <!--
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                        <h5>Files uploaded</h5>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                        <h5>Projects completed</h5>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                        <h5>Lines of code written</h5>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                      <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                        <h5>Happy clients</h5>
                      </div>
                    </div>
            </div>
        </div>
    </section>
    -->
    <!-- End Fun Facts Section -->



    <!-- Start Team Member Section -->
    <!--section id="team" class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Our Team</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">





                                <div class="our-team">

                                    <div class="team-member">
                                        <img src="images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-2.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-3.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-4.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-1.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="images/team/manage-2.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>John Doe</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>


                    </div>
                </div>
            </div>

        </div>
    </section -->
    <!-- End Team Member Section -->



    <!-- Start Pricing Table Section -->
    <!--div id="pricing" class="pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h3>Our Pricing Plan</h3>
                            <p class="white-text">Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="pricing">

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Free</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Standard</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Premium</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Professional</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Premium</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="pricing-table">
                                <div class="plan-name">
								    <h3>Professional</h3>
                                </div>
                                <div class="plan-price">
                                    <div class="price-value">$49<span>.00</span></div>
                                    <div class="interval">per month</div>
                                </div>
                                <div class="plan-list">
                                    <ul>
                                        <li>40 GB Storage</li>
                                        <li>40GB Transfer</li>
                                        <li>10 Domains</li>
                                        <li>20 Projects</li>
                                        <li>Free installation</li>
                                    </ul>
                                </div>
                                <div class="plan-signup">
                                    <a href="#" class="btn-system btn-small">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                    </div>


            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->



    <!-- Start Latest News Section -->
    <!--section id="latest-news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Latest News</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>31</strong> <br>Dec , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>17</strong> <br>Feb , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-02.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-03.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Standard Post with Image</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Section -->






    <!-- Start Testimonial Section -->
    <!--div id="testimonial" class="testimonial-section">
        <div class="container">
            <div id="testimonial-carousel" class="testimonials-carousel">
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_1.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Organization Founder</div>
                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br> laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                    </div>
                </div>
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_2.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">Jane Doe</div>
                            <div class="designation">Lead Developer</div>
                        </div>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia<br> consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                </div>
                <div class="testimonials item">
                    <div class="testimonial-content">
                        <img src="images/testimonial/face_3.png" alt="" >
                        <div class="testimonial-author">
                            <div class="author">John Doe</div>
                            <div class="designation">Honorable Customer</div>
                        </div>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit<br> anim laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Section -->



    <!-- Clients Aside -->
    <!--section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>Our Honorable Partner</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients">

                    <div class="col-md-12">
                        <img src="images/logos/themeforest.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/microlancer.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/themeforest.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/microlancer.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/creative-market.jpg" class="img-responsive" alt="...">
                    </div>

                    <div class="col-md-12">
                        <img src="images/logos/designmodo.jpg" class="img-responsive" alt="...">
                    </div>

                </div>
            </div>
        </div>
    </section>





    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> your-email@mail.com</li>
                            <li><strong>Phone :</strong> +8801-6778776</li>
                            <li><strong>Mobile :</strong> +8801-45565378</li>
                            <li><strong>Web :</strong> yourdomain.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                            <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                            <li><strong>Sat :</strong> 9 am to 3 pm</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        -->
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <b>IndexSoftware</b> <?php echo date('Y');?></span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="https://twitter.com/indexsoftware" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/Index-Software-CA-172385079487212/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <!--li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li-->
                                <!--li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li-->
                                <!--li><a href="#"><i class="fa fa-dribbble"></i></a></li-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>



    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/count-to.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/eventos.js"></script>

</body>

</html>
