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
    <title>Vehicles</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="css/vehiclesStyle.css">

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
        <i class="far fa-user"></i>
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




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>