<?php 
    session_start();
    require_once 'authadmin_check.php';
?>
<?php 
    require_once('dbconfig.php'); 
    $db = new operations();
    require_once('userRepository.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shpall</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="./css/shpallStyle.css">

</head>
<body>
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="#" class="logo"> <span>eg</span>seller </a>

<nav class="navbar">
    <a href="Dashboard.php">Dashboard</a>
</nav>

<div id="login-btn">
<a href="logout.php">
    <button class="btn">logout</button> </a>
    <i class="far fa-user"></i>
</div>

<?php 
     $conn = mysqli_connect('localhost', 'root', '', 'test');
     $sel = "SELECT * FROM admin";
     $query = mysqli_query($conn,$sel);
    $result = mysqli_fetch_assoc($query);
    ?>
    <div class="display_name">
                    <?php echo $result['name'];?>
    </div>

</header> 
  
  <?php $db->Store_Cars(); ?>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="model">Model:</label>
      <input type="text" id="model" name="model" required>

      <label for="price">Price:</label>
      <input type="text" id="price" name="price" required>

      <label for="photo">Add Photo:</label>
      <input type="file" id="photo" name="photo" accept="/." required>
      
      <button type="submit" name="btn_save" class="btn btn-submit btn-danger">
            Shpall
      </button>
    </form>
 


</body>

</html>