<?php
  $conn = mysqli_connect("localhost", "root", "", "test");
  $id = $_GET['id'];
  $query = "DELETE FROM user WHERE id=" . $id;
  mysqli_query($conn, $query);
  mysqli_close($conn);
  header("Location: Dashboard.php"); 
?>
