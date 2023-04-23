<?php

    require_once '../Model/UserAuth.php';
    $user = new UserAuth;

    if(isset($_POST['SchoolID'])){
        $schoolID = $_POST['SchoolID'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];

        if($user->userRegistration($schoolID,$Email,$Password,$Firstname,$Lastname)){
            echo "Success";
        }else{
            echo "Failed";
        }
    }



?>