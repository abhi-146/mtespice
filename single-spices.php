<?php
//Single-spices.php
get_header();
?>

<style>
.mteheader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.mtelogo {
    display: flex;
    align-items: center;
}

.mtelogo img {
    height: 80px;
    margin-right: 30px;
}

.mtenav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.mtenav ul li {
    position: relative;
    margin-right: 20px;
}

.mtenav ul li a {
    text-decoration: none;
    color: #333;
}

.mtenav ul li .mte-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.mtenav ul li:hover .mte-dropdown {
    display: block;
}

.mtehero img {
    width: 100%;
    height: auto;
    filter: brightness(1.0);
}

.mtemain-content {
    flex: 2;
    padding: 20px;
}

.mtemain-content h1 {
    font-size: 24px;
    color: #4d2c91;
}

.mtemain-content h2 {
    font-size: 30px;
    color: #4d2c91;
}

.mtemain-content p {
    line-height: 1.6;
    color: #333;
}

.mtemain-content table.mte-specifications {
    color: black;
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.mtemain-content table.mte-specifications th, 
.mtemain-content table.mte-specifications td {
    border: 1px solid #a3dd97;
    padding: 10px;
    text-align: left;
}

.mtemain-content table.mte-specifications th {
    background-color: #2c914e;
    color: #fff;
}

.mtemain-content table.mte-specifications tr:nth-child(even) {
    background-color: #f9f9f9;
}

.mtemain-content table.mte-specifications tr:nth-child(odd) {
    background-color: #e9f9e9;
}

.mtebest-selling-products {
    text-align: center;
    padding: 40px 20px;
    background-color: #fff;
    margin: 20px auto;
    max-width: 1200px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.mtebest-selling-products h2 {
    font-size: 24px;
    color: #4d2c91;
    margin-bottom: 20px;
}

.mtebest-selling-products p {
    font-size: 16px;
    color: #333;
    margin-bottom: 40px;
}

.mteproducts {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.mteproduct {
    flex: 1 1 calc(33.333% - 20px);
    box-sizing: border-box;
    margin: 10px;
    text-align: center;
}

.mteproduct img {
    width: 40%;
    height: auto;
    border-radius: 8px;
}

.mteproduct p {
    margin-top: 10px;
    font-size: 16px;
    color: #4d2c91;
}

</style>

<div class="mtehero">
<?php
$thumbnail_id = get_post_thumbnail_id();
$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'full' )[0];
$alt_text = get_the_title();
?>
<img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>">
</div>
<div class="mtecontainer">
    <div class="mtemain-content">
        <h2>Overview of <?php echo $alt_text;?></h2>
        <p><b><?php echo get_field('tagline'); ?></b></p>
        <p><?php echo get_field('main_content'); ?></p>
        <h4><b>NEW CROP: <?php echo get_field('new_corp'); ?></b><br>
            <b>HSN CODE: <?php echo get_field('hsn_code'); ?></b>
        </h4> 
        <h2>Java Peanuts Specifications:</h2>  
        <table class="mte-specifications">
            <tr>
                <th>Properties</th>
                <th>Values & Limits</th>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><?php echo get_field('product_name'); ?></td>
            </tr>
            <tr>
                <td>Counts Per Ounce</td>
                <td><?php echo get_field('count_per_ounce'); ?></td>
            </tr>
            <tr>
                <td>Moisture</td>
                <td><?php echo get_field('moisture'); ?></td>
            </tr>
            <tr>
                <td>Cleaning</td>
                <td><?php echo get_field('cleaning'); ?></td>
            </tr>
            <tr>
                <td>Oil Content</td>
                <td><?php echo get_field('oil_content'); ?></td>
            </tr>
            <tr>
                <td>Place of Origin</td>
                <td><?php echo get_field('place_of_origin'); ?></td>
            </tr>
            <tr>
                <td>Foreign Material</td>
                <td><?php echo get_field('foreign_material'); ?></td>
            </tr>
            <tr>
                <td>Aflatoxin</td>
                <td><?php echo get_field('aflatoxin'); ?></td>
            </tr>
            <tr>
                <td>Shape</td>
                <td><?php echo get_field('shape'); ?></td>
            </tr>
        </table>
        <h2>Packaging details:</h2>  
        <table class="mte-specifications">
            <tr>
                <th>TYPES OF BAGS</th>
                <th>QUANTITY</th>
            </tr>
            <tr>
                <td>Jute Bag</td>
                <td><?php echo get_field('jute_bag'); ?><</td>
            </tr>
            <tr>
                <td>PP Bag</td>
                <td><?php echo get_field('pp_bag'); ?></td>
            </tr>
            <tr>
                <td>Vacuum Pack</td>
                <td><?php echo get_field('vacuum_pack'); ?></td>
            </tr>
        </table>
        <h2>Container Capacity:</h2>
        <table class="mte-specifications">
            <tr>
                <th>TYPE OF CONTAINER</th>
                <th>QUANTITY</th>
            </tr>
            <tr>
                <td>20' FT Container</td>
                <td><?php echo get_field('20_ft_container'); ?></td>
            </tr>
            <tr>
                <td>40' FT Container</td>
                <td><?php echo get_field('40_ft_container'); ?></td>
            </tr>
        </table>
        <h2>Benefits and Uses:</h2>
        <p><?php echo get_field('benefits_and_uses'); ?></p>
    </div>
</div>

<?php get_footer() ?>
