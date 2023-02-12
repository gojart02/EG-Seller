<?php 
include_once 'databaseConnectionAdmin.php';

class adminRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertadmin($admin){
       
        $conn = $this->connection->startConnection();
       

        $id = $admin->getId();
        $name = $admin->getName();
        $surname = $admin->getsurname();
        $email= $admin->getemail();
        $password = $admin->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " surname: $surname";
        echo " email: $email";
        echo " password: $password";
        echo "<br>";


        $sql = "INSERT INTO admin (id,Name,surname,email,Password) VALUES 
        ('$id','$name','$surname','$email','$password')";
        if(mysqli_query($conn,$sql)){
        echo "query is executed succesfuly";
            header("location:login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }


    }

    function getAdminByEmail($email,$password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM admin WHERE email = '$email' and Password = '$password'";

        if($statement = $conn->query($sql)){
            $result = $statement->fetch_row();
            echo "query is executed succesfuly";
            return $result;
        }else{
            return null;
        }
    }

    
}


?>