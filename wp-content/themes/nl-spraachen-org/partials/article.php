<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                    <header>
                        <hgroup class="page-header">
                      	<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                      	<!-- Platzhalter ZweitÜberschrift -->
                      	</h1>
                            <?php 
                                $subhead = get_field('subheadline');
                                if($subhead) : ?>
                                <h2><?php the_field('subheadline'); ?></h2>
                            <?php endif; ?>
                            
                      	</hgroup>
                        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('wpbs-featured'); ?></a>
                    </header> <!-- end article header -->
                            
                    <section class="post_content clearfix">
                               

                                <?php the_content(__("Read more &raquo;", "nl-spraachen-org")); ?>
                            </section> <!-- end article section -->

                    <footer>
                        <?php if (current_user_can('read')) : ?>
						 <p class="meta"><?php _e("Posted", "nl-spraachen-org"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('d.F Y', '', '', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
                        <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags", "nl-spraachen-org") . ':</span> ', ' ', ''); ?></p>
<?php endif; ?>
                    </footer> <!-- end article footer -->

                </article> <!-- end article -->