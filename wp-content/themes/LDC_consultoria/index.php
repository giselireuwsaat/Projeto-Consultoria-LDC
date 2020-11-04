<?php 
/*
Template Name: Blog
*/

?>

        
<?php get_header(); ?>
<section class="separa-sections">
<img class="h1-img" src="<?php bloginfo('template_directory');?>/assets/img/detalhe_titulo.png">
<h1>Campaci's Blog
  <small>Dicas, Estratégias e Soluções para você! </small>
</h1>
<hr>
	


  <!-- Page Content -->
  <div class="container-fluid">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-7 parte-texto blog">


        <!-- Blog Post -->
        <article>
        <?php
            if (have_posts()): 
              
              while (have_posts() ): the_post();
              ?>

            <div class="card mb-4">
        
              <img class="card-img-top"<?php the_post_thumbnail(array(750, 300));?>> 
              <div class="card-body">
                <h2 class="card-title"><a class="text-muted" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="card-text"><?php the_excerpt() ;?></p>
          <!-- <a href="#" class="btn btn-primary">Read More &rarr;</a> -->
          <input class="text-small-uppercase" id="submit" type="submit" value="Read more">

              </div>
              <div class="card-footer text-muted">
                Publicado em <?php echo get_the_date(); ?>
                <a href="#">algum link</a>
          </div>
            </div>
        <?php
            endwhile;
          else:
            ?>
            <p> sem post para exibir</p>
          <?php endif; ?>
        </article>


        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>


          <!-- white Column -->
          <!-- <div class="colunabranca">



          </div>
 -->





          <!-- Sidebar Widgets Column -->
      
          <?php get_sidebar();?>
    </div>
  </div> 
       
      
	



	

</section>
		
<?php get_footer(); ?>  