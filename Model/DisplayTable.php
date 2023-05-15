<?php
    require_once 'config.php';

    class DisplayTable extends config{

        public function displayAccounts(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM users WHERE isRegistered = 0 AND UserRole = 'Student'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['id'];
                    $Firstname = $row['Firstname'];
                    $Lastname = $row['Lastname'];
                    $StudentID = $row['School_ID'];

                    echo "<tr>
                        <td>${Firstname}</td>
                        <td>${Lastname}</td>
                        <td>${StudentID}</td>
                        <td>
                            <a href='javascript:void(0)' id='${id}' class='approveAccount'><i class='fa-solid fa-circle-check text-success'></i></a>&nbsp; <a href='javascript:void(0)' id='${id}' class='disapproveAccount'><i class='fa-solid fa-circle-xmark text-danger'></i></a>
                        </td>
                    </tr>";
                }
            }
        }
        public function displayAccountsActive(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM users WHERE isRegistered = 1 AND UserRole = 'Student'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['id'];
                    $Firstname = $row['Firstname'];
                    $Lastname = $row['Lastname'];
                    $StudentID = $row['School_ID'];

                    echo "<tr>
                        <td>${Firstname}</td>
                        <td>${Lastname}</td>
                        <td>${StudentID}</td>
                        <td>
                            <a href='javascript:void(0)' id='${id}' class='viewDetails'><i class='fa-solid fa-eye text-warning'></i></a>&nbsp; <a href='javascript:void(0)' id='${id}' class='deleteAccount'><i class='fa-solid fa-circle-xmark text-danger'></i></a>
                        </td>
                    </tr>";
                }
            }
        }

        public function approveSelectedAccount($id,$registered){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE users SET isRegistered = $registered WHERE id = $id");
            if($sqlQ->execute()){
                $statusAcc = "";
                if($registered == 1){
                    $statusAcc = "Approved";
                }elseif($registered == 5){
                    $statusAcc = "Disapproved";
                }
                $sqlInsertHistory = $con->prepare("INSERT INTO history (Description) VALUES('New user has been ${statusAcc}')");
                $sqlInsertHistory->execute();
                return true;
            }else{
                return false;
            }
            
        }


        public function showSelectedDetails($id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM users WHERE id = $id");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['id'];
                    $CompelteName = $row['Firstname']." ".$row['Lastname'];
                    $StudentID = $row['School_ID'];
                    $Email = $row['Email'];
                    $Phone = $row['Phone'];
                    $Address = $row['Address'];
    
                    echo "
                        <div class='form-group'>
                                <label>Student ID</label>
                                <input type='text' class='form-control' value='${StudentID}' readonly>
                            </div>
                            <div class='form-group'>
                                <label>Compelte Name</label>
                                <input type='emil' class='form-control' value='${CompelteName}' readonly>
                            </div>
                            <div class='form-group'>
                                <label>Email</label>
                                <input type='emil' class='form-control' value='${Email}' readonly>
                            </div>
                            <div class='form-group'>
                                <label>Address</label>
                                <textarea class='form-control' value='${Address}' readonly></textarea>
                            </div>
                            <div class='form-group'>
                                <label>Phone</label>
                                <input type='text' class='form-control' value='${Phone}' readonly>
                            </div>
                        </div>
                    ";
    
                }
                

            }
            
        }

        
        public function displayApproveDisapprove(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM history ORDER BY DateCreated DESC");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $Description = $row['Description'];
                    $DateCreated = $row['DateCreated'];

                    echo "<tr>
                        <td>${Description}</td>
                        <td style='font-size: 0.95rem;'>${DateCreated}</td>
                    </tr>";
                }
            }
        }


        public function displayThesis(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM thesisfile WHERE Status = 'Pending'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['Thesis_ID'];
                    $Title = $row['Title'];
                    $Department = $row['Department'];
                    $DateCreated = $row['DateCreated'];
                    $Dept = "";
                    if($Department == "IICT"){
                        $Dept = "Institute of Information and Communication Technology";
                    }
                    else if($Department == "IBOA"){
                        $Dept = "Institute of Business and Office Administration";
                    }

                    echo "<tr>
                        <td>${Title}</td>
                        <td>${Dept}</td>
                        <td>${DateCreated}</td>
                        <td style='font-size: 0.95rem;'><a href='javascript:void(0)' id='${id}' class='viewThesis'><i class='fa-solid fa-eye text-warning'></i></a>&nbsp; <a href='javascript:void(0)' id='${id}' class='approveThesis'><i class='fa-solid fa-circle-check text-success'></i></a>&nbsp; <a href='javascript:void(0)' id='${id}' class='disapproveThesis'><i class='fa-solid fa-circle-xmark text-danger'></i></a></td>
                    </tr>";
                }
            }
        }



        public function updateThesisFile($id,$status,$remarks){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("UPDATE thesisfile SET Status = '$status', `Remarks`='$remarks' WHERE Thesis_ID = '$id'");
            if($sqlQ->execute()){
                $statusAcc = "";
                if($status == "Approved"){
                    $statusAcc = "Approved";
                    $sqlInsertHistory = $con->prepare("INSERT INTO history (Description) VALUES('New Thesis File has been ${statusAcc}')");

                }elseif($status == "Disapproved"){
                    $statusAcc = "Disapproved";
                    $sqlInsertHistory = $con->prepare("INSERT INTO history (Description) VALUES('New Thesis File has been ${statusAcc} reason: ${remarks}')");

                }
                $sqlInsertHistory->execute();
                return true;
            }else{
                return false;
            }
            
        }

        public function displaySelectedThesis($id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM thesisfile WHERE Thesis_ID = '$id'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $title = $row['Title'];
                    $Department = $row['Department'];
                    $DateUpload = $row['DateUpload'];
                    $FileName = $row['FileName'];
                    $Participants = $row['Participants'];
                    $Status = $row['Status'];

                    echo "
                    <div class='row'>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Thesis Title</p>
                                <input type='text' value='${title}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                        <div class='form-group'>
                            <p>Department</p>
                            <input type='text' value='${Department}' readonly class='form-control mt-3'>
                        </div>
                    </div>
                    <div class='col-4'>
                            <div class='form-group'>
                                <p>Members</p>
                                <input type='text' value='${Participants}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Status</p>
                                <input type='text' value='${Status}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Date Upload</p>
                                <input type='text' value='${DateUpload}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        
                    </div>
                        
                    <iframe src='../ThesisFile/${FileName}' style='width:100%; height:700px;' frameborder='0'></iframe>
                    
                    ";
                }
            }
        }


        public function displayApprovedFiles(){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT Thesis_ID,Title,Department,DateUpload, date(`LastUpdate`) AS DateApproved FROM thesisfile WHERE Status = 'Approved'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['Thesis_ID'];
                    $Title = $row['Title'];
                    $Department = $row['Department'];
                    $DateUpload = $row['DateUpload'];
                    $LastUpdate = $row['DateApproved'];

                    $Dept = "";
                    if($Department == "IICT"){
                        $Dept = "Institute of Information and Communication Technology";
                    }
                    else if($Department == "IBOA"){
                        $Dept = "Institute of Business and Office Administration";
                    }

                    echo "<tr>
                        <td>${Title}</td>
                        <td>${Dept}</td>
                        <td>${DateUpload}</td>
                        <td>${LastUpdate}</td>
                        <td>
                            <a href='javascript:void(0)' id='${id}' class='viewThesis'><i class='fa-solid fa-eye text-primary'></i></a>&nbsp;
                        </td>
                    </tr>";
                }
            }
        }



        public function displayPublishedSelectedThesis($id){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT Title,Department,DateUpload,FileName,Participants,Status,date(LastUpdate) AS DatePublished FROM thesisfile WHERE Thesis_ID = '$id'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $title = $row['Title'];
                    $Department = $row['Department'];
                    $DateUpload = $row['DateUpload'];
                    $LastUpdate = $row['DatePublished'];
                    $FileName = $row['FileName'];
                    $Participants = $row['Participants'];
                    $Status = $row['Status'];

                    echo "
                    <div class='row'>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Thesis Title</p>
                                <input type='text' value='${title}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                        <div class='form-group'>
                            <p>Department</p>
                            <input type='text' value='${Department}' readonly class='form-control mt-3'>
                        </div>
                    </div>
                    <div class='col-4'>
                            <div class='form-group'>
                                <p>Members</p>
                                <input type='text' value='${Participants}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Status</p>
                                <input type='text' value='${Status}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Date Upload</p>
                                <input type='text' value='${DateUpload}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                        <div class='col-4'>
                            <div class='form-group'>
                                <p>Date Approved</p>
                                <input type='text' value='${LastUpdate}' readonly class='form-control mt-3'>
                            </div>
                        </div>
                    </div>
                        
                    <iframe src='../ThesisFile/${FileName}' style='width:100%; height:700px;' frameborder='0'></iframe>
                    
                    ";
                }
            }
        }
    }
?>