<?php
   /* $to = 'aneeskader209@gmail.com';
    $firstname = $_POST["name"];
    $lastname = $_POST["contact"];
    $email= $_POST["email"];
    $subject= $_POST["work"];
    $message = $_POST["description"];


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Message:'.$message.'</td></tr>
    </table>';
	
	$message ='test message';*/

    if (@mail('aneeskader209@gmail.com','Test', 'Test message-barreleyene'))
    {
        echo 'true';
    }else{
        echo 'failed-edited';
    }

?>
