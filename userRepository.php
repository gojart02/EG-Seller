<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn;
    }

    function insertUser($user){
       
        $conn = $this->connection->startConnection();
       

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getsurname();
        $email= $user->getemail();
        $password = $user->getPassword();
        echo "<br>";
        echo " ID: $id";
        echo " name: $name";
        echo " surname: $surname";
        echo " email: $email";
        echo " password: $password";
        echo "<br>";


        $sql = "INSERT INTO user (id,Name,surname,email,Password) VALUES 
        ('$id','$name','$surname','$email','$password')";
        if(mysqli_query($conn,$sql)){
        echo "query is executed succesfuly";
            header("location:login.php");
        }else{
            echo "This is an Error: ".mysqli_error($conn);
        }


    }

    function getUserByEmail($email,$password){
        $conn = $this->connection->startConnection();

        $sql = "SELECT * FROM user WHERE email = '$email' and Password = '$password'";

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