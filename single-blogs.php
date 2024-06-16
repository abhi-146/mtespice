<?php
// single-blog.php

get_header();
?>

<style>
    /* single-blog.css */

    body {
        height: 250vh !important; 
    }

.single-post-content {
    margin: 0 auto;
    padding-top: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    font-family: Arial, sans-serif;
    position: relative;
    top: 150px;
    margin-bottom: 125px;
}

.single-post-content h1 {
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
    text-align: center; 
}

.post-meta {
    font-size: 14px;
    color: #777;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.post-meta time {
    font-style: italic;
}

.post-meta .post-category {
    background-color: #4d2c91;
    color: #fff;
    padding: 5px 10px;
    border-radius: 4px;
}

.post-thumbnail {
    margin-bottom: 20px;
    text-align: center;
}

.post-thumbnail img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.post-content {
    font-size: 18px;
    line-height: 1.6;
    color: #333;
}

.post-content p {
    margin-bottom: 20px;
}

.post-content a {
    color: #4d2c91;
    text-decoration: none;
    border-bottom: 1px solid #4d2c91;
}

.post-content a:hover {
    color: #333;
    border-bottom: 1px solid #333;
}

</style>
<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $post_id = get_the_ID();
        ?>
        <div class="single-post-content">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
    </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    }
} else {
    echo 'Post not found.';
}


?>
