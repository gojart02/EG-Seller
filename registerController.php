<?php
include_once 'userRepository.php';
include_once 'user.php';

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

      $user = new User($id,$name,$surname,$email,$password);

      $userRepository = new UserRepository;

      $userRepository->insertUser($user);

  }
}

?>