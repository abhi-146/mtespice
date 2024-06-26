<?php
/*
Template Name: All-Blogs
*/
 
$upload_dir = wp_upload_dir(); 

get_header(); ?>

<style>
    @media (min-width: 768px) {

  .hero{
    min-height: 60vh;
    max-height: 60vh;
  }
}
    </style>

<main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero text-center" aria-label="home" id="home">

                <ul class="hero-slider" data-hero-slider>

                    <li class="slider-item active" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="<?php echo $upload_dir['baseurl'] . '/images/hr-slider-2.jpg'?>" width="1880" height="950" alt=""
                                class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">Explore Insights and Stories</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            Our Blogs <br>
                        </h1>

                        <a href="#grid-list" class="btn btn-primary slider-reveal">
                            <span class="text text-1">Explore Now</span>

                            <span class="text text-2" aria-hidden="true">Explore Now</span>
                        </a>

                    </li>
                </ul>
            </section>

            <!-- 
        - #SPICES
      -->

            <section class="section event bg-black-10" aria-label="event">
                <div class="container">

                <h2 class="section-subtitle label-2 text-center">Discover the Latest Insights and Stories from MTE EXIM</h2>

                <p class="section-text text-center" style="color: black; margin: 30px;">Our blog covers a wide range of topics including the latest trends in the spice industry, health benefits of spices, culinary tips, and much more. Join us as we explore the world of spices and share our knowledge and experiences.</p>


                        <?php
                        // Fetch all posts of type 'blog'
$args = array(
    'post_type' => 'blogs',
    'posts_per_page' => -1
);
$blog_posts = new WP_Query($args);

if ($blog_posts->have_posts()) : ?>
    <ul id="grid-list" class="grid-list">
        <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); 
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_date = get_the_date('Y-m-d');
            $post_permalink = get_permalink();
            $post_image = get_the_post_thumbnail_url($post_id, 'full');
        ?>
            <li>
                <a href="<?php echo $post_permalink; ?>?post_id=<?php echo $post_id; ?>" class="event-card has-before hover:shine">
                    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                        <img src="<?php echo $post_image; ?>" width="350" height="450" loading="lazy" alt="<?php echo esc_attr($post_title); ?>" class="img-cover">
                        <time class="publish-date label-2" datetime="<?php echo $post_date; ?>"><?php echo date('m/d/Y', strtotime($post_date)); ?></time>
                    </div>
                    <div class="card-content">
                        <p class="card-subtitle label-2 text-center"><?php echo esc_html($post_subtitle); ?></p>
                        <h3 class="card-title title-2 text-center"><?php echo esc_html($post_title); ?></h3>
                    </div>
                </a>
            </li>
        <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_postdata(); ?>



                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/shape-1.png'?>" width="246" height="412" loading="lazy" alt="shape"
                        class="shape shape-1 move-anim">
                    <img src="<?php echo $upload_dir['baseurl'] . '/product_images/shape-2.png'?>" width="343" height="345" loading="lazy" alt="shape"
                        class="shape shape-2 move-anim">

                </div>
            </section>
        </article>
    </main>

<?php get_footer(); ?>
