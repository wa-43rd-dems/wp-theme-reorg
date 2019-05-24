<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/post_header', 'page'); ?>
    <?php the_content(); ?>
    <footer class="post-footer">
    </footer>
</article>
