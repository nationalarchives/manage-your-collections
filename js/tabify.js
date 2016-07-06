// 1.13 Tabify - jQuery plugin designed for use with an ARIA labelled tab section. 
//      Requriements for use: 
//          - The tabs must be list items within a ul that has a role attribute of 'tablist'.
//          - Only one tab/tabpanel on the page (the plugin can be extended later, if needed). 
//          - Each tab should have an id (required by ARIA)
//          - Each tab panel to have:
//              a) an 'aria-labelledby' attribute (corresponding to to tab id)
//              b) a role of tab panel
//       Usage: 
//          $("ul[role='tablist'] li").tabify();
//      Extensions: 
//          - The plugin allows for custom events to be triggered. The triggered event is equivalent to the id of the element clicked. 

$.fn.tabify = function (options) {
    var settings = $.extend({}, $.fn.tabify.defaults, options);

    $('[role="tabpanel"]:not(:first)').hide(); // Hiding all but the first tabpanel
    this.eq(0).addClass(settings.classForSelectedTab); // Adding the 'current' class to the first tab

    return this.each(function () {
        var $this = $(this),
            id = $this.attr('id');

        $this.on('click', function (e) {
            var $tabs = $('[role="tablist"] li'), $tabpanels = $('[role="tabpanel"]'), $target = $('[aria-labelledby="' + id + '"]');

            e.preventDefault();

            $tabs.removeClass(settings.classForSelectedTab).attr('aria-selected', false);
            $this.addClass(settings.classForSelectedTab).attr('aria-selected', true);

            $tabpanels.hide().attr('aria-hidden', true);
            $target.show().attr('aria-hidden', false);
        });

    });
};

$.fn.tabify.defaults = {
    'classForSelectedTab': 'selected'
};