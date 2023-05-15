<?php
    require_once 'config.php';

    class AdminDashboard extends config{

        public function FilesStatus($status){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT COUNT(*) AS TotalFile FROM thesisfile WHERE Status = '$status'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    echo $row['TotalFile'];
                }
            }
        }

        public function TotalAccounts(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT COUNT(*) AS TotalUsers FROM users WHERE isRegistered = 1");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    echo $row['TotalUsers'];
                }
            }
        }


        public function getDateUser(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `LastUpdate` FROM  users WHERE isRegistered = 1 ORDER BY LastUpdate DESC LIMIT 1");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    return $row['LastUpdate'];
                }
            }
        }

        public function getFileStatusDate($Status){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `LastUpdate` FROM  thesisfile WHERE Status = '$Status' ORDER BY LastUpdate DESC LIMIT 1");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    return $row['LastUpdate'];
                }
            }
        }

        public function getFileStatusLastUpdate(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT `LastUpdate` FROM  thesisfile WHERE Status = 'Approved' OR Status = 'Disapproved' ORDER BY LastUpdate DESC LIMIT 1");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    return $row['LastUpdate'];
                }
            }
        }
    }
    
?>