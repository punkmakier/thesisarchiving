<?php

    require_once '../Model/UserAuth.php';
    $user = new UserAuth;

    if(isset($_POST['Email'])){
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $UserType = $_POST['UserType'];

       echo $user->userLogin($Email,$Password,$UserType);
      
    }



?>