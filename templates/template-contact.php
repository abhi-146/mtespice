<?php
/*
Template Name: Contact
*/

$upload_dir = wp_upload_dir(); 
get_header(); ?>

<style>

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
}

.left-column, .right-column {
    width: 48%;
}

.map-container {
    text-align: center;
    margin-bottom: 20px;
}

.branches {
    padding: 20px;
    background-color: #f9f9f9;
    border-top: 1px solid #ddd;
    margin-top: 20px;
}

.branches h3 {
    margin-top: 0;
    font-size: 1.5em;
    color: #333;
}

.branches p {
    font-weight: bold;
}

.branches ul {
    list-style: none;
    padding: 0;
    margin-top: 10px;
}

.branches ul li {
    margin-bottom: 5px;
    line-height: 1.6;
}

.branches img {
    width: 20px;
    vertical-align: middle;
    margin-left: 5px;
}

.right-column form {
    max-width: 600px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.right-column form label {
    display: block;
    margin-bottom: 8px;
}

.right-column form input,
.right-column form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.right-column form button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.right-column form button:hover {
    background-color: #45a049;
}

.right-column .success-message,
.right-column .error-message {
    padding: 10px;
    margin-top: 10px;
    border-radius: 4px;
}

.right-column .success-message {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.right-column .error-message {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
</style>

<main>
    <!-- HERO -->
    <section class="hero text-center" aria-label="home" id="home">
        <ul class="hero-slider" data-hero-slider>
            <li class="slider-item active" data-hero-slider-item>
                <div class="slider-bg">
                    <img src="<?php echo $upload_dir['baseurl'] . '/images/hr-slider-2.jpg'?>" width="1880" height="950" alt="" class="img-cover">
                </div>
                <h1 class="display-1 hero-title slider-reveal">
                    Contact Us <br>
                </h1>
            </li>
        </ul>
    </section>

    <div class="container">
        <div class="left-column">
            <h2>Corporate Head Office</h2>
            <p>
                MTE Exim Pvt Ltd<br>
                19, Armenian Street, 4th Floor, Suite No 513,<br>
                Kolkata – 700001, India<br>
                Mobile : +91 97487 25155 <img src="<?php echo $upload_dir['baseurl'] . '/images/India.svg'?>" alt="Indian Flag" style="width: 20px;">
            </p>
        </div>
        <div class="right-column">
            <h2>Contact Form</h2>
<?php
if (function_exists('do_shortcode')) {
    echo do_shortcode('[contact-form-7 id="00b5914" title="Connect With Us"]');
}
?>
        </div>
    </div>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54890.398693318195!2d76.66811669427109!3d30.70012454091395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda045555555%3A0x58f1f0e3324e4f9e!2sUniversal%20Satellite%20Mapping%20Consultants%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1718212897161!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="branches">
        <h3>Branches</h3>
        <p>International Office:</p>
        <ul>
            <li>Asia: Dhaka, Bangladesh <img src="<?php echo $upload_dir['baseurl'] . '/images/bangladesh.png'?>" alt="Bangladesh Flag"></li>
            <li>Europe: Nyodlingsvagen 4N, 191 40, Sollentuna, Sweden <img src="<?php echo $upload_dir['baseurl'] . '/images/Sweden.png'?>" alt="Sweden Flag"></li>
        </ul>
        <p>India Branch Office:</p>
        <ul>
            <li>Unjha (Gujarat)</li>
            <li>Guntur (Andhra Pradesh)</li>
            <li>Jaipur (Rajasthan)</li>
        </ul>
    </div>

</main>

<?php get_footer(); ?>
