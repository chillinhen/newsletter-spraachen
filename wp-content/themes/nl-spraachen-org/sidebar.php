<div id="sidebar1" class="sidebar col-sm-4" role="complementary">

    <?php if (is_active_sidebar('sidebar1')) : ?>

        <?php dynamic_sidebar('sidebar1'); ?>

    <?php endif; ?>
    
    <?php if (current_user_can('read')) : ?>
        <?php get_sidebar('intern'); ?>
    <?php endif; ?>
</div>