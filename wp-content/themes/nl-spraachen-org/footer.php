<?php get_template_part('partials/related', 'articles'); ?>

<?php if ( is_active_sidebar( 'footer' ) ) : ?>

<div class="row">
    <div class="col-md-12">
	<?php dynamic_sidebar('footer'); // Adjust using Menus in Wordpress Admin ?>
    </div>
</div>

<?php endif; ?>
<footer id="footer" role="contentinfo" class="clearfix">
    <div class="footer-links-list row">
	<div class="col-md-12">
	    <?php wp_nav_menu(array('theme_location' => 'service-menu', 'menu_class' => 'footer-menu left', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
	</div>
    </div>
    <div class="row">
	<div class="col-md-12">
	    <h4 class="collapseHeadline">
		<a data-toggle="collapse" data-parent="#accordion" href="#sitemap" aria-expanded="true" aria-controls="collapseOne">
		    <?php _e('Sitemap'); ?>
		</a>
	    </h4>
	    <div id="sitemap" class="footer-sitemap collapse">
		<?php wp_nav_menu(array('theme_location' => 'main_nav', 'menu_class' => 'footer-main-menu clearfix', 'container' => '', 'fallback_cb' => 'my_menu')); ?>
	    </div>
	</div>
    </div>
        <div class="footer-links row">  
	<div class="col-md-6 col-xs-12">
	    <?php
	    wp_nav_menu(array('theme_location' => 'footer_links', 'menu_class' => 'menu clearfix'));
	    ?>
	</div>
	<div class="col-md-6 col-xs-12">
	    <!-- hier noch ein Custom-post-type für die Adresse -->
	    <address>
		&copy; Sprachenakademie Aachen gGmbH, Buchkremerstr. 6, 52062 Aachen, Germany
	    </address>
	</div>
    </div>
</footer>
</div><!-- end main -->
<div class="credits container">
    
    <p class="s text-right">
    <a href="http://320press.com" id="credit320" title="By the dudes of 320press">320press</a>
</p>
</div>
<div class="scroll-to-top"><i class="fa fa-angle-up fa-2x"></i></div><!-- .scroll-to-top -->

<?php wp_footer(); // js scripts are inserted using this function ?>


</body>

</html>