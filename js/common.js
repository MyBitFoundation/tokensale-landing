'use strict';

var Common;

Common = {

    sectionArray: [],
    mainLinkArray: [],

    init: function () {
        var self = this;

        self.initEvents();
        self.checkFirstSection();
        self.initScrollTextarea();

        $(window).on({
            load: function () {
                Common.slickInit();
            },
            resize: function () {
                $('.team__list').slick('resize');
            },
            scroll: function () {
                Common.onScroll();
                Common.checkFirstSection();
            }
        });
    },

    initEvents: function () {

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

        //team
        $('.team__btnMore_js').on('click',function (e){
            e.preventDefault();
            $(this).closest('.team__item').addClass('active');
        });
        $('.team__item').on('click',function (){
               if ($(window).width() < 768) {
                   if ($(event.target).closest(".team__detailsClose").length) return;
                   $(this).addClass('active');
               }
        });
        $('.team__detailsClose_js').on('click',function (e){
            e.preventDefault();
            $(this).closest('.team__item').removeClass('active');
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

        $('.btn_scroll').click(function(event) {
            var id = $(this).attr("href");
            var target = parseInt($(id).offset().top);
            if ($(window).scrollTop() != target) {
                $('html, body').animate({
                    scrollTop: target
                }, 500);
            }
            event.preventDefault();
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

    onScroll: function() {
        var scrollPosition = $(document).scrollTop();
        var windowHeight = $(window).height();
        $('.mainNav__link.btn_scroll').each(function () {
            var currentLink = $(this);
            var refElement = $(currentLink.attr("href"));
            if (refElement.position().top <= scrollPosition + 300  && (refElement.offset().top) + refElement.outerHeight(true)  > scrollPosition) {
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

    slickInit: function () {
        $('.team__list').slick({
            responsive: [
                {
                    breakpoint: 99999,
                    settings: "unslick"
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        dots: true,
                        centerPadding: '40px',
                        slidesToShow: 1,
                        adaptiveHeight: true

                    }
                }
            ]
        });
    },

    initScrollTextarea: function () {
        $('#textarea-scrollbar_js').scrollbar();
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
    }

};

$(document).ready(function() {
    Common.init();
});