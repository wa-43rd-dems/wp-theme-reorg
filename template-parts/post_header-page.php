<header class="post-header page-header">
    <div class="feature-image-and-desc">
        <?php the_post_thumbnail(); ?>
        <div class="feature-image-mask">
            <?php get_template_part('template-parts/post_title', $post_title_slug); ?>
        </div>
    </div>
<?php
    if (has_nav_menu('actions-menu')) {
        reorg_actions_menu('actions-menu');
    }
?>
</header>
