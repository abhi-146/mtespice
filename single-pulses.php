<?php
//Single-pulses.php
get_header();
?>

<style>

 
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 80px;
    margin-right: 30px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    position: relative;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
}

nav ul li .dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

nav ul li:hover .dropdown {
    display: block;
}

.hero img {
    width: 100%;
    height: auto;
    filter: brightness(1.0);
}

.main-content {
    flex: 2;
    padding: 20px;
}


h1 {
    font-size: 24px;
    color: #4d2c91;
}

h2 {
    font-size: 30px;
    color: #4d2c91;
    
}

p {
    line-height: 1.6;
    color: #333;
}

table.specifications {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table.specifications th, table.specifications td {
    border: 1px solid #a3dd97;
    padding: 10px;
    text-align: left;
}

table.specifications th {
    background-color: #2c914e;
    color: #fff;
}

table.specifications tr:nth-child(even) {
    background-color: #f9f9f9;
}

table.specifications tr:nth-child(odd) {
    background-color: #e9f9e9;
}
.best-selling-products {
    text-align: center;
    padding: 40px 20px;
    background-color: #fff;
    margin: 20px auto;
    max-width: 1200px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.best-selling-products h2 {
    font-size: 24px;
    color: #4d2c91;
    margin-bottom: 20px;
}

.best-selling-products p {
    font-size: 16px;
    color: #333;
    margin-bottom: 40px;
}

.products {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.product {
    flex: 1 1 calc(33.333% - 20px);
    box-sizing: border-box;
    margin: 10px;
    text-align: center;
}

.product img {
    width: 40%;
    height: auto;
    border-radius: 8px;
}

.product p {
    margin-top: 10px;
    font-size: 16px;
    color: #4d2c91;
}

 

</style>

<div class="hero">
    <div class="hero-img">
    <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array( 'alt' => 'Java Peanuts' ) ); ?>
    </div>

        </div>
        <div class="container">
            <div class="main-content">
                <h2>Overview of Java Peanuts</h2>
                <p><b>Leading Java Peanuts Exporters, Manufacturers & Suppliers From India</b></p>
                <p>Java peanuts kernel is round type pinkish color available in small size.
                    its taste is good due to this it’s very demanded for confectionery and peanut butter industry. 
                    we supply java peanuts kernels, which are enriched with protein, dietary fiber, iron, magnesium, etc. 
                    to keep a strict check on the quality of the products, we have hired professional quality analysts 
                    having rich domain experience. we are a quality driven firm and thus make sure that the material used for 
                    manufacturing complies with high quality standards. java peanut are one of the most preferred snacking food items of people in india.
                     we can have peanuts in the morning, evening or night. peanuts are not only eaten as a snack, 
                     but they are also added in a large number of food items. there is no doubt about the fact that peanuts are and 
                     will remain the favourite snacking items of india for a long time. now, when it comes to peanuts, we have a 
                     wide range of peanuts. one of the most popular of all the variants is the indian java peanuts kernel. 
                     VAD Industries one of the best java peanuts kernels exporters in the country, has been supplying a vast 
                     volume of these peanut to a host of clients.</p>
                     <p>Java peanuts are known as groundnuts. java peanuts has less oil and less fat content. 
                        java peanut with the least moistured and the least aflatoxins levels, 
                        our peanuts meet the international quality standards. vad industries offering java peanuts 80/90,
                         java peanuts 60/70 & java peanuts 50/60, peanuts java 80/90, peanuts java 50/60, organic java 
                         peanuts, sortex cleaned with moisture 8% max available in india. find kacang tanah manufacturers in
                          india, kacang tanah suppliers in india, kacang tanah exporters in india, kacang tanah importers in 
                          india, groundnut kernels manufacturers in india, groundnut kernels suppliers in india, groundnut 
                          kernels exporters in india, groundnut kernels importers in india, java peanuts manufacturers in 
                          india, java peanuts suppliers in india, java peanuts exporters in india, java peanuts importers 
                          in india, peanuts manufacturers in india, peanuts suppliers in india, peanuts exporters in india
                          , peanuts importers in india, panthawada groundnut kernels, mathadi raw peanuts, panthawada peanuts 
                          kernels, gujarat, rajkot, junagadh, mundra port, pipavav port in india and around the world. 
                          VAD Industries private limited regularly exports to malaysia, indonesia, philippines, thailand
                          , vietnam, saudi arabia, united arab emirates, morocco, kuwait, qatar, uae, usa, singapore, t
                          urkey, russia, algeria, jordan, georgia, armenia, yemen, oman, south korea, egypt, china,
                           bahrain, tunisia, afghanistan, south africa, united kingdom. java peanuts are available around the year.</p>
                <h4><b>NEW CROP: MAY TO JUNE & OCTOBER TO NOVEMBER</b><br>
                    <b>HSN CODE: 12024210</b>
                </h4> 
                <h2>Java Peanuts Specifications:</h2>  
                <table class="specifications">
                    <tr>
                        <th>Properties</th>
                        <th>Values & Limits</th>
                    </tr>
                    <tr>
                        <td>Product Name</td>
                        <td>Java Peanuts / Kacang Tanah / Groundnut Kernels</td>
                    </tr>
                    <tr>
                        <td>Counts Per Ounce</td>
                        <td>50/60, 60/70 & 80/90 (Counts Per Ounce)</td>
                    </tr>
                    <tr>
                        <td>Moisture</td>
                        <td>7% Max</td>
                    </tr>
                    <tr>
                        <td>Cleaning</td>
                        <td>Sortex Cleaned</td>
                    </tr>
                    <tr>
                        <td>Oil Content</td>
                        <td>48% - 52% Max</td>
                    </tr>
                    <tr>
                        <td>Place of Origin</td>
                        <td>India</td>
                    </tr>
                    <tr>
                        <td>Foreign Material</td>
                        <td>1% Max</td>
                    </tr>
                    <tr>
                        <td>Aflatoxin</td>
                        <td>10 ppb (Tlc Method)</td>
                    </tr>
                    <tr>
                        <td>Shape</td>
                        <td>Long/ Lengthy, Round</td>
                    </tr>
                </table>
                <h2>Packaging details:</h2>  
                <table class="specifications">
                    <tr>
                        <th>
                            TYPES OF BAGS</th>
                        <th>QUANTITY</th>
                    </tr>
                    <tr>
                        <td>Jute Bag</td>
                        <td>2, 8, 10, 15, 25 & 50 KG in New Jute Bag</td>
                    </tr>
                    <tr>
                        <td> PP Bag</td>
                        <td>25 & 50 KG in New PP Bags</td>
                    </tr>
                    <tr>
                        <td> Vacuum Pack</td>
                        <td>25 Kg Vacuum Bags, Out Side PP Bag</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>As Per Customer Requirement</td>
                    </tr>
                </table>
                <h2>Container Capacity:</h2>
                <table class="specifications">
                    <tr>
                        <th>TYPE OF CONTAINER</th>
                        <th>QUANTITY</th>
                    </tr>
                    <tr>
                        <td> 20' FT Container </td>
                        <td>19-20 Metric Tons</td>
                    </tr>
                    <tr>
                        <td> 40' FT Container</td>
                        <td>	 27 Metric Tons</td>
                    </tr>
                </table>
                <h2>Java Peanuts Benefits and Uses:</h2>
                <p>✓ Peanuts can be eaten raw, roasted or steamed.<br>
                    ✓ They are often inculcated in sweets, chocolates, candies.<br>
                    ✓ Groundnut flour is often used for people who want to gain weight and for its high nutritive value.<br>
                    ✓ Peanuts is the source of peanuts oil, which is used as an edible oil.<br>
                    ✓ Eating a handful of peanuts helps malnourished and underweight people.<br>
                    ✓ Peanuts are a good source of protein and mono saturated fats, a type of fat that is given weight for healthy heart diet.<br>
                    ✓ It is taken as rich source of minerals, dietary fiber, and vitamins. It can be added to cookies and chocolates for interesting flavor and aroma.</p>
            </div>

<?php get_footer()?>