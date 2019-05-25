<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/post_header', 'page'); ?>
    <div class="content-container">
        <?php the_content(); ?>
    </div>
    <footer class="post-footer">
    </footer>
</article>
