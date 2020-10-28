<?php 
/*
Template Name: coaching
*/
?>

<?php get_header(); ?>

<!-- <?php get_template_part('includes/section','content');?> -->

<?php $campos_service= get_field('coaching');?>

<section class="servicos">
    <div class="container-fluid">
        <div class="row">
            <div class="texto-destaque">
                <h2 class="titulo">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_title(); ?></h2>

                <p class="p-dif-altura"><?php echo $campos_service['coaching-textodestaque'];?></p>

            </div>
            <picture class="imagem-servico">
                
                    <img class="foto-contato" src=https://luiscampaci.com.br//wp-content/uploads/2020/05/riccardo-annandale-7e2pe9wjL9M-unsplash.jpg
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
                    <h2 class="resultado1"><?php echo $campos_service['coaching-resultado1'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_service['coaching-img1'];?>"/>

                </div>

                <div class="col-md-3 resultado">
                    <h2 class="resultado2"><?php echo $campos_service['coaching-resultado2'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_service['coaching-img2'];?>"/>

                </div>

                <div class="col-md-3 resultado">
                <h2 class="resultado3"><?php echo $campos_service['coaching-resultado3'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_service['coaching-img3'];?>"/>
                </div>

                <div class="col-md-3 resultado">
                <h2 class="resultado4"><?php echo $campos_service['coaching-resultado4'];?></h2>
                    
                    <img class="img-resultado" src="<?php echo $campos_service['coaching-img4'];?>"/>
                </div>
            </div>
        </section>
    </div>




</section>


<?php get_footer(); ?>