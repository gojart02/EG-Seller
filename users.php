<div class="container">
  <table>
    <tr>
      <th>Name</th>
      <th>Model</th>
      <th>Price</th>
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