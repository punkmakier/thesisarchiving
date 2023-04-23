<?php
    require_once 'config.php';

    class UserInfo extends config{

        public function showFirstName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `FirstName` FROM `users` WHERE `School_ID` = '$UserID'");
            $sqlQ->execute();
            $row = $sqlQ->fetch();
            return $row['FirstName'];
        }
        public function showLastName($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `LastName` FROM `users` WHERE `School_ID` = '$UserID'");
            $sqlQ->execute();
            $row = $sqlQ->fetch();
            return $row['LastName'];
        }
        public function showEmail($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Email` FROM `users` WHERE `School_ID` = '$UserID'");
            $sqlQ->execute();
            $row = $sqlQ->fetch();
            return $row['Email'];
        }
        public function showSchoolID($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `School_ID` FROM `users` WHERE `School_ID` = '$UserID'");
            $sqlQ->execute();
            $row = $sqlQ->fetch();
            return $row['School_ID'];
        }
        public function showPassword($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `Password` FROM `users` WHERE `School_ID` = '$UserID'");
            $sqlQ->execute();
            $row = $sqlQ->fetch();
            return $row['Password'];
        }

    }
?>