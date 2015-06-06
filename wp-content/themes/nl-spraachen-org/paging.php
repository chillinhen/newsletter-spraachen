<?php if (function_exists('wp_bootstrap_page_navi')) :// if expirimental feature is active ?>
	
	<?php wp_bootstrap_page_navi(); // use the page navi function ?>
	
<?php else : // if it is disabled, display regular wp prev & next links ?>
	<nav class="wp-prev-next">
		<ul class="pager">
			<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
			<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
		</ul>
	</nav>
<?php endif; ?>	