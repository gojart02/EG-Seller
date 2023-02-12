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
    <link rel="stylesheet" href="./css/dashboardStyle.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Eg Seller</h1>
        </div>
        
        <ul>
            <a href="#"><li>Dashboard </li></a>
            <a href="#"><li>Cars </li></a>
            <a href="#"><li>Users </li></a>
            <a href="shpall.php"><li>Shpall </li></a>
            
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'test');
                     $sel = "SELECT * FROM admin";
                     $query = mysqli_query($conn,$sel);
                     $result = mysqli_fetch_assoc($query);
                    
                ?>
            <div class="user">
                    <a href="logout.php" class="btn">Logout</a>
                </div>
                <div class="display_name">
                    <?php echo $result['name'];?>
                </div>
                
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Acctive Salers</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Services</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Locations</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000 $</h1>
                        <h3>Income</h3>
                    </div>
                </div>
            </div>
            
            <div class="content-2">
                <div class="cars">
                    <div class="title">
                        <h2>Cars</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th>Delete</th>
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
                      echo "<td><a href='deleteCars.php?id=" . $row['id'] . "'>Delete</a></td>";
                      echo "</tr>";
                    }
                    mysqli_close($conn);
                  ?>
                        
                    </table>
                </div>

                <div class="cars">
                    <div class="title">
                        <h2>Kerkesat</h2>
                    </div>
                    <table>
                        <tr>
                            <th>User_Name</th>
                            <th>User_Email</th>
                            <th>Car_Name</th>
                            <th>Car_Model</th>
                            <th>Car_Price</th>
                        </tr>
                        <?php
                    $conn = mysqli_connect("localhost", "root", "", "test");
                    $query = "SELECT * FROM kerkesat";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                      echo "<td>" . $row['User_Name'] . "</td>";
                      echo "<td>" . $row['User_Email'] . "</td>";
                      echo "<td>" . $row['Car_Name'] . "</td>";
                      echo "<td>" . $row['Car_Model'] . "</td>";
                      echo "<td>" . $row['Car_Price'] . "</td>";
                      echo "<td><a href='deleteKerkesat.php?id=" . $row['id'] . "'>Done</a></td>";
                      echo "</tr>";
                    }
                    mysqli_close($conn);
                  ?>
                        
                    </table>
                </div>

                <div class="users">
                    <div class="title">
                        <h2>Users</h2>
                    </div>
                    <table>
                    <tr>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
    </tr>
    <?php
      $conn = mysqli_connect("localhost", "root", "", "test");
      $query = "SELECT * FROM user";
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td><a href='deleteUser.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
      }
      mysqli_close($conn);
    ?>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>