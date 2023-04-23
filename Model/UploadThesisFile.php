<?php
    require_once 'config.php';

    class UploadThesisFile extends config{

        public function uploadThesis($thesisID,$title,$department,$dateupload,$filename,$participants){
            $con = $this->openConnectioN();
            $sqlQ = $con->prepare("INSERT INTO thesisfile (`Thesis_ID`, `Title`, `Department`, `DateUpload`, `FileName`,`Participants`)
             VALUES ('$thesisID', '$title', '$department', '$dateupload','$filename','$participants')");
            if($sqlQ->execute()){
                return true;
            }else{
                return false;
            }
        }
    }


?>