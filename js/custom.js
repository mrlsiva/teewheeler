$(document).ready(function() {

    "use strict"; //Start of Use Strict
    
    //CONTACT FORM VALIDATION	
    if ($('.contact-form').length) {
        $('.contact-form').each(function() {
            $(this).validate({
                errorClass: 'error',
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
						dataType: "json",
                        url: "php-mailer/mail.php",
                        data: $(form).serialize(),
                        success: function(data) {
                            if (data.success) {
                                $(form)[0].reset();
                                $(form).find('.sucessMessage').html(data.message);
                                $(form).find('.sucessMessage').show();
                                $(form).find('.sucessMessage').delay(3000).fadeOut();
                            } else {
                                $(form).find('.failMessage').html(data.message);
                                $(form).find('.failMessage').show();
                                $(form).find('.failMessage').delay(3000).fadeOut();
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            $(form).find('.failMessage').html(textStatus);
                            $(form).find('.failMessage').show();
                            $(form).find('.failMessage').delay(3000).fadeOut();
                        }
                    });
                }
            });
        });
    }

    return false;
    // End of use strict
});