var Action = {

    email: null,
    password: null,

    reg_email: null,
	
	logged: false,

    countryCode: null,

    init: function() {
        this.initEvents();
        this.checkIsLogged();
    },

    initEvents: function() {


        $('.form_subscribe .btn_subscribe').click(function() {
            Action.subscribe($(this).closest('.form_subscribe'));
        })

        $('.form_subscribe .input__wrap [name=email]').keypress(function (e) {
            $(this).closest('.form__row').removeClass('error');
        })


        $('input').keypress(function (e) {
            if (e.which == 13) {
                $(this).closest('form').find('.submit_event').click();
                return false;
            }
        });


        $('#form-signUp').submit(function (e) {
            e.preventDefault();
            $('.send_registration').click();
        })

        $('#form-signIn').submit(function (e) {
            e.preventDefault();
            $('.send_login').click();
        })

        $('#form-2fa').submit(function (e) {
            e.preventDefault();
            $('.send_2fa').click();
        })

        $('.send_registration').click(function() {
            Action.registration();
        })

        $('.send_login').click(function() {
            Action.login();
        })

        $('.send_2fa').click(function() {
            Action.tfaLogin();
        })

        $('.send_question').click(function() {
            Action.sayInTouch();
        })

        $('#modal-success').on('hide.bs.modal', function (e) {
            Action.successRegistration();
        });

        $('.pre_offer input[name=email]').blur(function() {
            var block = $('.pre_offer');
            $('.form__row',block).removeClass('error');

            if($(this).val() && !Action.validateEmail($('input[name=email]',block).val()))
                $('input[name=email]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect e-mail');
        });

        $('#modal-is-us-citizen').on('show.bs.modal',function() {
            $('#is-us-citizen-yes').off('click').on('click',function() {
                $('#modal-is-us-citizen').modal('hide');
                $('#modal-disabled-dashboard').modal('show');
            });

            $('#is-us-citizen-no').off('click').on('click',function() {
                $('#modal-is-us-citizen').modal('hide');
                window.location.href = window.config.redirect;
            });
        });

        $('.btn_pre_sign_up').click(function() {
            var block = $('.pre_offer'),
                status = true;

            $('.form__row',block).removeClass('error');

            if(!$('input[name=email]',block).val() || !Action.validateEmail($('input[name=email]',block).val())) {
                $('input[name=email]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect e-mail');
                status = false;
            }

            if(status) {
                Action.reg_email = $('input[name=email]',block).val();
                $('input[name=email]',block).val('');
                $('#modal-signUp').modal('show');
            }

        });

        $('#modal-signUp, #modal-signIn, #modal-askQuestion').on('hide.bs.modal', function (e) {
            $('.form__row',this).removeClass('error').find('input').val('');
            $('.form__row',this).find('textarea').val('');
            $('.statusBox',this).html('');
        });

        $('#modal-signUp').on('show.bs.modal',function() {
            var btn = $(this).find('.send_registration');
            btn.html(btn.attr('data-text-send'));
        });

        $('.crowdfunding__milestones__link').click(function(event) {
            if ($(window).width() > 1024) {
                $('#crowdfunding__milestones').modal();
            }
            else {
                $('#crowdfunding__milestones__mobile').modal();
            }
        })

        $('.escrow__release__terms__link').click(function(event) {
            if ($(window).width() > 1024) {
                $('#escrow__release__terms').modal();
            }
            else {
                $('#escrow__release__terms__mobile').modal();
            }
        })
        $('.deal__sheet__link').click(function(event) {
            $('#deal__sheet').modal();
        })
    },

    registration: function() {
        var block = $('#modal-signUp');
        if($(block).find('.send_registration').html() == $(block).find('.send_registration').attr('data-text-back')) {
            $('#modal-signUp').modal('hide');
            return;
        }

        $('.form__row',block).removeClass('error');
        var status = true;

        if(!$('input[name=password]',block).val()) {
            $('input[name=password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect password');
            status = false;
        }

        if(!$('input[name=repeat_password]',block).val()) {
            $('input[name=repeat_password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect repeat password');
            status = false;
        }

        if($('input[name=repeat_password]',block).val() != $('input[name=password]',block).val()) {
            $('input[name=repeat_password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Passwords do not match');
            status = false;
        }

        if(!$('input[name=address]',block).val()) {
            $('input[name=address]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect Ethereum address');
            status = false;
        }

        if(status) {
            var data = {
                action : 'registration',
                email: Action.reg_email,
                password: $('input[name=password]',block).val(),
                passwordCopy: $('input[name=repeat_password]',block).val(),
                address: $('input[name=address]',block).val()
            };
            $.ajax({
                type: "POST",
                dataType: "json",
                url: window.config.request.signup,//'action.php',
                data: data,
                xhrFields: { withCredentials: true },
                success: function (response) {
                    if(response.email && response.lastLoginDate) {
                        block.modal('hide');
                        $('#modal-success').modal('show');
                    }
                },
                error: function(error) {
                    var response = error.responseJSON.message;
                    if(/email/i.test(response)) {
                        $(block).find('.statusBox').html(response);
                        $(block).find('.send_registration').html($(block).find('.send_registration').attr('data-text-back'));
                    }
                    if(/password/i.test(response)) {
                        $('input[name=password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html(response);
                        $('input[name=repeat_password]',block).closest('.form__row').addClass('error');
                    }
                    if(/address/i.test(response)) {
                        $('input[name=address]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html(response);
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
                if(Action.countryCode && Action.countryCode == 'US') {
                    $('#modal-is-us-citizen').modal('show');
                } else {
                    window.location.href = window.config.redirect;
                }
            },
            error: function(error) {

            }
        })
    },

    login: function(callback) {
        var block = $('#modal-signIn');
        $('.form__row',block).removeClass('error');
        var status = true;

        if(!$('input[name=email]',block).val() || !this.validateEmail($('input[name=email]',block).val())) {
            $('input[name=email]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect e-mail');
            status = false;
        }

        if(!$('input[name=password]',block).val()) {
            $('input[name=password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect password');
            status = false;
        }

        if(status) {
            var data = {
                action : 'authorisation',
                email: $('input[name=email]',block).val(),
                password: $('input[name=password]',block).val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: window.config.request.login,//'action.php',
                xhrFields: { withCredentials: true },
                data: data,
                success: function (response) {
                    console.log(response);
                    if(response.email && response.lastLoginDate) {
                        $('#modal-signIn').modal('hide');
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url:  window.config.request.info,
                            xhrFields: { withCredentials: true },
                            success: function(res) {
                                if(Action.countryCode && Action.countryCode == 'US') {
                                    $('#modal-is-us-citizen').modal('show');
                                } else {
                                    window.location.href = window.config.redirect;
                                }
                            }
                        })
                    }
                },
                error: function (error) {
                    if(error.status === 406){
                        if($('input[name=email]',block).val() && $('input[name=password]',block).val()) {
                            Action.email = $('input[name=email]',block).val();
                            Action.password = $('input[name=password]',block).val();
                        }
                        $('#modal-signIn').modal('hide');
                        $('#modal-2fa').modal('show');
                    } else {
	                    var response = error.responseJSON.message;
                        $('input[name=email]',block).closest('.form__row').addClass('error');
                        $('input[name=password]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html(response);
                    }
                }
            });
        }
    },

    tfaLogin: function(callback) {
        var block = $('#modal-2fa');
        $('.form__row',block).removeClass('error');

        var data = {
            action : 'authorisation',
            email: Action.email,
            password: Action.password,
            token: $('input[name=token]',block).val()
        };

        $.ajax({
            type: "POST",
            dataType: "json",
            url: window.config.request.login,//'action.php',
            xhrFields: { withCredentials: true },
            data: data,
            success: function (response) {
                if(response.email && response.lastLoginDate) {
                    $('#modal-2fa').modal('hide');
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url:  window.config.request.info,
                        xhrFields: { withCredentials: true },
                        success: function(res) {
                            if(Action.countryCode && Action.countryCode == 'US') {
                                $('#modal-is-us-citizen').modal('show');
                            } else {
                                window.location.href = window.config.redirect;
                            }
                        }
                    })
                }
            },
            error: function (error) {
	            var response = error.responseJSON.message;
                $('input[name=token]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html(response);
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

    sayInTouch: function() {
        var block = $('#modal-askQuestion');
        $('.form__row',block).removeClass('error');
        var status = true;

        if(!$('input[name=email]',block).val() || !this.validateEmail($('input[name=email]',block).val())) {
            $('input[name=email]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html('Incorrect e-mail');
            status = false;
        }

        if(status) {
            var data = {
                action : 'say_in_touch',
                email: $('[name=email]',block).val(),
                name: $('[name=name]',block).val(),
                reference: $('[name=reference]',block).val(),
                message: $('[name=message]',block).val(),
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: 'action.php',
                data: data,
                success: function (response) {
                    if(response.result) {
                        $('#modal-askQuestion').modal('hide');
                        $('#modal-success-question').modal('show');
                    } else {
                        $('input[name=email]',block).closest('.form__row').addClass('error').find('.form__errorTxt').html(response.errors);
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
	
	checkIsLogged: function() {
		$.ajax({
			type: "GET",
			dataType: "json",
			url:  window.config.request.info,
			xhrFields: { withCredentials: true },
			success: function(res) {
				$('.sign-in-block').hide();

				if(Action.countryCode && Action.countryCode == 'US') {
                    $('.go-to-dashboard-block').show().find('a').attr('data-toggle', 'modal').attr('data-target','#modal-is-us-citizen');
                } else {
                    $('.go-to-dashboard-block').show().find('a').attr('href', window.config.redirect);
                }
			}
		})
	}
};

$(document).ready(function() {
    Action.init();

    if($('.current_lang').attr('data-lang') != 'en') {
        config.redirect += '/'+$('.current_lang').attr('data-lang');
    }

    Common.initCountdown('7/17/2017 12:00', 'countdown',function() {
        $('.date__title').html('Crowdsale Live');
        Common.initCountdown('8/17/2017 12:00', 'countdown',function() {
            $('.date__title').html('Crowdsale has ended');
            $('#countdown').hide();
        })
    });
});
