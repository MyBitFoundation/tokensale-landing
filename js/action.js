var Action = {

    email: null,
    password: null,

    init: function() {
        this.initEvents();
    },

    initEvents: function() {
        $('.form_subscribe .btn_subscribe').click(function() {
            Action.subscribe($(this).closest('.form_subscribe'));
        })

        $('.form_subscribe .input__wrap [name=email]').keypress(function (e) {
            $(this).closest('.form__row').removeClass('error');
        })

       /* $('.slack').click(function() {
            window.open(window.config.slackInvite, '_blank');
        })

        $('.header__profileName').click(function() {
            window.location.href = window.config.redirect;
        })

        $('.header__sign').click(function() {
            $.ajax({
                type: "GET",
                dataType: "json",
                url:  window.config.request.logout,
                xhrFields: { withCredentials: true },
                success: function(res) {
                    location.reload();
                }
            })
        })

        $('.popup-register').keypress(function (e) {
            if (e.which == 13) {
                Action.registration();
            }
        })

        $('#login').keypress(function (e) {
            if (e.which == 13) {
                Action.login();
            }
        })

        $('#login-tfa-form').submit(function (e) {
            e.preventDefault();
            $('#send-login-tfa').click();
        })

        $('.btn_registration').click(function() {
            Action.openPopup($('.popup-register'));
        })

        $('.btn_login').click(function() {
            Action.openPopup($('#login'));
        })

        $('.popup__close').click(function() {
            Action.closePopup();
        })

        $('.send_registration').click(function() {
            Action.registration();
        })

        $('#successRegistrationBtn').click(function() {
            Action.successRegistration();
        })

        $('#send-login').click(function() {
            Action.login();
        })

        $('#send-login-tfa').click(function() {
            Action.tfaLogin();
        })*/
    },

 /*   openPopup: function(_popup) {
        $('.error').removeClass('error');
        $('body').addClass('static');
        $('.overlay').addClass('active');
        setTimeout(function() {$(_popup).addClass('open');}, 150);
        setTimeout(function() {
            if($(_popup).find('input')[0]) {
                $(_popup).find('input')[0].focus();
            }
        }, 300);
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
    },*/

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
                url: window.config.request.signup,//'action.php',
                data: data,
                xhrFields: { withCredentials: true },
                success: function (response) {
                    if(response.email && response.lastLoginDate) {
                        $('#registerEmail').val('');
                        $('#registerPassword').val('');
                        $('#registerPasswordCopy').val('');
                        Action.closePopup();
                        Action.openPopup($('.popup-registration-success'));
                    }
                },
                error: function(error) {
                    var response = error.responseJSON.message;
                    if(/email/i.test(response)) {
                        $('#registerEmail').parent().addClass('error').find('.error_t').html(response);
                    }
                    if(/password/i.test(response)) {
                        $('#registerPassword').parent().addClass('error').find('.error_t').html(response);
                    }
                }
            });
        }
    },

    successRegistration: function() {
        $.ajax({
            type: "GET",
            dataType: "json",
            url:  window.config.request.info,
            xhrFields: { withCredentials: true },
            success: function(res) {
                Action.closePopup();
                window.location.href = window.config.redirect;
            },
            error: function(error) {
                Action.closePopup();
            }
        })
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

            $('#send-login').attr("disabled", "disabled");

            $.ajax({
                type: "POST",
                dataType: "json",
                url: window.config.request.login,//'action.php',
                xhrFields: { withCredentials: true },
                data: data,
                success: function (response) {
                    if(response.email && response.lastLoginDate) {
                        Action.closePopup();
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url:  window.config.request.info,
                            xhrFields: { withCredentials: true },
                            success: function(res) {
                                window.location.href = window.config.redirect;
                            }
                        })
                    }
                },
                error: function (error) {
                    if(error.status === 406){
                        if($('#loginEmail').val() && $('#loginPassword').val()) {
                            email = $('#loginEmail').val();
                            password = $('#loginPassword').val();
                        }
                        Action.closePopup();
                        Action.openPopup($('#login-tfa'));
                    } else {
	                    var response = error.responseJSON.message;
                        $('#loginEmail').parent().addClass('error').find('.error_t').html(response);
                        $('#loginPassword').parent().addClass('error').find('.error_t').html(response);
                    }
                }
            });
        }
    },

    tfaLogin: function(callback) {
        $('.popup-login .form__row').removeClass('error');
        var data = {
            action : 'authorisation',
            email: email,
            password: password,
            token: $('#tfaToken').val()
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: window.config.request.login,//'action.php',
            xhrFields: { withCredentials: true },
            data: data,
            success: function (response) {
                if(response.email && response.lastLoginDate) {
                    Action.closePopup();
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url:  window.config.request.info,
                        xhrFields: { withCredentials: true },
                        success: function(res) {
                            window.location.href = window.config.redirect;
                        }
                    })
                }
            },
            error: function (error) {
	            var response = error.responseJSON.message;
                $('#tfaToken').parent().addClass('error').find('.error_t').html(response);
            }
        });
    },

    subscribe: function(form) {
        $('.form__row',form).removeClass('error');
        var data = {
            action : 'subscribe',
            email: $('.input__wrap [name=email]',form).val()
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: 'action.php',
            data: data,
            success: function (response) {
                if(response.result) {
                    var $button = $('.btn_subscribe',form);
                    $button.closest('.form__updates_js').addClass('start');
                    setTimeout(function(){
                        $button.closest('.form__updates_js').addClass('processing').removeClass('start');
                        setTimeout(function() {
                            $button.closest('.form__updates_js').addClass('submited').removeClass('processing');
                        }, 2300);
                    }, 700);
                } else {
                    $('.form__row',form).addClass('error');
                    $('.form__errorTxt',form).html(response.errors);
                }
            }
        });
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
