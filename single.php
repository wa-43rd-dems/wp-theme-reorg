<?php get_header(); ?>
<main id="main" class="site-main single">
    <header class="back-to-list">
        <?php reorg_the_posts_page('« Back to '); ?>
    </header>
    <?php
    // Load posts loop.
    while (have_posts()):
        the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post-header">
            <h1><?php the_title(); ?></h1>
            <p class="post-header-meta">
                Posted on <?php the_date(); ?> by <?php the_author_meta('display_name'); ?>.
            </p>
        </header>
        <?php the_content(); ?>
        <footer class="post-footer">
            <nav class="post-nav-container" aria-label="Post Navigation">
                <ul class="post-nav">
                    <li class="post-nav-prev"><?php previous_post_link(); ?></li>
                    <li class="post-nav-all">
                        <?php reorg_the_posts_page('Back to '); ?>
                    </li>
                    <li class="post-nav-next"><?php next_post_link(); ?></li>
                </ul>
            </nav>
        </footer>
    </article>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
