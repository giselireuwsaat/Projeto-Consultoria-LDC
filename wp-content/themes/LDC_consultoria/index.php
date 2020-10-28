<?php 
/*
Template Name: Blog
*/

?>

        
<?php get_header(); ?>

<section class="blog">     
	
	<div class="container">

		<div class="row">

<!-- Blog Entries Column -->
			<div class="col-md-8">


		<!-- verificar se é necessario -->
			<div id="content">
				<div class="inner">

        <!-- Blog Post -->
       

					<!-- Post -->
					<article class="box post post-excerpt">
						
						
						<?php if ( have_posts() ) : 
							while ( have_posts() ) : the_post(); 
							?>
                        
                        
                        <!-- Post -->
					<div class="card mb-4">
						<article class="box post post-excerpt">
                            <header>
							<a class="card-img-top img-blog" href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail('full')?></a>
							<div class="card-body">
                                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php the_post_thumbnail();?>
								<p class="card-text"><?php the_excerpt();?></p>
								<a href="#" class="btn btn-primary">Read More &rarr;</a>
							</div>
							<div class="card-footer text-muted">
								<span class="date"><span class="month"><?php echo get_the_date('M'); ?><span>,</span></span> <span class="day"><?php echo get_the_date('d'); ?></span><span class="year">, <?php echo get_the_date('yy'); ?></span>.</span>								
							</div>
							</header>
							
					</div>
							
						
						</article>
                        <?php endwhile; else: ?>



	                    <?php endif; ?>
						</article>
					

					<!-- Pagination -->
						<div class="pagination">
							<!--<a href="#" class="button previous">Previous Page</a>-->
							<div class="pages">
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<span>&hellip;</span>
								<a href="#">20</a>
							</div>
							<a href="#" class="button next">Next Page</a>
						</div>

				</div>
			</div>

		
				<!-- Recent Posts -->
					<section class="box recent-posts">
						<header>
							<h2>Recent Posts</h2>
						</header>
						<ul>
							<li><a href="#">Lorem ipsum dolor</a></li>
							<li><a href="#">Feugiat nisl aliquam</a></li>
							<li><a href="#">Sed dolore magna</a></li>
							<li><a href="#">Malesuada commodo</a></li>
							<li><a href="#">Ipsum metus nullam</a></li>
						</ul>
					</section>

				<!-- Recent Comments -->
					<section class="box recent-comments">
						<header>
							<h2>Recent Comments</h2>
						</header>
						<ul>
							<li>case on <a href="#">Lorem ipsum dolor</a></li>
							<li>molly on <a href="#">Sed dolore magna</a></li>
							<li>case on <a href="#">Sed dolore magna</a></li>
						</ul>
					</section>

		</div>
	</div>
</section>
		
<?php get_footer(); ?>  