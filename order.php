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
    <title>Order</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- linku per font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- linku per css -->
    <link rel="stylesheet" href="css/orderStyle.css">

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
</section>
<section class="cars_table" id="cars_table">

    <h1>Availeble cars for now</h1>
     <table>
                        <tr>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th>Purchase</th>
                        </tr>
                        <?php
                    $conn = mysqli_connect("localhost", "root", "", "test");
                    $query = "SELECT * FROM cars";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                      echo "<td>" . $row['name'] . "</td>";
                      echo "<td>" . $row['model'] . "</td>";
                      echo "<td>" . $row['price'] . "</td>";
                      echo "<td><a href='javascript:void(0);' onclick='showPopup(" . $row['id'] . ")'>Purchase</a></td>";
?>
<script>
function showPopup(selected_id) {
  if (confirm("Are you sure you want to purchase this car?")) {
    window.location.href = "purchaseCars.php?id=" + selected_id;
    alert("The car you selected to purchase is added to purchase now. You can take the car whenever you want!");  
}
}
</script>
<?php
  echo "</tr>";
}
mysqli_close($conn);
?>
</table>


</section>


<section class="cars_table" id="cars_table">

    <h1>Cars you purchased</h1>
     <table>
                        <tr>
                            <th>Car Name</th>
                            <th>Car Model</th>
                            <th>Car Price</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                    $conn = mysqli_connect("localhost", "root", "", "test");
                    $query = "SELECT * FROM kerkesat";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                      echo "<td>" . $row['Car_Name'] . "</td>";
                      echo "<td>" . $row['Car_Model'] . "</td>";
                      echo "<td>" . $row['Car_Price'] . "</td>";
                      echo "<td><a href='javascript:void(0);' onclick='showPopup2(" . $row['id'] . ")'>Cancel purchase</a></td>";
?>
<script>
function showPopup2(selected_id) {
  if (confirm("Are you sure you want to cancel this car?")) {
    window.location.href = "deleteCart.php?id=" + selected_id;
    alert("The car you selected to cancel purchase has been removed !");  
}
}
</script>
<?php
  echo "</tr>";
}
mysqli_close($conn);
?>
</table>


</section>

</body>
</html>