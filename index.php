<?php get_header(); ?>
<main id="main" class="site-main post-list">
    <header class="page-header">
        <h1><?php single_post_title(); ?></h1>
    </header>
    <?php
    if (have_posts()):
        // Load posts loop.
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content/content');
        }
    ?>
    <footer class="post-list-footer">
        <?php posts_nav_link(); ?>
    </footer>
    <?php else: ?>
        <em>No posts found.</em>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
