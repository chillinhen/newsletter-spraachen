<?php get_header(); ?>
			
<div class="row site-content clearfix posts thin-line">
	<div class="col-md-8 clearfix" role="main">
				<?php if (current_user_can('read')) : ?>
					<!-- show posts -->
					<?php query_posts(array('category__not_in' => array(21)));?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					 <?php get_template_part('partials/article','page');?>	
					
					<?php endwhile; ?>	
					
					<?php get_template_part('partials/paging');?>	
					
					<?php else : ?>
					
					<?php get_template_part('partials/article','404');?>	
					
					<?php endif; ?>
				<?php else : ?>
				<?php
				$args = array(
					'posts_per_page' => 1,
					'category_name' => 'welcome',
					'orderby' => 'date',
					'order' => 'DESC'
				);
				$custom_query = new WP_Query( $args );
				
				if ( $custom_query->have_posts() ):
				    while ( $custom_query->have_posts() ) :
				        $custom_query->the_post();
				
				        #echo $message . '<hr/>';
				       get_template_part('partials/article','list');
				
				    endwhile;
				else:
				    get_template_part('partials/article','404');
				endif;
				
				wp_reset_query();
				
				?>
				<?php endif; ?>
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>