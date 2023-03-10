<?php 
    session_start();
    require_once 'auth_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>eg</span>seller </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="vehicles.php">vehicles</a>
        <a href="services.php">services</a>
        <a href="featured.php">featured</a>
        <a href="contact.php">contact</a>
        <a href="order.php">order</a>
    </nav>

    <div id="login-btn">
    <a href="logout.php">
        <button class="btn">logout</button> </a>
    </div>

    <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'test');
                     $sel = "SELECT * FROM user";
                     $query = mysqli_query($conn,$sel);
                     $result = mysqli_fetch_assoc($query);
    ?>
    <div class="display_name">
                    <?php echo $result['name'];?>
    </div>

</header> 
<span id="close-login-form" class="fas fa-times"></span>

<section class="home" id="home">

    <h3 class="home-background">buy the best car</h3>

    <img class="home-background" src="image/home-img.png" alt="">

    <a href="vehicles.html" class="btn home-background">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>15+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>470+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>290+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular porsches</h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche 718</h3>
                    <div class="price"> <span>price : </span> ???51,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 300kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche panamera 4s</h3>
                    <div class="price"> <span>price : </span> ???65,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2022
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 310kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche panamera</h3>
                    <div class="price"> <span>price : </span> ???35,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2017
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 280kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche cayman</h3>
                    <div class="price"> <span>price : </span> ???38,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2020
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 300kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche 718 boxter</h3>
                    <div class="price"> <span>price : </span> ???40,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2019
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 300kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <h3>porsche cayenne</h3>
                    <div class="price"> <span>price : </span> ???25,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2015
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 260kmh
                    </p>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>dealership</h3>
            <p>if you want to have the best experience with quality cars visit our branches.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>each of our branch has a service garage for our costumers  so visit us.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>having a bad battery ruins your car so its important for us to offer you quality.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>we have partnership with best quality brands offering oil for the best experiences.</p>
            <a href="#" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/car-1.png" alt="">
                <div class="content">
                    <h3>mercedes</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">???55,000/-</div>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-2.png" alt="">
                <div class="content">
                    <h3>hyundai</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">???23,000/-</div>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-3.png" alt="">
                <div class="content">
                    <h3>ford</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">???32,000/-</div>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/car-4.png" alt="">
                <div class="content">
                    <h3>audi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">???45,000/-</div>
                    <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="image/car-5.png" alt="">
                 <div class="content">
                     <h3>kia</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">???28,000/-</div>
                     <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-6.png" alt="">
                 <div class="content">
                     <h3>honda</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">???18,000/-</div>
                     <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-7.png" alt="">
                 <div class="content">
                     <h3>kia</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">???50,000/-</div>
                     <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="image/car-8.png" alt="">
                 <div class="content">
                     <h3>chevrolet</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">???23,000/-</div>
                     <a href="#" class="btn" onclick="if(confirm('This car can only be shown to our show room, you can order other cars. Do you want to order now?')){window.location.href='order.php'}">order now</a>
                 </div>
             </div>
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://maps.google.com/maps?q=ahp%20prizren&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" allowfullscreen="" loading="lazy"></iframe>

        <form action="https://formspree.io/f/xwkjenol"
        method="POST">
            
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box">
            <input name="email" type="email" placeholder="your email" class="box">
            <input type="tel" placeholder="subject" class="box">
            <textarea name="message" placeholder="your message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Send" class="btn">
        </form>

    </div>
</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> kosovo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> albania </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> north macedonia </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="vehicles.html"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="services.html"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="featured.html"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="contact.html"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383-45-332 233 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383-45-223 322 </a>
            <a href="#"> <i class="fas fa-envelope"></i> egseller@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> prizren, kosovo - 20000 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>

    <div class="credit"> all rights reserved </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>