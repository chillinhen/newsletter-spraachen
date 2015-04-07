<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <header>
	<div class="page-header"><h2 class="page-title" itemprop="headline"><?php the_title(); ?></h2></div>
	<?php the_post_thumbnail('wpbs-featured'); ?>

    </header> <!-- end article header -->

    <section class="post_content clearfix" itemprop="articleBody">

	<?php the_content('...'); ?>

    </section> <!-- end article section -->

    <footer>
	<p class="meta clearfix">
	    <span class="pull-left"><?php _e("Posted", "spraachen-org"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time></span>
	    <span class="pull-right"><?php get_template_part('partials/edit', 'infos'); ?></span>
	</p>
	
    </footer> <!-- end article footer -->
    
    
</article> <!-- end article -->