<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<title>Contact Us | Barrelyene</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="aimerr">

		<!-- ==============================================
		Favicon
		=============================================== -->  
        <link rel="shortcut icon" href="img/favicon.png">
		
		<!-- ==============================================
		CSS
		=============================================== -->  
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/styles.css"> 
        
        <!-- ==============================================
		Fonts
		=============================================== -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
		
			<script src="js/jquery.min.js"></script>
		
		<style>
			.post-loader, .qpost-loader {
			  border: 5px solid #E8E3DE;
			  border-radius: 50%;
			  border-top: 5px solid #60A550;
			  border-bottom: 5px solid #60A550;
			  width: 30px;
			  height: 30px;
			  -webkit-animation: spin 2s linear infinite;
			  animation: spin 2s linear infinite;
			}

			@-webkit-keyframes spin {
			  0% { -webkit-transform: rotate(0deg); }
			  100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			  0% { transform: rotate(0deg); }
			  100% { transform: rotate(360deg); }
			}
			.address{
			    margin-top:30px;
			    float: left;
			}
		</style>
        
</head>

<body>
    
        <!--Header-->
		<?php include 'header.php';?>
		<!--Header-->

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1>Contact</h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; Contact</p></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-form"  id="contact">
            <div class="section">
                <div class="row">
                 <div class="col-md-7">
                        <div class="staff-background">
                            <img src="img/c.jpg" alt="">
                        </div>
                 
                        <div class="contact-address" style="margin-top: 225px;">
                            <div class="span-support">
                                <h4 align="center">CONTACT US</h4>
                            </div>
                            <div class="address">
                                <h3>MENA region</h3>
                                <p>Gotche Middle East F.Z.E.</p>
                                <p>Ajman, United Arab Emirates</p>
                                <p>Tel: +9716 5303380</p>
                                <p>Mobile: +97150 5282530</p>
                                <p>Email: info@gotcheme.com</p>
                                <p>Website: www.gotcheme.com</p>
                            </div>
                            <div class="address" style="margin-left:50px;float:right;">
                                <h3>Pakistan</h3>
                                <p>Diaun Pharma</p>
                                <p>Lahore Pakistan</p>
                                <p>Tel: +92 3217745174</p>
                                <p>Email: info@diaunpharma.com</p>
                            </div>
                        </div>
                        </div>
                  <div class="col-md-5">
                      <div class="span-support">
                        <h4>GET IN TOUCH</h4>
                        <p>Fill the form below to get in touch with us</p>
          
                      </div>
                    <form id="contact-form" accept-charset="utf-8" method="post">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
										<p id="m-sent" style="color:#90c744;display:none;margin-bottom:5px;">Message sent successfully!</p>
										<p id="m-failed" style="color:#FF5733;display:none;margin-bottom:5px;">Message sending failed, try again!</p>
                                        <p style="float:left"><input type="submit" class="btn btn-warning" name="submit" value="Send message"><div style="display:none;float:right;margin-right:50%;" class="post-loader"></div></p>
                                    </div>
                                </div>
                            </div>
                    </form>
                  </div>
                </div> 
            </div>       
        </div>
        <div class="main-call-out">
            <div class="section">
                <div class="call-out">
                    <div class="text-label">
                        <h2>WE TAKE YOUR BUSINESS FURTHER</h2>
                    </div>
                    <p><button type="button" class="btn-callout" data-toggle="modal" data-target="#myModal">GET A QUOTE</button></p>
                </div>
            </div>
        </div>
        <div class="maps">
            <div id="map"></div>
			
			<div class="container">
			  <h2>Modal Example</h2>
			  <!-- Trigger the modal with a button -->

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Get a quote</h4>
					</div>
					<div class="modal-body">
					  <form id="quote-form" accept-charset="utf-8" method="post">
                        <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="quote_name" type="text" name="q-name" class="form-control" placeholder="Name of person/ company" required="required" data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="quote_email" type="email" name="q-email" class="form-control" placeholder="Email address" required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="quote_message" name="q-message" class="form-control" placeholder="Project description" rows="6" required="required" data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
										<p id="qm-sent" style="color:#90c744;display:none;margin-bottom:5px;">Request sent successfully!</p>
										<p id="qm-failed" style="color:#FF5733;display:none;margin-bottom:5px;">Request sending failed, try again!</p>
                                        <p style="float:left"><input type="submit" class="btn btn-warning" name="q-submit" value="Request Quote"><div style="display:none;float:right;margin-right:50%;" class="qpost-loader"></div></p>
                                    </div>
                                </div>
                            </div>
                    </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>
			  
			</div>
			
            <script>
                      function initMap() {
                    // Styles a map in night mode.
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 39.425728, lng: -74.507175},
                      zoom: 15,
                      styles: [
                            {
                                "featureType": "administrative",
                                "elementType": "geometry.fill",
                                "stylers": [
                                    {
                                        "visibility": "on"
                                    },
                                    {
                                        "color": "#000000"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.text.fill",
                                "stylers": [
                                    {
                                        "color": "#444444"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "hue": "#ff0000"
                                    }
                                ]
                            },
                            {
                                "featureType": "administrative.province",
                                "elementType": "geometry.stroke",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#f2f2f2"
                                    }
                                ]
                            },
                            {
                                "featureType": "landscape.man_made",
                                "elementType": "labels",
                                "stylers": [
                                    {
                                        "saturation": "36"
                                    }
                                ]
                            },
                            {
                                "featureType": "poi",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "road",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "saturation": -100
                                    },
                                    {
                                        "lightness": 45
                                    }
                                ]
                            },
                            {
                                "featureType": "road.highway",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "simplified"
                                    }
                                ]
                            },
                            {
                                "featureType": "road.arterial",
                                "elementType": "labels.icon",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "transit",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "visibility": "off"
                                    }
                                ]
                            },
                            {
                                "featureType": "water",
                                "elementType": "all",
                                "stylers": [
                                    {
                                        "color": "#14a2d1"
                                    },
                                    {
                                        "visibility": "on"
                                    }
                                ]
                            }
                        ]
                                });
                  }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&callback=initMap" async defer></script>
        </div>  

    
    </div>
    <!-- END MAIN CONTAINER -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script> 
    <script> 
    $(function(){
      $("#footer").load("footer.php"); 
    });
    </script> 
    <div id="footer"></div>
    <a href="#0" class="cd-top" style="margin-bottom:18px">Top</a>
    <!-- ==============================================
    SCRIPTS
   =============================================== -->
    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->

    <script src="js/top.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.min.js'></script>
    <script src="js/testimonials.js"></script>
   <!-- <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>-->
    <script src="js/counter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--<script src="js/contact.js"></script>-->
    <script src="js/validator.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/maps-style.js"></script>
    <script src="js/loader.js"></script>
	
	<script>
		$("form#contact-form").submit(function(e) {
			$('.post-loader').fadeIn('slow');
			var name=$("#form_name").val();
			var email=$("#form_email").val();
			var msg=$("#form_message").val();
			$.ajax({
				url: 'contact.php',
				type: 'POST',
				data:  {name: name, email: email, message: msg},
				success: function (data) {
				   $('.post-loader').fadeOut('fast');
					if(data=='true'){
						$('#m-sent').show().delay(10000).fadeOut();
					}else{
						$('#m-failed').show().delay(10000).fadeOut();
					}
				},
			});
		});
	</script>
	<script>
		$("form#quote-form").submit(function(e) {
			$('.qpost-loader').fadeIn('slow');
			var name=$("#quote_name").val();
			var email=$("#quote_email").val();
			var msg=$("#quote_message").val();
			$.ajax({
				url: 'quote.php',
				type: 'POST',
				data:  {name: name, email: email, message: msg},
				success: function (data) {
				   $('.qpost-loader').fadeOut('fast');
					if(data=='true'){
						$('#qm-sent').show().delay(10000).fadeOut();
					}else{
						$('#qm-failed').show().delay(10000).fadeOut();
					}
				},
			});
		});
	</script>

</body>

</html>
