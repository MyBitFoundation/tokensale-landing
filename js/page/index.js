var Index;

Index = {

    init: function () {
        var self = this;

        self.initEvents();
        self.slickMobInit();
        self.slickLaptopInit();
        self.slickDesktopInit();
        self.initScrollTextarea();

        $(window).on({
            resize: function () {
                $('.slick_mob').slick('resize');
                $('.slick_desktop').slick('resize');
                clearTimeout(Common.resizeTimeout);
                Common.resizeTimeout = setTimeout(function () {
                    self.slickLaptopInit();
                }, 300);
            },
        });
    },

    initEvents: function () {

    },

    slickDesktopInit: function () {
        $('.slick_desktop').slick({
            arrows: false,
            dots: true,
            centerPadding: '40px',
            slidesToShow: 4,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        adaptiveHeight: true,
                        slidesToScroll: 1,

                    }
                }
            ]
        });
    },

    slickLaptopInit: function () {
        $('.team__block ').html($('.team__template').html());
        $(".team__block .slick_laptop").slick({
            responsive: [
                {
                    breakpoint: 99999,
                    settings: "unslick"
                },
                {
                    breakpoint: 1200,
                    settings: {
                        dots: true,
                        arrows: false,
                        slidesPerRow: 3,
                        rows: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        dots: true,
                        arrows: false,
                        slidesPerRow: 2,
                        rows: 2
                    }
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

    slickMobInit: function () {
        $('.slick_mob').slick({
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
    }

};

$(document).ready(function() {
    Index.init();
});