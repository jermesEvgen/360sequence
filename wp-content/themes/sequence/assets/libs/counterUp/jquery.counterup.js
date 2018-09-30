/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/
(function( jQuery ){
  "use strict";

  jQuery.fn.counterUp = function( options ) {

    // Defaults
    var settings = jQuery.extend({
        'time': 400,
        'delay': 10
    }, options);

    return this.each(function(){

        // Store the object
        var jQuerythis = jQuery(this);
        var jQuerysettings = settings;

        var counterUpper = function() {
            var nums = [];
            var divisions = jQuerysettings.time / jQuerysettings.delay;
            var num = jQuerythis.text();
            var isComma = /[0-9]+,[0-9]+/.test(num);
            num = num.replace(/,/g, '');
            var isInt = /^[0-9]+jQuery/.test(num);
            var isFloat = /^[0-9]+\.[0-9]+jQuery/.test(num);
            var decimalPlaces = isFloat ? (num.split('.')[1] || []).length : 0;

            // Generate list of incremental numbers to display
            for (var i = divisions; i >= 1; i--) {

                // Preserve as int if input was int
                var newNum = parseInt(num / divisions * i);

                // Preserve float if input was float
                if (isFloat) {
                    newNum = parseFloat(num / divisions * i).toFixed(decimalPlaces);
                }

                // Preserve commas if input had commas
                if (isComma) {
                    while (/(\d+)(\d{3})/.test(newNum.toString())) {
                        newNum = newNum.toString().replace(/(\d+)(\d{3})/, 'jQuery1'+','+'jQuery2');
                    }
                }

                nums.unshift(newNum);
            }

            jQuerythis.data('counterup-nums', nums);
            jQuerythis.text('0');

            // Updates the number until we're done
            var f = function() {
                jQuerythis.text(jQuerythis.data('counterup-nums').shift());
                if (jQuerythis.data('counterup-nums').length) {
                    setTimeout(jQuerythis.data('counterup-func'), jQuerysettings.delay);
                } else {
                    delete jQuerythis.data('counterup-nums');
                    jQuerythis.data('counterup-nums', null);
                    jQuerythis.data('counterup-func', null);
                }
            };
            jQuerythis.data('counterup-func', f);

            // Start the count up
            setTimeout(jQuerythis.data('counterup-func'), jQuerysettings.delay);
        };

        // Perform counts when the element gets into view
        jQuery(this).waypoint(counterUpper, { offset: '100%', triggerOnce: true });
    });

  };

})( jQuery );