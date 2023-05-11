$(document).ready(function(){

    //Modal

    $('[data-modal=enter]').on('click', function() {
        $('.overlay, #enter').fadeIn('slow');
    });
    $('.modal_close').on('click', function() {
        $('.overlay, #enter, #register').fadeOut('slow');
    });

    $('[data-modal=register]').on('click', function() {
        $('.overlay, #register').fadeIn('slow');
    });
    $('.modal_close').on('click', function() {
        $('.overlay, #enter, #register').fadeOut('slow');
    });

    //Validate

    function valideForms(form) {
        $(form).validate({
            rules: {
                name: "required",
                email:{
                    required: true,
                    email: true
                }
            },
            messages: {
                name: "Пожалуйста, введите своё имя",
                email: {
                  required: "Пожалуйста, введите свою почту",
                  email: "Неправильно введен адрес почты"
                }
            }
        });
    };

    valideForms('#enter form');
    valideForms('#register form');
});