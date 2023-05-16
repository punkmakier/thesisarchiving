<?php
    session_start();
    require_once 'config.php';

    class UserAuth extends config{



        public function userRegistration($SchoolID,$Email,$Password,$Firstname,$Lastname){
            $con = $this->openConnection();
            $sqlQ = "SELECT `School_ID`,`Email` FROM `users` WHERE `School_ID` = '$SchoolID' OR `Email` = '$Email'";
            $stmt = $con->prepare($sqlQ);
            if($stmt->execute()){
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch()){
                        if($row['School_ID'] == $SchoolID || $row['Email'] == $Email){
                            return false;
                        }
                    }
                }else{
                    $sqlInsertUser = "INSERT INTO `users` (`School_ID`,`Email`,`Password`,`Firstname`,`Lastname`) VALUES ('$SchoolID','$Email','$Password','$Firstname','$Lastname')";
                    $stmt1 = $con->prepare($sqlInsertUser);
                    if($stmt1->execute()){
                        return true;
                    }else{
                        return false;
                    }

                }
            }
        }



        public function userLogin($email, $password,$usertype){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `School_ID`, `UserRole` FROM `users` WHERE `Email` = '$email' AND `Password`='$password' AND `UserRole` = '$usertype'");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        $_SESSION['School_ID'] = $row['School_ID'];
                        $_SESSION['UserRole'] = $row['UserRole'];
                        if($row['UserRole'] == "Student"){
                            return "Student";
                        }else if($row['UserRole'] == "Admin"){
                            return "Admin";
                        }
                    }                    
                }else{
                    return "Failed";
                }
            }else{
                return "Failed";
            }
        }


        public function updateAccount($Firstname,$Lastname,$Email,$Password,$SchoolID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE `users` SET `FirstName`='$Firstname',`LastName`='$Lastname', `Email`='$Email',`Password`='$Password', `LastUpdate` = now() WHERE `School_ID`='$SchoolID'");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }



        public function forgotPassword($Email,$SchoolID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Password` FROM `users` WHERE `School_ID`='$SchoolID' AND `email`='$Email'");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        return $row['Password'];
                    }
                }else{
                    return "NoFound";
                }

            }
            
        }


    }




?>