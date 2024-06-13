<?php
// single-blogs.php

get_header(); 

if (isset($_GET['post_id'])) {
    $post_id = intval($_GET['post_id']);
    $post = get_post($post_id);

    if ($post && $post->post_type == 'blog') {
        setup_postdata($post);
        ?>
        <div class="single-post-content">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                <span class="post-category"><?php echo get_the_category_list(', '); ?></span>
            </div>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
        wp_reset_postdata();
    } else {
        echo 'Post not found.';
    }
} else {
    echo 'Invalid post ID.';
}

get_footer();
?>
