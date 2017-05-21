var Tokensale;

Tokensale = {

    init: function () {
        var self = this;

        self.initEvents();
        self.fixPositionFooter();

        $(window).on({
            resize: function () {
                self.fixPositionFooter();
            },
        });

        window.addEventListener("resize", function() {
            self.fixPositionFooter();
        }, false);
    },

    initEvents: function () {

    },

    fixPositionFooter: function () {
        var footer = $('.footer'),
            hFooter = footer.innerHeight();
        if (!$('html').hasClass('mobile')) {
            $('body').css('paddingBottom', hFooter);
        }
    }

};

$(document).ready(function() {
    Tokensale.init();
});