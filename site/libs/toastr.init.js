!function($) {
    'use strict';
	    var NotificationApp = function() {
    };
    NotificationApp.prototype.send = function(heading, body, position, loaderBgColor, icon, hideAfter, stack, showHideTransition) {
        if (!hideAfter)
            hideAfter = 6000;
        if (!stack)
            stack = 1;
        var options = {
            heading: heading,
            text: body,
            position: position,
            loaderBg: loaderBgColor,
            icon: icon,
            hideAfter: hideAfter,
            stack: stack
        };
        if(showHideTransition)
            options.showHideTransition = showHideTransition;
	        $.toast().reset('all');
			$.toast(options);
		},
	$.NotificationApp = new NotificationApp, $.NotificationApp.Constructor = NotificationApp
}(window.jQuery);
