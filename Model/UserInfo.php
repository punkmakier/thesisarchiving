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


        public function showNotifBell($UserID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM `thesisfile` WHERE `SubmittedBy` = '$UserID' AND Status = 'Approved' OR Status = 'Disapproved'");
            if($sqlQ->execute()){
                if($sqlQ->rowCount() > 0){
                    while($row = $sqlQ->fetch()){
                        $status = $row['Status'];
                        echo "
                        <li>
                        <table class='notiftbl'>
                          <tr class='notiftr'>
                            <td class='notiftd'>
                              <p class='contentparanotif'> <span class='notifyicon material-icons'>
                                  notifications_active
                                </span> &nbsp; &nbsp; &nbsp; &nbsp; Your file has been ${status} <a href='history.php'
                                  class='notiview'> <u>View</u></a></p>
                            </td>
                          </tr>
                        </table>
                      </li>
                        
                        ";
                    }
                }
            }
            
            
        }

    }
?>