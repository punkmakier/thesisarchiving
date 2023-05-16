<?php
    require_once 'config.php';

    class UploadThesisFile extends config{

        public function uploadThesis($thesisID,$title,$department,$dateupload,$filename,$participants,$SubmittedBy){
            $con = $this->openConnectioN();
            $sqlQ = $con->prepare("INSERT INTO thesisfile (`Thesis_ID`, `Title`, `Department`, `DateUpload`, `FileName`,`Participants`,`SubmittedBy`)
             VALUES ('$thesisID', '$title', '$department', '$dateupload','$filename','$participants','$SubmittedBy')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }
    }


?>