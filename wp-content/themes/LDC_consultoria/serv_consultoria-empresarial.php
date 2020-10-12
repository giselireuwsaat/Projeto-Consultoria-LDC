<?php 
/*
Template Name: consultoria_empresarial
*/
?>

<?php get_header(); ?>

<!-- <?php get_template_part('includes/section','content');?> -->

<?php $campos_service= get_field('workshop');?>

<section class="serviços">
    <div class="container-fluid">
        <div class="row">
            <div class="texto-destaque">
                <h2 class="titulo">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_title(); ?></h2>
                
                <p class="p-dif-altura"><?php echo $campos_service['workshop-textodestaque'];?></p>

            </div>
            <picture class="imagem-servico">
                
                    <img class="foto-contato" src="<?php bloginfo('template_directory');?>/assets/img/luis_consultoria_empresarial.png"
                        alt="luis na plateia">
            </picture>
            
        </div>

        <div class="row">
            <div class="col-md-12 mx-lg-1">

<?php the_content(); ?>

<?php endwhile; else: ?>

<p>Sorry, no page found.</p>

<?php endif; ?>

</div>


        </div>
        <section class="resultados">
            <div class="row">
                <div class="col-md-3 resultado">
                    <h2>RESULTADO 1</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 8 8"
                        style="fill: rgb(55, 96, 146)">
                        <path d="M7.03 0l-3.03 3-1-1-3 3.03 1 1 2-2.03 1 1 4-4-.97-1zm-7.03 7v1h8v-1h-8z" />

                    </svg>



                </div>


                <div class="col-md-3 resultado">
                    <h2>RESULTADO 2</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 8 8"
                        style="fill: rgb(55, 96, 146)">
                        <path
                            d="M2 0v1h-.75c-.68 0-1.25.57-1.25 1.25v.5c0 .68.44 1.24 1.09 1.41l2.56.66c.14.04.34.29.34.44v.5c0 .14-.11.25-.25.25h-2.5c-.12 0-.21-.04-.25-.06v-.94h-1v1c0 .34.2.63.44.78.23.16.52.22.81.22h.75v1h1v-1h.75c.69 0 1.25-.56 1.25-1.25v-.5c0-.68-.44-1.24-1.09-1.41l-2.56-.66c-.14-.04-.34-.29-.34-.44v-.5c0-.14.11-.25.25-.25h2.5c.11 0 .21.04.25.06v.94h1v-1c0-.34-.2-.63-.44-.78-.23-.16-.52-.22-.81-.22h-.75v-1h-1z"
                            transform="translate(1)" />

                    </svg>

                </div>


                <div class="col-md-3 resultado">
                    <h2>RESULTADO 3</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 8 8"
                        style="fill: rgb(55, 96, 146)">
                        <path
                            d="M4.03 0c-2.53 0-4.03 3-4.03 3s1.5 3 4.03 3c2.47 0 3.97-3 3.97-3s-1.5-3-3.97-3zm-.03 1c1.11 0 2 .9 2 2 0 1.11-.89 2-2 2-1.1 0-2-.89-2-2 0-1.1.9-2 2-2zm0 1c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1c0-.1-.04-.19-.06-.28-.08.16-.24.28-.44.28-.28 0-.5-.22-.5-.5 0-.2.12-.36.28-.44-.09-.03-.18-.06-.28-.06z"
                            transform="translate(0 1)" />
                    </svg>
                </div>

                <div class="col-md-3 resultado rright">
                    <h2>RESULTADO 4</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 8 8"
                        style="fill: rgb(55, 96, 146)">
                        <path
                            d="M5.5 0c-1.38 0-2.5 1.12-2.5 2.5 0 .16 0 .32.03.47l-3.03 3.03v2h3v-2h2v-1l.03-.03c.15.03.31.03.47.03 1.38 0 2.5-1.12 2.5-2.5s-1.12-2.5-2.5-2.5zm.5 1c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z" />

                    </svg>

                </div>
        </section>
    </div>




</section>


<?php get_footer(); ?>