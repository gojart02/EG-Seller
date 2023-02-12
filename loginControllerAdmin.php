<?php 
include_once 'userRepositoryAdmin.php';

session_start();
if(isset($_POST['loginBtn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
      echo "Fill all required fields!";
    }else{
      $email = $_POST['email'];
      $password = $_POST['password'];

      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;

      $adminRepository = new AdminRepository;
      $admin = $adminRepository->getAdminByEmail($email,$password);
  
      if(empty($admin)){
        echo "email or Password is Incorrect!";
        
      }else{
        header("location:dashboard.php"); 
       
      }


    }
}