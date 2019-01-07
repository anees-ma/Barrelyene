<?php

        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die('Sorry Request must be Ajax POST'); //exit script
        }
    
        if(isset($_POST)){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

        $to = "info@barrelyene.com";
		$subject = "Project Quote";
		
		$headers .= "From: ".$name."<".$email.">" . "\r\n";
		
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		
		
		$body="<div class='container' id='mail-body'>
                <div class='row'>
                    <div>
                        <p>Name of person/ company: $name</p>
                        <p>Email: $email</p>
                        <p>Work Description: $message</p>
                        
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
								<p>Thank you for choosing us, we will revert you back soon with a quote.</p>
								
							</div>
						</div>
					</div>";
					
					mail($toa,$subject,$txt,$header);
			}
    
        
    }