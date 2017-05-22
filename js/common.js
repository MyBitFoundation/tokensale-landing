'use strict';

var Common;

Common = {

    sectionArray: [],
    mainLinkArray: [],

    init: function () {
        var self = this;

        self.initEvents();
        self.checkFirstSection();
        self.fixPositionFooter();

        $(window).on({
            load: function () {
                setTimeout (function() {
                    window.scrollTo(0, 0);
                }, 1);
                if (location.hash) {
                    setTimeout(function() {
                        Common.scrollToSectionOnClick(location.hash);
                        history.pushState('', document.title, window.location.pathname);
                    }, 800);
                }
            },
            resize: function () {
                self.fixPositionFooter();
            },
            scroll: function () {
                Common.onScroll();
                Common.checkFirstSection();
            }
        });
        window.addEventListener("resize", function() {
            self.fixPositionFooter();
        }, false);
    },

    initEvents: function () {
        $('.btn_scroll').on('click', function (e){
            Common.scrollToSectionOnClick('#' + $(this).data('scroll'),function() {
                e.preventDefault();
            });
        });

        $('.btn-mobMenu').on('click', function (e){
            e.preventDefault();
            $(this).toggleClass('active');
            $('.overlay').toggleClass('active');
            $('.mainNav__wrap').toggleClass('open');
            $('.lang__wrap').toggleClass('visible');
            $('.header-mob').toggleClass('bg');
            $('html').toggleClass('static');
        });
        $('.overlay').on('click', function (){
            $(this).removeClass('active');
            $('.btn-mobMenu').removeClass('active');
            $('.mainNav__wrap').removeClass('open');
            $('.lang__wrap').removeClass('visible');
            $('.header-mob').addClass('bg');
            $('html').removeClass('static');
        });

        //description visible
        $('.description__link').on('click',function (e){
            e.preventDefault();
            $(this).closest('.description__wrap').toggleClass('continuation-visible');
        });

        //language selection
        $('.dropdown__link').on('click', function(e){
            $('#current__language').text($(this).data("lan"));
        });

        $('.ask-question-link').on('click', function(e) {
            $(this).hide();
            $(this).next().show();
        });

        function afterReveal( el ) {
            el.addEventListener('animationend', function( ) {
                if(el.id == 'roadmap'){
                    if ($(window).width() > 991) {
                        //$('.roadmap__progressBar').css('width', '46%')
                    } else{
                        $('.roadmap__progressBar').css({
                            //height: '46%'
                        });
                    }
                }
                if(el.id == 'structure'){
                    $('.chart__box').addClass('visible');
                }
            });
        }
        var wow = new WOW(
            {
                offset:       0,
                mobile:       true,
                live:         true,
                callback:     afterReveal
            }
        );
        wow.init();

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

    scrollToSectionOnClick: function (_id, cb) {
        if($(_id).length) {
            var headerH = $('.mainNav__wrap').height();
            var target = parseInt($(_id).offset().top) - headerH;
            if ($(window).scrollTop() != target) {
                $('html, body').animate({
                    scrollTop: target
                }, 500);
            }
            if (cb && typeof cb == "function")
                cb();
        }
    },

    onScroll: function() {
        var scrollPosition = $(document).scrollTop();
        $('.mainNav__link.btn_scroll').each(function () {
            var currentLink = $(this);
            var refElement = $('#' + currentLink.data('scroll'));
            if (refElement.position().top <= scrollPosition  && (refElement.offset().top) + refElement.outerHeight(true)  > scrollPosition) {
                $('.mainNav__link').removeClass("active");
                currentLink.addClass("active");
            }
            else{
                currentLink.removeClass("active");
            }
        });
    },

    checkFirstSection: function () {
        var firstSection = $('.large-header'),
            wrap = $('.wrapper'),
            scrollPosition = $(document).scrollTop();
        if (firstSection.innerHeight() > scrollPosition) {
            firstSection.closest(wrap).addClass('firstSection')
        } else{
            firstSection.closest(wrap).removeClass('firstSection')
        }
    },

    initCountdown: function (dt, id, cb) {

        var end = new Date(dt);

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var elem = $('#' + (id));
            var now = new Date();
            var distance = end - now;

            if (distance < 0) {
                clearInterval(timer);
                if (cb && typeof cb == "function")
                    cb();

                return;
            }

            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);

            elem.html(days ? ((String(days).length >= 2 ? days : "0" + days) + ' <span class="small">Days </span> ') : '') ;
            elem.append((String(hours).length >= 2 ? hours : "0" + hours) + ' : ');
            elem.append(String(minutes).length >= 2 ? minutes : "0" + minutes);
        }

        showRemaining();
        timer = setInterval(showRemaining, 1000);
    },

    fixPositionFooter: function () {
        if ($('.fix_footer').length) {
            var footer = $('.footer'),
                hFooter = footer.innerHeight();
            if (!$('html').hasClass('mobile')) {
                $('body').css('paddingBottom', hFooter);
            }
        }
    }


};

$(document).ready(function() {
    Common.init();
});