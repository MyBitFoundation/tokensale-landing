var Index;

Index = {

    init: function () {
        var self = this;

        self.initEvents();

        $(window).on({
            resize: function () {

            },
        });
    },

    initEvents: function () {

    },

};

$(document).ready(function() {
    Index.init();
});