<?php

require_once '../Model/UserAuth.php';
$user = new UserAuth;

if(isset($_POST['email'])){
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Firstname = $_POST['fname'];
    $Lastname = $_POST['lname'];
    $SchoolID = $_POST['schoolid'];

   if($user->updateAccount($Firstname,$Lastname,$Email,$Password,$SchoolID)){
    echo "Success";
   }else{
    echo "Failed";
   }
  
}



?>