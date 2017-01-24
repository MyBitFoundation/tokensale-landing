'use strict';

var Common;

Common = {

    init: function () {
        var self = this;


        $('.input, .textarea').focusout(function(){
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


        self.initEvents();
        $(window).on({
            load: function () {
            },
            resize: function () {
                clearTimeout(self.resizeTimeout);
                self.resizeTimeout = setTimeout(function () {
                }, 100);
            },
            scroll: function () {
            }
        });
    },

    initEvents: function () {
        $('.tabs-nav__link').on('click',Common.toggleTabs);
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

};

$(document).ready(function() {
    Common.init();
});