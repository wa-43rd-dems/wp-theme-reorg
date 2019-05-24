<header class="post-header page-header">
    <?php
        if (has_post_thumbnail()):
            $feature_img_url = get_the_post_thumbnail_url();
    ?>
        <div class="feature-image-container"
            style="background-image: url('<?php echo $feature_img_url; ?>');">
        </div>
    <?php endif; ?>
    <div class="post-title-container">
        <h1><?php the_title(); ?></h1>
    </div>
</header>
