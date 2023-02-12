<?php
include_once 'userRepositoryAdmin.php';
include_once 'admin.php';

$name=$surname=$email=$password="";

if(isset($_POST['registerBtn'])){
  if(empty($_POST['name'])  || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
      echo "<pre style='color:red; font-size:15px;'>*Fill all required Fields</pre>";
  }else{
    $id = rand(100,999)."$email";
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

      $admin = new Admin($id,$name,$surname,$email,$password);

      $adminRepository = new adminRepository;

      $adminRepository->insertAdmin($admin);

  }
}

?>