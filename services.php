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
    <title>Services</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="css/servicesStyle.css">

</head>
<body>
    
<header class="header">


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

<section class="home" id="home">
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




<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
</html>