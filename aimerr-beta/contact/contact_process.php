<?php
//Barre
    $to = "aneeskader209@gmail.com";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $last = $_REQUEST['last'];
    $phone = $_REQUEST['contact'];
    $cmessage = $_REQUEST['message'];
	
	require 'phpmailer/class.phpmailer.php';

        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;                               
//        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';                       
        $mail->SMTPAuth = true;                               
        $mail->Username = 'noreply@aimerr.com';          
        $mail->Password = 'Toyota@#20136';                        
        $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 465;
        $mail->AddReplyTo($email, $name);
        $mail->From = 'noreply@aimerr.com';
        $mail->FromName = $name;
        $mail->addAddress($to);      
        $mail->WordWrap = 50;                               
        $mail->isHTML(true);    
        $mail->Subject = 'from barrelyene-for aimerr';
	

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Website Visitor";

  //  $logo = 'http://droithemes.com/html/appland/image/logo.png';
  //  $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Appland Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	//$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Message:</strong> {$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	
	set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
			echo "true";
	}else echo "false";


	//if(mail($to, $subject, $body, $headers)){
	//	echo "true";
	//}else echo "false";

?>
