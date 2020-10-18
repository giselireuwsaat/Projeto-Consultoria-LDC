<?php 
/*
Template Name: home
*/
?>


<?php get_header(); ?>



<?php $campos_front= get_field('principal');?>


<body>


    <div class="section">
        <!--Carrosel -->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/img/Foto_Carrosel2.png"
                            alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption txt-slide1">
                        <h3 class="h3-responsive"><?php echo $campos_front['slide1_principal'];?></h3>
                        <p><?php echo $campos_front['slide1_secundario'];?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/img/Foto_Carrosel1.png"
                            alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption txt-slide2">
                        <h3 class="h3-responsive"><?php echo $campos_front['slide2_principal'];?></h3>
                        <p><?php echo $campos_front['slide2_secundario'];?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/assets/img/Foto_Carrosel3.png"
                            alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption txt-slide3">
                        <h3 class="h3-responsive"><?php echo $campos_front['slide3_principal'];?></h3>
                        <p><?php echo $campos_front['slide3_secundario'];?></p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.fim Carrossel-->

        </section>

        <section class="separa-sections cursos">

        <img class="h1-img" src="<?php bloginfo('template_directory');?>/assets/img/detalhe_titulo.png">
            <h1>Próximos Cursos</h1>
            <hr>

            <div id="accordion">
                <!-- grid dos cursos -->
                <div class="row mb-5 mx-3">
                    <!-- grid de cada curso 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="curso">
                            <h2><?php echo $campos_front['curso1-nomecurso'];?></h2>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M0 0v2h7v-2h-7zm0 3v4.91c0 .05.04.09.09.09h6.81c.05 0 .09-.04.09-.09v-4.91h-7zm1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1z" />

                                </svg>
                                <?php echo $campos_front['curso1-datacurso'];?></p>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path d="M0 0v8l2-2 2 2v-8h-4z" transform="translate(2)" />
                                </svg><?php echo $campos_front['curso1-diadasemanacurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M4 0c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 1c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm-.5 1v2.22l.16.13.5.5.34.38.72-.72-.38-.34-.34-.34v-1.81h-1z" />
                                </svg> <?php echo $campos_front['curso1-horariocurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M3 0c-1.66 0-3 1.34-3 3 0 2 3 5 3 5s3-3 3-5c0-1.66-1.34-3-3-3zm0 1c1.11 0 2 .9 2 2 0 1.11-.89 2-2 2-1.1 0-2-.89-2-2 0-1.1.9-2 2-2z"
                                        transform="translate(1)" />
                                </svg><?php echo $campos_front['curso1-cidadecurso'];?></p>

                            <!-- botão para acessar o modal -->
                            <button class="btn btn-link mais-informacoes" data-toggle="modal"
                                data-target=".bd-example-modal-lg">
                                + Informações
                            </button>
                        </div>
                    </div>
                    <!-- modal aberto curso 1-->
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel"><?php echo $campos_front['curso1-nomecurso'];?></h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-09">

                                                <p><?php echo $campos_front['curso1-resumo'];?></p>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Investimento:</h4>
                                                <p class="info2"><?php echo $campos_front['curso1-numeroparcelas'];?></p>
                                                <span class="info3"><?php echo $campos_front['curso1-valorparcela'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Carga Horária:</h4>
                                                <p></p>
                                                <span class="info3"><?php echo $campos_front['curso1-cargahoraria'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Período:</h4>
                                                <p class="info2"><?php echo $campos_front['curso1-datacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso1-diadasemanacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso1-horariocurso'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p> </p>
                                        </div>

                                        <div class="modal-footer">
                                            <?php if($campos_front['inscreva-se']);?>

                                            <a href="http://localhost/consultoria_LDC/inscreva-se/"> <button type=" button"
                                                    class="btn btn-primary">
                                                    Inscreva-se </button>
                                           </a>


                                        </div>

                                        <!-- inicio do collapse -->
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            O que você aprenderá
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso1-oquevoceaprendera'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Conteúdo do Curso
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso1-conteudodocurso'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- grid de cada curso 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="curso">
                            <h2><?php echo $campos_front['curso2-nomecurso'];?></h2>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M0 0v2h7v-2h-7zm0 3v4.91c0 .05.04.09.09.09h6.81c.05 0 .09-.04.09-.09v-4.91h-7zm1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1z" />

                                </svg>
                                <?php echo $campos_front['curso2-datacurso'];?></p>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path d="M0 0v8l2-2 2 2v-8h-4z" transform="translate(2)" />
                                </svg><?php echo $campos_front['curso2-diadasemanacurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M4 0c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 1c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm-.5 1v2.22l.16.13.5.5.34.38.72-.72-.38-.34-.34-.34v-1.81h-1z" />
                                </svg> <?php echo $campos_front['curso2-horariocurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M3 0c-1.66 0-3 1.34-3 3 0 2 3 5 3 5s3-3 3-5c0-1.66-1.34-3-3-3zm0 1c1.11 0 2 .9 2 2 0 1.11-.89 2-2 2-1.1 0-2-.89-2-2 0-1.1.9-2 2-2z"
                                        transform="translate(1)" />
                                </svg><?php echo $campos_front['curso2-cidadecurso'];?></p>

                            <!-- botão para acessar o modal -->
                            <button class="btn btn-link mais-informacoes" data-toggle="modal"
                                data-target="#modal-curso2">
                                + Informações
                            </button>
                        </div>
                    </div>
                    <!-- modal aberto curso 2-->
                    <div class="modal fade bd-example-modal-lg" id="modal-curso2" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel"><?php echo $campos_front['curso2-nomecurso'];?></h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-09">

                                                <p><?php echo $campos_front['curso2-resumo'];?></p>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Investimento:</h4>
                                                <p class="info2"><?php echo $campos_front['curso2-numeroparcelas'];?></p>
                                                <span class="info3"><?php echo $campos_front['curso2-valorparcela'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Carga Horária:</h4>
                                                <p></p>
                                                <span class="info3"><?php echo $campos_front['curso2-cargahoraria'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Período:</h4>
                                                <p class="info2"><?php echo $campos_front['curso2-datacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso2-diadasemanacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso2-horariocurso'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p> </p>
                                        </div>

                                        <div class="modal-footer">
                                            <?php if($campos_front['inscreva-se']);?>

                                            <a href="http://localhost/consultoria_LDC/inscreva-se/"> <button type=" button"
                                                    class="btn btn-primary">
                                                    Inscreva-se </button>
                                           </a>


                                        </div>

                                        <!-- inicio do collapse -->
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            O que você aprenderá
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso2-oquevoceaprendera'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Conteúdo do Curso
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso2-conteudodocurso'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- grid de cada curso 3 -->
                     <div class="col-md-4 mb-4">
                        <div class="curso">
                            <h2><?php echo $campos_front['curso3-nomecurso'];?></h2>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M0 0v2h7v-2h-7zm0 3v4.91c0 .05.04.09.09.09h6.81c.05 0 .09-.04.09-.09v-4.91h-7zm1 1h1v1h-1v-1zm2 0h1v1h-1v-1zm2 0h1v1h-1v-1zm-4 2h1v1h-1v-1zm2 0h1v1h-1v-1z" />

                                </svg>
                                <?php echo $campos_front['curso3-datacurso'];?></p>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path d="M0 0v8l2-2 2 2v-8h-4z" transform="translate(2)" />
                                </svg><?php echo $campos_front['curso3-diadasemanacurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M4 0c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 1c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm-.5 1v2.22l.16.13.5.5.34.38.72-.72-.38-.34-.34-.34v-1.81h-1z" />
                                </svg> <?php echo $campos_front['curso3-horariocurso'];?></p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 8 8"
                                    style="fill: rgb(55, 96, 146)">
                                    <path
                                        d="M3 0c-1.66 0-3 1.34-3 3 0 2 3 5 3 5s3-3 3-5c0-1.66-1.34-3-3-3zm0 1c1.11 0 2 .9 2 2 0 1.11-.89 2-2 2-1.1 0-2-.89-2-2 0-1.1.9-2 2-2z"
                                        transform="translate(1)" />
                                </svg><?php echo $campos_front['curso3-cidadecurso'];?></p>

                            <!-- botão para acessar o modal -->
                            <button class="btn btn-link mais-informacoes" data-toggle="modal"
                                data-target="#modal-curso3">
                                + Informações
                            </button>
                        </div>
                    </div>
                    <!-- modal aberto curso 3-->
                    <div class="modal fade bd-example-modal-lg" id="modal-curso3" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel"><?php echo $campos_front['curso3-nomecurso'];?></h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-09">

                                                <p><?php echo $campos_front['curso3-resumo'];?></p>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Investimento:</h4>
                                                <p class="info2"><?php echo $campos_front['curso3-numeroparcelas'];?></p>
                                                <span class="info3"><?php echo $campos_front['curso3-valorparcela'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Carga Horária:</h4>
                                                <p></p>
                                                <span class="info3"><?php echo $campos_front['curso3-cargahoraria'];?></span>
                                            </div>
                                            <div class="col-md-4 col-sm-12 informacoes-cursos">
                                                <h4 class="info1">Período:</h4>
                                                <p class="info2"><?php echo $campos_front['curso3-datacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso3-diadasemanacurso'];?></p>
                                                <p class="info2"><?php echo $campos_front['curso3-horariocurso'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p> </p>
                                        </div>

                                        <div class="modal-footer">
                                            <?php if($campos_front['inscreva-se']);?>

                                            <a href="http://localhost/consultoria_LDC/inscreva-se/"> <button type=" button"
                                                    class="btn btn-primary">
                                                    Inscreva-se </button>
                                           </a>


                                        </div>

                                        <!-- inicio do collapse -->
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            O que você aprenderá
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso3-oquevoceaprendera'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                            data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Conteúdo do Curso
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        <p><?php echo $campos_front['curso3-conteudodocurso'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


        </div>

    </section>

    <section class="servicos separa-sections">

    
    <img class="h1-img" src="<?php bloginfo('template_directory');?>/assets/img/detalhe_titulo.png">
            <h1>O que fazemos</h1>
            <hr>


            <div class="row justify-content-md-center servico">
                <div class="col-md-4 resultado" style="background-color: #F0F2F6;"> 
                    <h2 class="resultado1"><?php echo $campos_front['servico-resultado1'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_front['servico-img1'];?>"/>

                </div>

                <div class="col-md-4 resultado" style="background-color: #E9EBF1;">
                    <h2 class="resultado2"><?php echo $campos_front['servico-resultado2'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_front['servico-img2'];?>"/>

                </div>

                <div class="col-md-4 resultado" style="background-color: #E1E2F8;">
                <h2 class="resultado3"><?php echo $campos_front['servico-resultado3'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_front['servico-img3'];?>"/>
                </div>

                <div class="col-md-4 resultado" style="background-color: #E1E2E8;">
                <h2 class="resultado4"><?php echo $campos_front['servico-resultado4'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_front['servico-img4'];?>"/>
                </div>
            </div>
</section>]




<img class="h1-img" src="<?php bloginfo('template_directory');?>/assets/img/detalhe_titulo.png">
        <h1>Conheça o Luís</h1>
        <hr>

    <section class="separa-sections sobre">



        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="parte-branca col-md-6">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endwhile; else: ?>

<p>Sorry, no page found.</p>

<?php endif; ?>

</div>
                        </p>

                    </div>
                </div>
            </div>


        </div>

    </section>

    
    <img class="h1-img" src="<?php bloginfo('template_directory');?>/assets/img/detalhe_titulo.png">
        <h1>Entre em contato comigo</h1>
        <hr>
    
    <section class="separa-sections formulario">

    

        <main>

        
            <h1>Contato</h1>
            
            <p class="p-formulario"><?php echo $campos_front['contato'];?></p>

            <p class="p-formulario"></p>
            <figure>
                <picture>
                    <img class="foto-contato" src="<?php bloginfo('template_directory');?>/assets/img/IMG_1595_2.png"
                        alt="luis lendo um livro">
                </picture>
            </figure>

            <form>
                <span>
                    <label for="username" class="text-small-uppercase">Nome</label>
                    <input class="text-body" id="username" name="username" type="text" required>
                </span>
                <span>
                    <label for="email" class="text-small-uppercase">Email</label>
                    <input class="text-body" id="email" name="email" type="email" required>
                </span>
                <span>
                    <label for="telefone" class="text-small-uppercase">Telefone</label>
                    <input class="text-body" id="telefone" name="telefone" type="text" required>
                </span>
                <span>
                    <label for="message" class="text-small-uppercase">Mensagem</label>
                    <textarea name="message" id="message" required></textarea>
                </span>
                <input class="text-small-uppercase" id="submit" type="submit" value="Enviar agora">
            </form>
        </main>



    </section>

    <?php get_footer(); ?>




</body>

</html>