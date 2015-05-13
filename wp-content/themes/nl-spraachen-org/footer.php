<?php get_template_part('partials/related', 'articles'); ?>

<footer id="footer" role="contentinfo" class="clearfix">

        <div class="footer-links row">  
	<div class="col-md-7 col-xs-12">
	    <?php
	    wp_nav_menu(array('theme_location' => 'footer_links', 'menu_class' => 'menu clearfix'));
	    ?>
	</div>
	<div class="col-md-5 col-xs-12 pull-right">
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