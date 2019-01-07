<?php

        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('Sorry Request must be Ajax POST'); //exit script
        }
    
        if(isset($_POST)){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

        $to = "info@barrelyene.com";
		$subject = "Website Visitor";
		
		$headers .= "From: ".$name."<".$email.">" . "\r\n";
		
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		
		
		$body="<div class='container' id='mail-body'>
                <div class='row'>
                    <div>
                        <p>Name: $name</p>
                        <p>Email: $email</p>
                        <p>Message: $message</p>
                        
                    </div>
                </div>
            </div>";
			
			if(mail($to,$subject,$body,$headers)){
				echo 'true';
				
				$toa = $email;
				$subject = "Acknowledgement";
				
				$header .= "From: Barrelyene Chemicals<info@barrelyene.com>" . "\r\n";
				
				$header .= "MIME-Version: 1.0" . "\r\n";
				$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				
				
				$txt="<div class='container' id='mail-body'>
						<div class='row'>
							<div>
								<p>Dear Sender,</p></br>
								<p>Thank you for visiting Barrelyene International. We have received your query and our Sales Department will be in touch with you soon.</p>
								
							</div>
						</div>
					</div>";
					
					mail($toa,$subject,$txt,$header);
			}
    
        
    }