<?php 
// Get the uploads directory info
$upload_dir = wp_upload_dir();

// Generate the full URL to the image
$image_url = $upload_dir['baseurl'] . '/images/badge-1.png';
$hr_slider_1 = $upload_dir['baseurl'] . '/images/hr-slider-1.jpg';
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
              with Mtespice
            </h1>



            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Explore Now</span>

              <span class="text text-2" aria-hidden="true">Explore Now</span>
            </a>

          </li>
          
          <!-- just comment them out for slider effect -->

          <!-- <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hr-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Unlocking Global Spice Treasures</p>

            <h1 class="display-1 hero-title slider-reveal">
              Flavors Inspired by <br>
              the Seasons
            </h1>


            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Explore Now</span>

              <span class="text text-2" aria-hidden="true">Explore Now</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hr-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Unlocking Global Spice Treasures</p>

            <h1 class="display-1 hero-title slider-reveal">
              Where every flavor <br>
              tells a story
            </h1>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">Explore Now</span>

              <span class="text text-2" aria-hidden="true">Explore Now</span>
            </a>

          </li> -->

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

          <h2 class="headline-1 section-title" style="color: black">We Offer Top Notch</h2>

          <p class="section-text" style="color: black">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys
            standard dummy text ever.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="<?php echo $upload_dir['baseurl'] . '/images/free.jpg'?>" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="btn-text card-title">
                    <p>Free Shipping</p>
                  </h3>

                  <p class="card-title" style="color: black">Fast,Free Shipping</p>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="<?php echo $upload_dir['baseurl'] . '/images/payment.jpg'?>" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="btn-text card-title">
                    <p>Secure Payment</p>
                  </h3>

                  <p class="card-title" style="color: black">Safe & Secure Payment</p>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="<?php echo $upload_dir['baseurl'] . '/images/carefully.jpg'?>" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="btn-text card-title">
                    <p>Delivered Carefully</p>
                  </h3>

                  <p class="card-title" style="color: black">Carefull Delivery always</p>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="<?php echo $upload_dir['baseurl'] . '/images/ex-service.jpg'?>" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="btn-text card-title">
                    <p>Excellent Service</p>
                  </h3>

                  <p class="card-title" style="color: black">Service beyond care</p>

                </div>

              </div>
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
          <h1 style="font-size: 40px;">Premium Quality Spices from Around the World</h1>
        </div>
      </section>

      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

            <p class="section-text">
              Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
              industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled
              it to make a type specimen book It has survived not only five centuries, but also the leap into.
            </p>

            <a href="#" class="btn btn-primary">
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

          <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-3.jpg'?>" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>

      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="<?php echo $upload_dir['baseurl'] . '/images/special-dish-banner.jpg'?>" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="<?php echo $upload_dir['baseurl'] . '/images/badge-1.png'?>" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Special Spice</p>

            <h2 class="headline-1 section-title" style="color: black;">Black Pepper</h2>

            <p class="section-text" style="color: black;">
              Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
              industrys standard dummy text ever since the when an unknown printer took a galley of type.
            </p>


            <a href="#" class="btn btn-primary">
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
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/spices.png'?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Premium Quality Spices</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/organic.png'?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Organic and Sustainable</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/think-outside-the-box.png'?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Unique Blends</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/support.png'?>" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Customer Support</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

          </ul>

          <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-7.png'?>" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="<?php echo $upload_dir['baseurl'] . '/images/shape-8.png'?>" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>

      <!-- 
        - #BLOG
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Upcoming Event</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/event-3.jpg'?>" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">09/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Food, Flavour</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/event-3.jpg'?>" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">09/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Food, Flavour</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/event-3.jpg'?>" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">09/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Healthy Food</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="<?php echo $upload_dir['baseurl'] . '/images/event-3.jpg'?>" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">09/06/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Recipie</p>

                  <h3 class="card-title title-2 text-center">
                    Flavour so good you’ll try to eat with your eyes.
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>

<?php get_footer(); ?>
