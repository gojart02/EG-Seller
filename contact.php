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
    <title>Contact</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="css/contactStyle.css">

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
    
<section class="home" id="home">
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




<script src="js/script.js"></script>
</body>
</html>