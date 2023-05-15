<?php
    require_once 'config.php';

    class UserFiles extends config{

        public function myFiles($SchoolID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM thesisfile WHERE Status = 'Pending' OR Status = 'Approved' AND SubmittedBy = '$SchoolID'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['Thesis_ID'];
                    $Title = $row['Title'];
                    $Status = $row['Status'];
                    $DateCreated = $row['DateCreated'];
                    echo "
                    <tr>
                        <td>$Title</td>
                        <td>$Status</td>
                        <td>$DateCreated</td>
                        <td>
                            <a href='javascript:void(0)' id='${id}' class='viewThesis'><i class='fa-solid fa-eye text-primary'></i></a>
                        </td>
                    </tr>
                    ";
                }
            }
        }


        public function myFilesHistory($SchoolID){
            $con = $this->openConnection();
            $sqlQ = $con->prepare("SELECT * FROM thesisfile WHERE SubmittedBy = '$SchoolID'");
            if($sqlQ->execute()){
                while($row = $sqlQ->fetch()){
                    $id = $row['Thesis_ID'];
                    $Title = $row['Title'];
                    $Status = $row['Status'];
                    $Remarks = $row['Remarks'];
                    $DateCreated = $row['DateCreated'];
                    $LastUpdate = $row['LastUpdate'];
                    echo "
                    <tr>
                        <td>$Title</td>
                        <td>$Status</td>
                        <td>$Remarks</td>
                        <td>$DateCreated</td>
                        <td>$LastUpdate</td>
                        <td>
                            <a href='javascript:void(0)' id='${id}' class='viewThesis'><i class='fa-solid fa-eye text-primary'></i></a>
                        </td>
                    </tr>
                    ";
                }
            }
        }
    }


?>