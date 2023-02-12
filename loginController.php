<?php 
include_once 'userRepository.php';

session_start();
if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $email = $_POST['email'];
      $password = $_POST['password'];

      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;

      $userRepository = new UserRepository;
      $user = $userRepository->getUserByEmail($email,$password);
  
      if(empty($user)){
        echo "email or Password is Incorrect!";
        
      }else{
        header("location:index.php"); 
       
      }


    }
}

?>