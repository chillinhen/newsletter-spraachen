<?php
/*
  Template Name: NL_Homepage
 */
?>
<?php get_header(); ?>

<div class="row site-content clearfix posts thin-line">

    <div class="col-md-8 clearfix" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); 
        
        get_template_part('partials/article');
        
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

            <article id="post-not-found">
                <header>
                    <h1><?php _e("Not Found", "nl-spraachen-org"); ?></h1>
                </header>
                <section class="post_content">
                    <p><?php _e("Sorry, but the requested resource was not found on this site.", "nl-spraachen-org"); ?></p>
                </section>
                <footer>
                </footer>
            </article>

        <?php endif; ?>

    </div> <!-- end #main -->
    <?php get_sidebar(); // sidebar 2 ?>


</div> <!-- end #content -->

<?php get_footer(); ?>