<?php get_header(); ?>

<div class="row site-content clearfix posts thin-line">

    <div class="col-md-8 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        get_template_part('partials/article','list');
        
        endwhile; ?>	

            <?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>

                <?php wp_bootstrap_page_navi(); // use the page navi function ?>

            <?php } else { // if it is disabled, display regular wp prev & next links ?>
                <nav class="wp-prev-next">
                    <ul class="pager">
                        <li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "nl-spraachen-org")) ?></li>
                        <li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "nl-spraachen-org")) ?></li>
                    </ul>
                </nav>
            <?php } ?>		

        <?php else : ?>

            <?php get_template_part('partials/article','404');?>

        <?php endif; ?>

    </div> <!-- end #main -->

    <?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->

<?php get_footer(); ?>