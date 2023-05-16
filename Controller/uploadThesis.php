<?php

require_once '../Model/UploadThesisFile.php';
$upload = new UploadThesisFile;
if(isset($_POST['Tittle'])){
    $SubmittedBy = $_POST['SubmittedBy'];
    $Title = $_POST['Tittle'];
    $Department = $_POST['Department'];
    $DateUpload = $_POST['DateUpload'];
    $participants = $_POST['participants'];

    $thesis_id = uniqid();

    $img_name = $_FILES['uploadFile']['name'];
    $tmp_name = $_FILES['uploadFile']['tmp_name'];

    $signatures_img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $signatures_img_ex_lc = strtolower($signatures_img_ext);

    $final_new_name = uniqid("thesis-",true).'.'.$signatures_img_ex_lc;
    $img_upload_path = "../ThesisFile/".$final_new_name;

    if($upload->uploadThesis($thesis_id,$Title,$Department,$DateUpload,$final_new_name,$participants,$SubmittedBy)){
        move_uploaded_file($tmp_name, $img_upload_path);
        header("Location: ../user/uploadfiles.php?added=success");
    }

}



?>