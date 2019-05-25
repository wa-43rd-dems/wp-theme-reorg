<?php get_header(); ?>
<main id="main" class="single <?php echo $main_classes; ?>">
    <?php
    // Load posts loop.
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content/content', 'page');
    }
    ?>
</main>
<?php get_footer(); ?>
