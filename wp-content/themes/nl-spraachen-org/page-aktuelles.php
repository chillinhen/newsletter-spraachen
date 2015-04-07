<?php
/*
  Template Name: sak_Aktuelles
 */
?>
<?php get_header(); ?>
<?php //get_template_part('partials/banner', 'oben'); ?>
<div class="row site-content">
    <div class="col-md-12">
	<div class="page-header">
	    <h1><?php _e('Latest News', 'spraachen-org'); ?></h1>
	</div>
	<div id="main"role="main">
	    <?php
	    query_posts(array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => 'aktuelles',
		//'posts_per_page' => 2,
		'orderby' => 'date',
		'order' => 'DESC'
	    ));
	    ?>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    <?php get_template_part('partials/article', 'blog'); ?>


		<?php endwhile; ?>
		<?php if (function_exists('page_navi')) { // if expirimental feature is active   ?>

		    <?php page_navi(); // use the page navi function   ?>

    <?php } else { // if it is disabled, display regular wp prev & next links   ?>
		    <nav class="wp-prev-next">
			<ul class="pager">
			    <li class="previous"><?php next_posts_link(_e('older entries', "spraachen-org")) ?></li>
			</ul>
		    </nav>
		<?php } ?>
	    <?php 	wp_reset_query(); ?>
	    <?php else : ?>
		<?php get_template_part('partials/404'); ?>
<?php endif; ?>
	</div>



    </div>

<?php get_footer(); ?>