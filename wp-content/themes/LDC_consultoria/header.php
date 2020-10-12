<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset=<?php bloginfo('charset'); ?>>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Apoena</title> -->
        <?php wp_head(); ?>
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/style.css"> -->
        <link rel="shortcut icon" type="image/png" sizes="32x32"
            href="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo_apoena.png" />


    </head>
    <header>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-sm navbar-light">

            <div class="navbar-brand">
            <a href="<?php echo home_url('/') ?>">
                <img class="img-brand" src="<?php bloginfo('template_directory');?>/assets/img/logo_apoena.png" class="logo" alt="Logo">
                </a>
            <div class="txt-brand"> Apoena</div>
            </div>


            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/consultoria_LDC/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOBRE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVIÇOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="http://localhost/consultoria_LDC/">CURSOS</a>
                            <a class="dropdown-item" href="http://localhost/consultoria_LDC/workshops/">PALESTRAS e WORKSHOPS</a>
                            <a class="dropdown-item" href="http://localhost/consultoria_LDC/consultoria-empresarial/">CONSULTORIA EMPRESARIAL</a>
                            <a class="dropdown-item" href="http://localhost/consultoria_LDC/coaching/">COACHING</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/consultoria_LDC/blog3/">BLOG</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>


                </ul>
            </div>
            </div>
        </nav>




    </header>