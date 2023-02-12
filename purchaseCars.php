<?php
class Kerkesat {
  private $conn;

  public function __construct($hostname, $username, $password, $database) {
    $this->conn = mysqli_connect($hostname, $username, $password, $database);
  }

  public function insertRow($selected_id) {
    $sql = "INSERT INTO kerkesat (Car_Name, Car_Model, Car_Price, User_Name, User_Email)
    SELECT cars.name AS Car_Name, cars.model AS Car_Model, cars.price AS Car_Price, user.name AS User_Name, user.email AS User_Email
    FROM cars
    JOIN user
    ON cars.id 
    WHERE cars.id = $selected_id";
    mysqli_query($this->conn, $sql);
    header("Location: index.php"); 

  }

  public function close() {
    mysqli_close($this->conn);
  }
}

$selected_id = $_GET['id'];

$kerkesat = new Kerkesat("localhost", "root", "", "test");
$kerkesat->insertRow($selected_id);
$kerkesat->close();
?>




