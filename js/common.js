'use strict';

var Common;

Common = {

    init: function () {
        var self = this;

        self.initEvents();
        self.initScrollTextarea();
        self.initScrollTeamDesc();
        self.headerFixed();
        self.skrollrInit();
        self.popupStatic();
        self.initScrollify();


        //FORM
        $('.input').focusout(function(){
            var el = $(this);
            if (el.val() == ''){
                el.removeClass('fill');
            }
            else {
                el.addClass('fill');
            };
        });
        $('.input__extend input').focus(function(){
            $(this).closest('.form__row').addClass('focus');
        }).focusout(function () {
            $(this).closest('.form__row').removeClass('focus');
        });
        $('#textarea').focusout(function(){
            var el = $(this);
            el.closest('.scroll-textarea').removeClass('focus');
            if (el.val() == ''){
                el.closest('.scroll-textarea').removeClass('fill');
            }
            else {
                el.closest('.scroll-textarea').addClass('fill');
            };
        }).focusin(function(){
            var el = $(this);
            el.closest('.scroll-textarea').addClass('focus');
        });

        $(window).on({
            load: function () {
                Common.sizeTeamItem();
            },
            resize: function () {
                Common.sizeTeamItem();
                Common.popupStatic();
            },
            scroll: function () {
                Common.headerFixed();
            }
        });
    },

    initEvents: function () {
        $('.tabs-nav__link').on('click',Common.toggleTabs);
        $('.header__btnMenu').on('click',Common.toggleMobMenu);
        $('.nav__link').on('click',Common.clickMobMenu);
        $('.team__item').on('click', function (e) {
            if ($(e.target).closest(".team-info__wrap").length) return;
            $('.team__item').removeClass('hover').removeClass('close');
            $(this).addClass('hover');
            if ($(window).width() <= 767) {
                $('body').addClass('static');
                $('.header__wrap .header').addClass('hide');
            }
        });
        $('.team__item').on('mouseout', function () {
            $(this).removeClass('hover');
        });
        $('.team-info__close').on('click',function(e) {
            e.preventDefault();
            Common.teamHoverClose();
        });

        $('.team__photoWrap').each(function() {
            var th = $(this).height(),//box height
                tw = $(this).width(),//box width
                im = $(this).children('img'),//image
                ih = im.height(),//inital image height
                iw = im.width();//initial image width
            if (ih>iw) {//if portrait
                im.addClass('ww').removeClass('wh');//set width 100%
            } else {//if landscape
                im.addClass('wh').removeClass('ww');//set height 100%
            }
            //set offset
            var nh = im.height(),//new image height
                nw = im.width(),//new image width
                hd = (nh-th)/2,//half dif img/box height
                wd = (nw-tw)/2;//half dif img/box width
            if (nh<nw) {//if portrait
                im.css({marginLeft: '-'+wd+'px', marginTop: 0});//offset left
            } else {//if landscape
                im.css({marginTop: '-'+hd+'px', marginLeft: 0});//offset top
            }
        });

        $('.btn_scroll').click(function(event) {
            var id = $(this).attr("href");
            var offset = $('header').height() - 2;
            var target = $(id).offset().top - offset;
            $('html, body').animate({
                scrollTop: target
            }, 500);
            event.preventDefault();
        });
    },

    toggleTabs: function (e) {
        e.preventDefault();
        $('.tabs-nav__link').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.tabs__pane').not(tab).removeClass('active').removeClass('in');
        $(tab).addClass('active');
        setTimeout(function(){
            $(tab).addClass('in');
        }, 100);
    },

    sizeTeamItem: function () {
        var teamItem = $(".team__item"),
            teamItemWidth = teamItem.width();
        teamItem.height(teamItemWidth/1.18);
    },

    initScrollTextarea: function () {
        $('.textarea-scrollbar').scrollbar();
    },

    initScrollTeamDesc: function () {
        $('.team-info__desc').scrollbar();
    },

    headerFixed: function () {
        var header = $(".header__wrap"),
            headerTopPosiition = header.offset().top,
            windowScroll = $(window).scrollTop();
        if(windowScroll >= headerTopPosiition ) {
            header.addClass('fixed')
        } else {
            header.removeClass('fixed')
        }
    },

    toggleMobMenu: function (e) {
        e.preventDefault();
        var btnMenu = $('.header__wrap .header__btnMenu');
        var header = $('.header__wrap');
        if ((navigator.userAgent.match(/iPad|iPhone|iPod|Android|Windows Phone|webOS|Opera Mini/i)) && (!$(this).closest('.header').hasClass('header__mob')) && (!header.hasClass('fixed'))) {
            $('html, body').stop().animate({
                scrollTop: header.offset().top
            }, 500, function() {
                $(btnMenu).addClass('active');
                $(btnMenu).next('.nav__wrap').addClass('open');
                $('body').addClass('static');
            });
        } else {
            $(this).toggleClass('active');
            $(this).next('.nav__wrap').toggleClass('open');
            $('body').toggleClass('static');
        }
    },

    clickMobMenu: function (e) {
        e.preventDefault();
        $('.nav__wrap').removeClass('open');
        $('.header__btnMenu').removeClass('active');
        $('body').removeClass('static');
    },


    teamHoverClose: function () {
        $('.team__item').removeClass('hover').addClass('close');
        $('body').removeClass('static');
        $('.header__wrap .header').removeClass('hide');
    },

    skrollrInit: function () {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(window).width() > 767) {
            skrollr.init();
        }
    },

    popupStatic: function () {
        var popup = $('.popup__wrap.open .popup__in');
        if($(window).height() < popup.height() + 40) {
            popup.addClass('static');
        } else {
            popup.removeClass('static');
        }
    },

    initScrollify: function () {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(window).width() > 767) {
            $.scrollify({
                section : ".section",
                scrollSpeed: 1000,
                easing: "easeOutExpo",
                sectionName : false,
            });
        }
    },

};

$(document).ready(function() {
    Common.init();
});
