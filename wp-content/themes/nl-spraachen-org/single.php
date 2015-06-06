<?php get_header(); ?>
<div class="row site-content clearfix posts thin-line">

    <div class="col-md-8 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post();
        
        get_template_part('partials/article');

            endwhile; ?>			
			<?php get_template_part('partials/paging');?>	
        <?php else : ?>

            <article id="post-not-found">
                <section class="post_content">
                    <p><?php _e("Sorry, but the requested resource was not found on this site.", "nl-spraachen-org"); ?></p>
                </section>
                <footer>
                </footer>
            </article>

        <?php endif; ?>

    </div> <!-- end #main -->

    <?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>