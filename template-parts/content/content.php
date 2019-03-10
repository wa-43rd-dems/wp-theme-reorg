<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="post-date"><?php the_date(); ?></p>
    </header>
    <?php reorg_try(has_excerpt(), 'the_excerpt', 'the_content'); ?>
    <footer class="post-footer">
        <?php if (has_excerpt()): ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
        <?php endif; ?>
    </footer>
</article>
