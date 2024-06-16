<?php 
// Get the uploads directory info
$upload_dir = wp_upload_dir();

// Generate the full URL to the image
$image_url = $upload_dir['baseurl'] . '/images/badge-1.png';
$hr_slider_1 = $upload_dir['baseurl'] . '/images/hr-slider-1.jpg';
$hr_slider_pulses = $upload_dir['baseurl'] . '/images/hero-pulses.jpg';
$hr_slider_nuts = $upload_dir['baseurl'] . '/images/hero-nuts.jpg';
$img_pattern = $upload_dir['baseurl'] . '/images/img-pattern.svg';
$badge2bg = $upload_dir['baseurl'] . '/images/img-pattern.svg';
get_header(); 
?>

<style>
  
  .service-card .has-before::before {
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 140px;
    height: 100%;
    background-image: url(<?php echo $img_pattern?>);
    background-position: center;
    background-size: cover;
    background-repeat: repeat;
    transition: var(--transition-2);
    transition-delay: 0;
    z-index: -1;
    will-change: transform;
  }
  
  .about .abs-img-1::before {
    top: 0;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 140px;
    background-image: url(<?php echo $img_pattern?>);
    background-repeat: repeat;
  }
  .about .abs-img-2::before {
    inset: 0;

    background-image: url(<?php echo $badge2bg?>);
    background-repeat: no-repeat;
    background-size: contain;
    animation: rotate360 15s linear infinite;
  }

  .grid-list.below-hero {
    grid-template-columns: repeat(3, 0.3fr);
    position: relative;
    left: 50px;
  }
</style>


      <!-- 
        - #HERO
      -->
<section class="hero text-center" aria-label="home" id="home">

<ul class="hero-slider" data-hero-slider>
  <li class="slider-item active" data-hero-slider-item>
    <div class="slider-bg">
      <img src="<?php echo esc_url($hr_slider_1); ?>" width="1880" height="950" alt="" class="img-cover">
    </div>
    <p class="label-2 section-subtitle slider-reveal">Unlocking Global Spice Treasures</p>
    <h1 class="display-1 hero-title slider-reveal">
      Discover exotic flavors <br>
      with Mte Spice
    </h1>
    <a href="<?php echo get_site_url() . '/all-spices'; ?>" class="btn btn-primary slider-reveal">
      <span class="text text-1">Explore Now</span>
      <span class="text text-2" aria-hidden="true">Explore Now</span>
    </a>
  </li>

  <li class="slider-item" data-hero-slider-item>
    <div class="slider-bg">
      <img src="<?php echo esc_url($hr_slider_pulses); ?>" width="1880" height="950" alt="" class="img-cover" style="opacity: 0.1;">
    </div>
    <p class="label-2 section-subtitle slider-reveal">Unveiling the World of Pulses</p>
    <h1 class="display-1 hero-title slider-reveal">
      Savor the richness of global pulses <br>
      with Mte Spice
    </h1>
    <a href="<?php echo get_site_url() . '/all-pulses'; ?>" class="btn btn-primary slider-reveal">
      <span class="text text-1">Explore Now</span>
      <span class="text text-2" aria-hidden="true">Explore Now</span>
    </a>
  </li>


  <li class="slider-item" data-hero-slider-item>
    <div class="slider-bg">
      <img src="<?php echo esc_url($hr_slider_nuts); ?>" width="1880" height="950" alt="" class="img-cover" style="opacity: 0.1;">
    </div>
    <p class="label-2 section-subtitle slider-reveal">Exploring Global Nut Delights</p>
    <h1 class="display-1 hero-title slider-reveal">
      Indulge in the world's finest nuts <br>
      with Mte Spice
    </h1>
    <a href="<?php echo get_site_url() . '/all-nuts'; ?>" class="btn btn-primary slider-reveal">
      <span class="text text-1">Explore Now</span>
      <span class="text text-2" aria-hidden="true">Explore Now</span>
    </a>
  </li>
</ul>


        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

      </section>

      
      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <p class="section-subtitle label-2">Flavors For Royalty</p>

          <h2 class="headline-1 section-title" style="color: black">We Offer Premium Spices</h2>

          <p class="section-text" style="color: black">
          Discover the rich, aromatic, and flavorful world of spices. Our spices are sourced from the finest farms and meticulously processed to bring you the best in quality and taste.

          </p>

          <ul class="grid-list below-hero">

<li>
  <a href="<?php echo esc_url(get_site_url() . '/spices'); ?>" class="event-card has-before hover:shine">
    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
      <img src="<?php echo $upload_dir['baseurl'] . '/product_images/spices-collage.png'; ?>" width="350" height="450" loading="lazy" alt="<?php the_title_attribute(); ?>" class="img-cover">
    </div>
    <div class="card-content">
      <h3 class="card-title title-2 text-center" style="margin: 20px;">
        <?php echo esc_html('Spices'); ?>
      </h3>
    </div>
  </a>
</li>

<li>
  <a href="<?php echo esc_url(get_site_url() . '/all-pulses'); ?>" class="event-card has-before hover:shine">
    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/photo-collage-pulses.png'; ?>" width="350" height="450" loading="lazy" alt="<?php the_title_attribute(); ?>" class="img-cover">
    </div>
    <div class="card-content">
      <h3 class="card-title title-2 text-center" style="margin: 20px;">
        <?php echo esc_html('Pulses'); ?>
      </h3>
    </div>
  </a>
</li>

<li>
  <a href="<?php echo esc_url(get_site_url() . '/all-oil-seeds'); ?>" class="event-card has-before hover:shine">
    <div class="card-banner img-holder" style="--width: 350; --height: 450;">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/oilseeds-collage.png'; ?>" width="350" height="450" loading="lazy" alt="<?php the_title_attribute(); ?>" class="img-cover">
    </div>
    <div class="card-content">
      <h3 class="card-title title-2 text-center" style="margin: 20px;">
        <?php echo esc_html('Nuts'); ?>
      </h3>
    </div>
  </a>
</li>


</ul>

          <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-1.png'?>" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-2.png'?>" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>

      <!-- Parallax Section -->
      <section class="parallax">
        <div class="parallax-content">
          <h1 style="font-size: 40px;">Global Exporters of Premium Quality Spices</h1>
        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">Leading the Spice Export Industry</h2>

            <p class="section-text">
            MTE EXIM PRIVATE LIMITED, established in 2005, has rapidly grown to become a leading exporter of spices in India. With a commitment to quality and excellence, the company has achieved remarkable success, boasting a turnover of $50 million. Renowned for its premium spices, MTE EXIM PRIVATE LIMITED continues to set the benchmark in the industry, delivering the rich flavors of India to markets worldwide.
            </p>

            <a href="<?php echo site_url(); ?>/about" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="<?php echo $upload_dir['baseurl'] . '/images/large-about.jpg'?>" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="<?php echo $upload_dir['baseurl'] . '/images/small-about.jpg'?>" width="285" height="285" loading="lazy" alt="" class="w-100">
            </div>

          </figure>

          <!-- <img src="<?php// echo $upload_dir['baseurl'] . '/images/shape-3.jpg'?>" width="197" height="194" loading="lazy" alt="" class="shape"> -->

        </div>
      </section>

      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="<?php echo $upload_dir['baseurl'] . '/images/red_chilli.png'?>" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="<?php echo $upload_dir['baseurl'] . '/images/badge-1.png'?>" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Special Spice</p>

            <h2 class="headline-1 section-title" style="color: black;">Red Chilli</h2>

            <p class="section-text" style="color: black;">
              Red Chilli is known for its vibrant color and spicy flavor. It is a key ingredient in many cuisines worldwide, adding heat and enhancing the taste of dishes. Whether used fresh, dried, or powdered, red chilli brings a fiery kick to your meals.
            </p>


            <a href="<?php echo site_url(); ?>/products" class="btn btn-primary">
              <span class="text text-1">View More</span>

              <span class="text text-2" aria-hidden="true">View More</span>
            </a>

          </div>
        </div>

        <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-4.png'?>" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-9.png'?>" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

      </section>


      <!-- 
    - #TESTIMONIALS
-->

      <section class="section-container section testi text-center has-bg-image"
        style="background-image: url('<?php echo $upload_dir['baseurl'] . '/images/testimonial-bg.jpg'?>')" aria-label="testimonials">
        <div class="testimonial">
          <div class="testi-content">
            <div class="slides">
              <div class="slide">
                <img src="<?php echo $upload_dir['baseurl'] . '/images/testi-avatar.jpg'?>" alt="" class="image" />
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ad quisquam officia qui esse
                  dolorum soluta modi voluptatibus reiciendis enim porro laudantium ipsum, sunt aliquam consequatur
                  excepturi architecto omnis veniam.</p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                  <span class="name">David Beckhem</span>
                </div>
              </div>
              <!-- Add more slides here -->
              <div class="slide">
                <img src="<?php echo $upload_dir['baseurl'] . '/images/testimonial-1.jpg'?>" alt="" class="image" />
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque illum quam iusto ipsa perferendis
                  repellat, consequatur inventore rerum corrupti deserunt voluptate nisi quod obcaecati ab, reiciendis
                  ratione odit. Sapiente, tempora?</p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                  <span class="name">John Doe</span>
                </div>
              </div>
              <div class="slide">
                <img src="<?php echo $upload_dir['baseurl'] . '/images/testimonial-2.jpg'?>" alt="" class="image" />
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque illum quam iusto ipsa perferendis
                  repellat, consequatur inventore rerum corrupti deserunt voluptate nisi quod obcaecati ab, reiciendis
                  ratione odit. Sapiente, tempora?</p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                  <span class="name">Willy Williams</span>
                </div>
              </div>
              <div class="slide">
                <img src="<?php echo $upload_dir['baseurl'] . '/images/testimonial-3.jpg'?>" alt="" class="image" />
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque illum quam iusto ipsa perferendis
                  repellat, consequatur inventore rerum corrupti deserunt voluptate nisi quod obcaecati ab, reiciendis
                  ratione odit. Sapiente, tempora?</p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                  <span class="name">Jackie Chan</span>
                </div>
              </div>
              <div class="slide">
                <img src="<?php echo $upload_dir['baseurl'] . '/images/testimonial-4.jpg'?>" alt="" class="image" />
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque illum quam iusto ipsa perferendis
                  repellat, consequatur inventore rerum corrupti deserunt voluptate nisi quod obcaecati ab, reiciendis
                  ratione odit. Sapiente, tempora?</p>
                <i class='bx bxs-quote-alt-left quote-icon'></i>
                <div class="details">
                  <span class="name">Christopher Nolan</span>
                </div>
              </div>
            </div>
            <!-- Navigation controls -->
            <div class="navigation">
              <button class="prev">&#10094;</button>
              <button class="next">&#10095;</button>
            </div>
          </div>
        </div>
      </section>


      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
  <div class="container">

    <p class="section-subtitle label-2">Why Choose Us</p>

    <h2 class="headline-1 section-title">Our Strength</h2>

    <ul class="grid-list">

<li class="feature-item">
  <div class="feature-card">

    <div class="card-icon">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/spices.png'; ?>" width="100" height="80" loading="lazy" alt="Premium Quality Spices Icon">
    </div>

    <h3 class="title-2 card-title">Premium Quality Spices</h3>

    <p class="label-1 card-text">We source the finest spices from around the world to ensure the highest quality and freshness.</p>

  </div>
</li>

<li class="feature-item">
  <div class="feature-card">

    <div class="card-icon">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/organic.png'; ?>" width="100" height="80" loading="lazy" alt="Organic and Sustainable Icon">
    </div>

    <h3 class="title-2 card-title">Organic and Sustainable</h3>

    <p class="label-1 card-text">Our products are certified organic and sustainably sourced, supporting eco-friendly practices.</p>

  </div>
</li>

<li class="feature-item">
  <div class="feature-card">

    <div class="card-icon">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/think-outside-the-box.png'; ?>" width="100" height="80" loading="lazy" alt="Unique Blends Icon">
    </div>

    <h3 class="title-2 card-title">Unique Blends</h3>

    <p class="label-1 card-text">We offer a variety of unique spice blends that add a special touch to your culinary creations.</p>

  </div>
</li>

<li class="feature-item">
  <div class="feature-card">

    <div class="card-icon">
      <img src="<?php echo $upload_dir['baseurl'] . '/images/support.png'; ?>" width="100" height="80" loading="lazy" alt="Expert Sourcing Icon">
    </div>

    <h3 class="title-2 card-title">Expert Sourcing</h3>

    <p class="label-1 card-text">Our team of experts meticulously selects and sources the best spices from trusted growers.</p>

  </div>
</li>

</ul>


    <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-7.png'?>" width="208" height="178" loading="lazy" alt="Decorative Shape" class="shape shape-1">

    <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-8.png'?>" width="120" height="115" loading="lazy" alt="Decorative Shape" class="shape shape-2">

  </div>
</section>


      <!-- 
        - #BLOG
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <h2 class="section-title headline-1 text-center">Recent blogs</h2>

          <?php

// Fetch all posts of type 'blog'
$args = array(
    'post_type' => 'blogs',
    'posts_per_page' => -1
);
$blog_posts = new WP_Query($args);

if ($blog_posts->have_posts()) : ?>
    <ul class="grid-list">
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


          <a href="<?php echo site_url(); ?>/all-blogs" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>

<?php get_footer(); ?>
