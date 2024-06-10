
<?php 
$upload_dir = wp_upload_dir(); // or however you get the upload directory
$footer_bg_image = $upload_dir['baseurl'] . '/images/footer-form-bg.png';
$footer_pattern_image = $upload_dir['baseurl'] . '/images/footer-form-pattern.svg';

?>

<style>
.footer-brand {
    position: relative;
    padding: 50px 40px;
    background: var(--smoky-black-1) url('<?php echo $footer_bg_image; ?>');
    background-position: center top;
    background-repeat: repeat;
}

.footer-brand::before,
.footer-brand::after {
    content: "";
    position: absolute;
    top: 0;
    width: 15px;
    height: 100%;
    background-image: url('<?php echo $footer_pattern_image; ?>');
}
</style>

<footer class="footer section has-bg-image text-center"
    style="background-image: url('<?php echo $upload_dir['baseurl'] . '/images/footer-bg.jpg'?>')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after" style="background: var(--smoky-black-1) <?php echo $upload_dir['baseurl'] . '/images/footer-form-bg.png'?>');">>

          <a href="#" class="logo">
            <img src="<?php echo $upload_dir['baseurl'] . '/images/spicy_logo.png'?>" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <address class="body-4">
            Lorem Lipsum XYZ, USA
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">xyz@gmail.com</a>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Get News & Offers</p>

          <p class="label-1">
            Subscribe us & Get <span class="span">25% Off.</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Products</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Our Blog</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline"><i class='bx bxl-facebook-circle'></i> Facebook </a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"><i class='bx bxl-instagram' ></i> Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"><i class='bx bxl-twitter' ></i> Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"><i class='bx bxl-youtube' ></i> Youtube</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline"><i class='bx bxs-map' ></i> Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2024 Spices. All Rights Reserved | Crafted by <a href="xyz.gmail.com"
            target="_blank" class="link">Spices</a>
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>


  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
</body>