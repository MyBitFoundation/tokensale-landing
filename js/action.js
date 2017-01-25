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
            Action.closePopup();
        })

        $('.send_registration').click(function() {
            Action.registration();
        })

        $('.send_login').click(function() {
            Action.login();
        })

        $(document).on('click',function(e) {
            if ($(e.target).closest(".popup__wrap, .btn_registration, .btn_login").length) return;
            Action.closePopup();
        })
    },

    openPopup: function(_popup) {
        $('body').addClass('static');
        $('.overlay').addClass('active');
        $(_popup).addClass('open');
    },

    closePopup: function() {
        $('body').removeClass('static');
        $('.overlay').removeClass('active');
        $('.popup__wrap').removeClass('open');
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
                        Action.openPopup($('.popup-success'));
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
                        window.open('/platform.php', '_blank');
                    } else {
                        for(var i in response.errors) {
                            $('#'+i).parent().addClass('error').find('.error_t').html(response.errors[i]);
                        }
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

