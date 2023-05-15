<?php
    require_once '../Model/DisplayTable.php';
    $display = new DisplayTable;
    if($_POST['Action'] === "ApproveAccount"){
        $id = $_POST['UID'];
        
        if($display->approveSelectedAccount($id,1)){
            echo "Success";
        }else{
            echo "Failed";
        }
    }
    if($_POST['Action'] === "DisapproveAccount"){
        $id = $_POST['UID'];
        
        if($display->approveSelectedAccount($id,5)){
            echo "Success";
        }else{
            echo "Failed";
        }
    }

    if($_POST['Action'] === "showDetails"){
        $id = $_POST['UID'];
       $display->showSelectedDetails($id);
    }
    if($_POST['Action'] === "ApproveThesis"){
        $id = $_POST['UID'];
       if($display->updateThesisFile($id,"Approved","")){
            echo "Success";
        }else{
            echo "Failed";
        }
    }
    if($_POST['Action'] === "DisApproveThesis"){
        $id = $_POST['UID'];
        $reason = $_POST['Reason'];
       if($display->updateThesisFile($id,"Disapproved",$reason)){
            echo "Success";
        }else{
            echo "Failed";
        }
    }

    if($_POST['Action'] === "ShowThesis"){
        $id = $_POST['UID'];
       $display->displaySelectedThesis($id);
    }



    if($_POST['Action'] === "ShowPublishedThesis"){
        $id = $_POST['UID'];
       $display->displayPublishedSelectedThesis($id);
    }


?>