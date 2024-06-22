<?php 
// Get the uploads directory info
$upload_dir = wp_upload_dir();
$parallax_image = $upload_dir['baseurl'] . '/images/parallax.jpg';
?>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
    - primary meta tags
  -->
  <title>MTE Spices</title>
  <meta name="title" content="MTE Spices - Premium Quality Spices from Around the World">
  <meta name="description"
    content="Discover premium quality spices sourced from around the world with MTE Spices. Fast, secure, and reliable delivery.">
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Boxicon Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <?php wp_head(); ?>

  
  <link rel="shortcut icon" href="" type="image/svg+xml">



  <!-- /* Custom CSS for parallax effect */ -->

  <style>
    .parallax {
      background-image: url('<?php echo $parallax_image; ?>');
      height: 400px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      z-index: -9999;
    }

    .parallax-content {
      position: relative;
      z-index: 2;
      color: white;
      text-align: center;
      padding: 200px 20px;

    }

    .parallax-content h2 {
      margin: 0;
      font-size: 3rem;
    }

    .parallax-content p {
      font-size: 1.5rem;
    }
  </style> 

</head>
<body <?php body_class(); ?> id="top">
<div class="preload" data-preaload></div>

<header class="header" data-header>
    <div class="container">

      <a href="<?php echo get_site_url();?>" class="logo">
        <img src="<?php echo $upload_dir['baseurl'] . '/images/spicy_logo.png'?>" width="110" height="50" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="<?php echo get_site_url();?>" class="logo">
          <img src="<?php echo $upload_dir['baseurl'] . '/images/spicy_logo.png'?>" width="160" height="50" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="<?php echo site_url(); ?>/" class="navbar-link hover-underline active">

              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo site_url(); ?>/about-us/" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>
          <li class="navbar-item">
            <a href="<?php echo site_url(); ?>/products/" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Products</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo site_url(); ?>/all-blogs/" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Our Blog</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="<?php echo site_url(); ?>/contact/" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
          MTE Exim Pvt Ltd<br>
                19, Armenian Street, 4th Floor, Suite No 513,<br>
                Kolkata – 700001, India<br>
                Mobile : +91 97487 25155 
          </address>



          <a href="mailto:xyz.com" class="body-4 sidebar-link">info@mtespice.com</a>


        </div>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>