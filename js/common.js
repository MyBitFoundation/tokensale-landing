'use strict';

var Common;

Common = {

    init: function () {
        var self = this;

        self.initScrollTextarea();
        self.initScrollTeamDesc();
        self.headerFixed();

        //$(document).on('click',function(event) {
        //    if ($(event.target).find(".team-info__close").length) return;
        //    $(".team__item").removeClass('hover');
        //});

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


        var lastScrollTop = $(window).scrollTop(),
            delta = 5,
            eleH = $('.section__intro').outerHeight(),
            isScolling = false ;
        $(window).scroll(function () {
            if(isScolling)
                return;

            var nowScrollTop = $(this).scrollTop();
            if (Math.abs(lastScrollTop - nowScrollTop) >= delta) {
                console.log(eleH);
                if (nowScrollTop <= eleH && nowScrollTop >= lastScrollTop) {
                    isScolling = true;
                    $('html,body').animate({
                        scrollTop: $('.header__wrap').offset().top
                    }, 600, function() {
                        isScolling = false;
                        lastScrollTop = $(window).scrollTop();
                    });
                    console.log('Scroll down');
                } else if (nowScrollTop <= eleH && nowScrollTop < lastScrollTop) {
                    isScolling = true;
                    $('html,body').animate({
                        scrollTop: 0
                    }, 600, function() {
                        isScolling = false;
                        lastScrollTop = $(window).scrollTop();
                    });
                    console.log('Scroll up');
                }
                lastScrollTop = nowScrollTop;
            }
        });

        $(document).ready(function() {
            var wHeight = $(window).height();

            function parallax() {
                var pHeight = $(this).outerHeight();
                var pMiddle = pHeight / 2;
                var wMiddle = wHeight / 2;
                var fromTop = $(this).offset().top;
                var scrolled = $(window).scrollTop();
                var speed = $(this).attr('data-parallax-speed');
                var rangeA = (fromTop - wHeight);
                var rangeB = (fromTop + pHeight);
                var rangeC = (fromTop - wHeight);
                var rangeD = (pMiddle + fromTop) - (wMiddle + (wMiddle / 2));

                if (rangeA < 0) {
                    rangeA = 0;
                    rangeB = wHeight
                }

                var percent = (scrolled - rangeA) / (rangeB - rangeA);
                percent = percent * 100;
                percent = percent * speed;
                percent = percent.toFixed(2);

                var animFromBottom = (scrolled - rangeC) / (rangeD - rangeC);
                animFromBottom = animFromBottom.toFixed(2);

                if (animFromBottom >= 1) {
                    animFromBottom = 100;
                }

                $(this).css('background-position', 'center ' + percent + '%');
                $(this).find('.scroll-section').css('transform', 'translateY(' + '-' + animFromBottom + '%' + ')');
            }
            $('.section__features').each(parallax);
            $(window).scroll(function(e) {
                $('.section__features').each(parallax);
            });
        });


        self.initEvents();
        $(window).on({
            load: function () {
                Common.sizeTeamItem();
            },
            resize: function () {
                Common.sizeTeamItem();
            },
            scroll: function () {
                Common.headerFixed();
            }
        });
    },

    initEvents: function () {
        $('.tabs-nav__link').on('click',Common.toggleTabs);
        $('.header__btnMenu').on('click',Common.openMobMenu);

        if ($(window).width() < 768) {
            $('.team__item').on('click',Common.teamHoverOpen);
            $('.team-info__close').on('click',Common.teamHoverClose);
        }


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

    openMobMenu: function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).next('.nav__wrap').toggleClass('open');
        $('body').toggleClass('static');
    },

    teamHoverOpen: function () {
        $(this).addClass('hover');
        $('body').addClass('static');
    },

    teamHoverClose: function (e) {
        e.preventDefault();
        $(this).closest('.team__item').removeClass('hover');
        $('body').removeClass('static');
    },

};

$(document).ready(function() {
    Common.init();



    $.ajax({
        url: "http://ajaxhttpheaders.appspot.com",
        dataType: 'jsonp',
        success: function(headers) {
           var language = headers['Accept-Language'];
            console.log(language);

        }
    });

});