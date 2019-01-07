<?php

    $to = "aneeskader209@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $work = $_REQUEST['work'];
    $phone = $_REQUEST['contact'];
    $wd = $_REQUEST['description'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Request for work quote";
    $web = "You have a message from your Appland.";

   // $logo = 'http://droithemes.com/html/appland/image/logo.png';
   // $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Appland Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	//$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name of person/ company:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Work:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Work description:</strong> {$work}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);
	if($send){
		echo 'true';
	}else echo 'false';

?>
