
var BaseFormValidation = function() {
    // Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function(){
        jQuery('.booking-validation').validate({
            ignore: [],
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.row > div').append(error);
            },
            highlight: function(e) {
                var elem = jQuery(e);

                elem.closest('.row').removeClass('has-error').addClass('has-error');
                elem.closest('.help-block').remove();
            },
            success: function(e) {
                var elem = jQuery(e);

                elem.closest('.row').removeClass('has-error');
                elem.closest('.help-block').remove();
            },
            rules: {
                'check-in':{
                    required: true
                },
                'check-out': {
                    required: true
                },
                'adult': {
                    required: true,
                },
                'hotel-rate': {
                    required: true
                }
            },
            messages: {
                'check-in': {
                    required: 'Please select Check-in date.'
                },
                'check-out': {
                    required: 'Select Check-in date first.'
                },
                'adult': {
                    required: 'Please select adult.'
                },
                'hotel-rate': {
                    required: 'Please select hotel first.'
                }
            }
        });
    };

    var initValidationBootstrap2 = function(){
        jQuery('.js-validation-bootstrap').validate({
            ignore: [],
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            // errorPlacement: function(error, e) {
            //     jQuery(e).parents('.row > div').append(error);
            // },
            highlight: function(e) {
                var elem = jQuery(e);

                elem.closest('.row').removeClass('has-error').addClass('has-error');
                elem.closest('.help-block').remove();
            },
            success: function(e) {
                var elem = jQuery(e);

                elem.closest('.row').removeClass('has-error');
                elem.closest('.help-block').remove();
            },
            rules: {
                'firstname': {
                    required: true
                },
                'lastname': {
                    required: true
                },
                'countrycode1': {
                    required: true
                },
                'areacode1': {
                    required: true,
                    digits: true
                },
                'contactnumber1': {
                    required: true,
                    digits: true
                },
                'countrycode2': {
                    required: true
                },
                'areacode2': {
                    required: true,
                    digits: true
                },
                'contactnumber2': {
                    required: true,
                    digits: true
                },
                'email': {
                    required: true,
                    email: true
                },
                'confirmemail': {
                    required: true,
                    email: true,
                    equalTo: '#email'
                },
                'flight-val': {
                    required: true
                },
                'request-flight-val': {
                    required: true
                },
                'condition-val': {
                    required: true   
                }
            },
            messages: {
                'firstname': {
                    required: 'Enter First Name'
                },
                'lastname': {
                    required: 'Enter Last Name'
                },
                'countrycode1': {
                    required: 'Select Country Code'
                },
                'areacode1': {
                    required: 'Enter Area Code'
                },
                'contactnumber1': {
                    required: 'Enter Contact Number'
                },
                'countrycode2': {
                    required: 'Select Country Code'
                },
                'areacode2': {
                    required: 'Enter Area Code'
                },
                'contactnumber2': {
                    required: 'Enter Contact Number'
                },
                'email': {
                    required: 'Enter Email Address'
                },
                'confirmemail': {
                    required: 'Confirm Email Address',
                    equalTo: 'Enter the same email address'
                },
                'flight-val': {
                    required: 'Please choose an answer'
                },
                'request-flight-val': {
                    required: 'Please choose an answer'
                },
                'condition-val': {
                    required: 'Please check Terms and Conditions'   
                }
            }
        });
    };

    return {
        init: function () {

            
            // Init Bootstrap Forms Validation
            initValidationBootstrap();
            initValidationBootstrap2();
            
            // //Init validation onChange
            // jQuery('#adult').on('change', function(){
            //     var validator = $( ".js-validation-bootstrap").validate();                
            //     validator.element( "#adult");
            // });

            // jQuery('#child').on('change', function(){
            //     var validator = $( ".js-validation-bootstrap").validate();
            //     validator.element( "#child");
            // });

            // jQuery('#room').on('change', function(){
            //     var validator = $( ".js-validation-bootstrap").validate();
            //     validator.element( "#room");
            // });

            // // jQuery('#adult').on('change', function(){                
            // //     var adult = jQuery('#adult').val();
            // //     var child = jQuery('#child').val();
            // //     var total = parseInt(adult) + parseInt(child);

            // //     jQuery('#total-guest').val(total);
            // //     var a = jQuery('#total-guest').val();
            // //     alert(a);
            // //     validator.element( "#room");
            // // });

            
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BaseFormValidation.init(); });
