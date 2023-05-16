
<?php

    require_once '../Model/UserAuth.php';
    $forgotpass = new UserAuth;

    if(isset($_POST['schoolID'])){
        $email = $_POST['email']; 
        $schoolID = $_POST['schoolID']; 

        if($forgotpass->forgotPassword($email,$schoolID) == "NoFound"){
            echo "NoFound";
        }else{
            require '../vendors/PHPMailerAutoload.php';
            $passWord = $forgotpass->forgotPassword($email,$schoolID);
            $mail = new PHPMailer;

            //$mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'klintoiyas@gmail.com';                 // SMTP username
            $mail->Password = 'nnkvpptsjbfxflmj';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('klintoiyas@gmail.com', 'Mailer');
            $mail->addAddress($email, 'Joe User');     // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Forgot Password';
            $mail->Body    = "Here is your password: <b style='color: green;'>".$passWord."</b>";

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Success';
            }
        }

    }


?>