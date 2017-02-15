var Action = {

    watch_video: null,

    init: function() {
        this.watch_video = document.getElementById("watch_video");

        this.initEvents();
    },

    initEvents: function() {
        $('.btn_registration').click(function() {
            Action.openPopup($('.popup-register'));
        })

        $('.btn_login').click(function() {
            Action.openPopup($('.popup-login'));
        })

        $('.popup__close').click(function() {
            Action.closePopup();
        })

        $('.send_registration').click(function() {
            Action.registration();
        })

        $('.send_login').click(function() {
            Action.login();
        })

        $('.btn_subscribe').click(function() {
            Action.subscribe($('#subscribe_form_header'));
        })

        $('.btn_subscribe_2').click(function() {
            Action.subscribe($('#subscribe_form_middle'));
        })

        $('.btn_say_in_touch').click(function() {
            Action.sayInTouch();
        })

        $('.open_popup_watch_video').click(function() {
            Action.openPopup($('.popup-video'));
            setTimeout(function() {
                Action.watch_video.currentTime = 0;
                Action.watch_video.play();
            },1000);

            $('.popup-video iframe').attr('src','https://player.vimeo.com/video/191182539');
        })

        $(document).on('click',function(e) {
            if ($(e.target).closest(".popup__wrap, .btn_registration, .btn_login, .open_popup_watch_video, .header__btnMenu").length) return;
            Action.closePopup(function() {
                $('.popup__wrap iframe').removeAttr('src');
            });
        })
    },

    openPopup: function(_popup) {
        $('body').addClass('static');
        $('.overlay').addClass('active');
        $(_popup).addClass('open');
    },

    closePopup: function(callback) {
        var is_open_nav__wrap = false;
        $('.nav__wrap').each(function(e,value) {
            if($(value).hasClass('open'))
                is_open_nav__wrap = true;
        })
        if(!is_open_nav__wrap)
            $('body').removeClass('static');
        $('.overlay').removeClass('active');
        $('.popup__wrap').removeClass('open');
        $('.popup__wrap input, .popup__wrap textarea').val('');

        $('.popup__wrap iframe').removeAttr('src');
        Action.watch_video.pause();

        if(callback)
            callback();
    },

    registration: function() {
        $('.popup-register .form__row').removeClass('error');
        var status = true;

        if(!$('#registerEmail').val() || !this.validateEmail($('#registerEmail').val())) {
            $('#registerEmail').parent().addClass('error').find('.error_t').html('Incorrect e-mail');
            status = false;
        }

        if(!$('#registerPassword').val()) {
            $('#registerPassword').parent().addClass('error').find('.error_t').html('Incorrect password');
            status = false;
        }

        if(!$('#registerPasswordCopy').val()) {
            $('#registerPasswordCopy').parent().addClass('error').find('.error_t').html('Incorrect password copy');
            status = false;
        }

        if($('#registerPasswordCopy').val() != $('#registerPassword').val()) {
            $('#registerPasswordCopy').parent().addClass('error').find('.error_t').html('Passwords do not match');
            status = false;
        }

        if(status) {
            var data = {
                action : 'registration',
                email: $('#registerEmail').val(),
                password: $('#registerPassword').val(),
                passwordCopy: $('#registerPasswordCopy').val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'action.php',
                data: data,
                success: function (response) {
                    if(response.result) {
                        $('#registerEmail').val('');
                        $('#registerPassword').val('');
                        $('#registerPasswordCopy').val('');
                        Action.closePopup();
                        Action.openPopup($('.popup-registration-success'));
                    } else {
                        for(var i in response.errors) {
                            $('#'+i).parent().addClass('error').find('.error_t').html(response.errors[i]);
                        }
                    }
                }
            });
        }
    },

    login: function(callback) {
        $('.popup-login .form__row').removeClass('error');
        var status = true;

        if(!$('#loginEmail').val() || !this.validateEmail($('#loginEmail').val())) {
            $('#loginEmail').parent().addClass('error').find('.error_t').html('E-mail is empty');
            status = false;
        }

        if(!$('#loginPassword').val()) {
            $('#loginPassword').parent().addClass('error').find('.error_t').html('Password is empty');
            status = false;
        }

        if(status) {
            var data = {
                action : 'authorisation',
                email: $('#loginEmail').val(),
                password: $('#loginPassword').val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'action.php',
                data: data,
                success: function (response) {
                    if(response.result) {
                        Action.closePopup();
                        window.location.href = 'platform.php';
                    } else {
                        for(var i in response.errors) {
                            $('#'+i).parent().addClass('error').find('.error_t').html(response.errors[i]);
                        }
                    }
                }
            });
        }
    },

    subscribe: function(form) {
        var status = true;
        $('.form__row',form).removeClass('error');
        if(!$('.subscribe_email',form).val() || !this.validateEmail($('.subscribe_email',form).val())) {
            $('.form__row',form).addClass('error').find('.error-txt span').html(' '+'E-mail is invalid');
            status = false;
        }

        if(status) {
            var data = {
                action : 'subscribe',
                email: $('.subscribe_email',form).val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'action.php',
                data: data,
                success: function (response) {
                    if(response.result) {
                        $('.subscribe_email',form).val('');
                        $('.popup-mailchimp-success h2').html('Thank you for subscribing!');
                        Action.openPopup($('.popup-mailchimp-success'));
                    } else {
                        $('.form__row',form).addClass('error').find('.error-txt span').html(' '+response.errors);
                    }
                }
            });
        }
    },

    sayInTouch: function() {
        var form = $('#say_in_touch_form');
        var status = true;
        $('.form__row',form).removeClass('error');

        if(!$('#email').val() || !this.validateEmail($('#email').val())) {
            $('#email').parent().addClass('error').find('.error-txt span').html(' '+'E-mail is invalid');
            status = false;
        }

        if(status) {
            var data = {
                action : 'say_in_touch',
                email: $('#email',form).val(),
                name: $('#name',form).val(),
                reference: $('#reference',form).val(),
                message: $('#message',form).val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'action.php',
                data: data,
                success: function (response) {
                    if(response.result) {
                        $('.popup-mailchimp-success h2').html('Thank you!');
                        Action.openPopup($('.popup-mailchimp-success'));
                        $('#email',form).val('');
                        $('#name',form).val('');
                        $('#reference',form).val('');
                        $('#message',form).val('');
                    } else {
                        $('#email').parent().addClass('error').find('.error-txt span').html(' '+response.errors);
                    }
                }
            });
        }
    },

    validateEmail: function(email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if( !emailReg.test( email ) ) {
            return false;
        } else {
            return true;
        }
    },

}

$(document).ready(function() {
    Action.init();
});

