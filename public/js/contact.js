$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                full_name: {
                    required: true,
                    minlength: 2
                },
                phone_number: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                bank_name:{
                    required: true
                },
                account_number:{
                    required: true
                },
                donation_amount:{
                    required: true
                }
            },
            messages: {
                full_name: {
                    required: "Masukan Nama Anda.",
                    minlength: "Masukan Nama Anda minimal 2 karakter"
                },
                phone_number: {
                    required: "Masukan Nomer Telepon Anda."
                },
                email: {
                    required: "Masukan Email Anda."
                },
                bank_name:{
                    required: "Masukan Nama Bank."
                },
                account_number:{
                    required: "Masukan No Rekening."
                },
                donation_amount:{
                    required: "Masukan Jumlah IDR"
                }
            },
            // submitHandler: function(form) {
            //     $(form).ajaxSubmit({
            //         type:"POST",
            //         data: $(form).serialize(),
            //         url:"contact_process.php",
            //         success: function() {
            //             $('#contactForm :input').attr('disabled', 'disabled');
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $(this).find(':input').attr('disabled', 'disabled');
            //                 $(this).find('label').css('cursor','default');
            //                 $('#success').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#success').modal('show');
            //             })
            //         },
            //         error: function() {
            //             $('#contactForm').fadeTo( "slow", 1, function() {
            //                 $('#error').fadeIn()
            //                 $('.modal').modal('hide');
		    //             	$('#error').modal('show');
            //             })
            //         }
            //     })
            // }
        })
    })
        
 })(jQuery)
})