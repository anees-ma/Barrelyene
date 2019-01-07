  (function($) {
    "use strict";
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
				contact: {
					minlength:10,
				    number: true
				},
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Don't you hava a name!?"
                },
                email: {
                    required: "We need your email, its must!-):"
                },
				contact: {
                    minlength: "Please enter a valid contact number!",
					number: "Please enter digits only!"
                },
                message: {
                    required: "Please don't hesitate to speak to us!:_("
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"./contact/contact_process.php",
                    success: function(res) {
						if(res=='true'){
							$('#contactForm').fadeTo( "slow", 1, function() {
								$(this).find('label').css('cursor','default');
								$('#success').fadeIn();
								$("#contactForm").resetForm();
							});
						}
						
						else{
							$('#contactForm').fadeTo( "slow", 1, function() {
								$('#error').fadeIn();
							});
						}
                    }
                })
            }
        })
    });
	$(function() {
        $('#contactFormQ').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
				contact: {
					minlength:10,
				    number: true
				},
                description: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Please enter your name!"
                },
                email: {
                    required: "We need your email, its must!-):"
                },
				contact: {
                    minlength: "Please enter a valid contact number!",
					number: "Please enter digits only!"
                },
                message: {
                    required: "Please enter the work details!"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"./contact/quote.php",
                    success: function(data) {
						if(data=='true'){
							$('#contactFormQ').fadeTo( "slow", 1, function() {
								$(this).find('label').css('cursor','default');
								$('#successQ').fadeIn();
								$("#contactFormQ").resetForm();
						});
						}else{
							$('#contactFormQ').fadeTo( "slow", 1, function() {
								$('#errorQ').fadeIn();
							});
						}
                    }
                })
            }
        })
    })
 })(jQuery)