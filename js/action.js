var Action = {

    init: function() {
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
            Action.closePopup(function() {
                $('.popup__wrap iframe').removeAttr('src');
            });
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
        $('body').removeClass('static');
        $('.overlay').removeClass('active');
        $('.popup__wrap').removeClass('open');
        if(callback)
            callback();
    },

    registration: function() {
        $('.popup-register .form__row').removeClass('error');
        var status = true;

        if(!$('#registerEmail').val() || !this.validateEmail($('#registerEmail').val())) {
            $('#registerEmail').parent().addClass('error').find('.error_t').html('Incorrect email');
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

    login: function() {
        $('.popup-login .form__row').removeClass('error');
        var status = true;

        if(!$('#loginEmail').val() || !this.validateEmail($('#loginEmail').val())) {
            $('#loginEmail').parent().addClass('error').find('.error_t').html('Email is empty');
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
                        window.open('platform.php', '_blank');
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
            $('.form__row',form).addClass('error').find('.error-txt span').html(' '+'Email is invalid');
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
            $('#email').parent().addClass('error').find('.error-txt span').html(' '+'Email is invalid');
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
    }

}

$(document).ready(function() {
    Action.init();
});

