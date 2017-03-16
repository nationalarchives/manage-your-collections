/* -- TNA AUTHORED JS -- */

$(document).ready(function () {

    // Append option box to summary box
    var optionBox = "<div class='option-box-primary'> <div class='breather clr'> <a id='delete' href='' class='discoveryPrimaryCallToActionLink left small'>Delete this collection</a> </div></div><div class='option-box-secondary'> <ul class='inline'> <li>To edit this collection</li><li><span>Step 1</span><a href='' class='discoveryPrimaryCallToActionLink' id='download'>Get your collection</a></li><li><span>Step 2</span><a href='' class='discoveryPrimaryCallToActionLink' id='upload'>Upload changes</a></li></ul></div>";
    $(optionBox).appendTo('#details');

    // Append option box to step 1
    var optionBox = "<div class='option-box-primary'><div class='breather clr'><a href='' id='download' class='discoveryPrimaryCallToActionLink'>Get your collection</a></div><!-- end breather --></div><!-- end option-box -->";
    $(optionBox).appendTo('#step-1');

    // Append option box to step 2
    var optionBox = "<div class='option-box-primary'><div class='breather clr'><a href='' id='upload' class='discoveryPrimaryCallToActionLink'>Upload file</a></div><!-- end breather --></div><!-- end option-box -->";
    $(optionBox).appendTo('#step-2');

    // Wrap the forms in overlays
    $(".form").wrap(function () {
        var currentID = $(this).attr('id');
        return "<div class='overlay' id='" + currentID + "'><div class='modal'></div></div>";
    });

    // Hide the overlay area
    $('.overlay').hide();

    // Show the relevant overlay
    $('.option-box-primary .discoveryPrimaryCallToActionLink, .option-box-secondary .discoveryPrimaryCallToActionLink').on('click', function (e) {
        var IDcheck = $(this).attr('id');
        if (IDcheck != undefined) {
            e.preventDefault();
            var formID = '#' + IDcheck + '-form';
            $(formID).show();
        }
    });

    // Hide the overlay when cancel is clicked
    $('.cancel').on('click', function (e) {
        e.preventDefault();
        $('.overlay').hide();
    });

    $('.containing-panel li a').on('click', function (e) {
        if (jQuery(this).parent().has('ul')) {
            e.preventDefault();
        }
        $(this).next('ul').toggle();
    });

});


/* -- NON-TNA AUTHORED JS --

Used to apply custom styles to input[type=file]

CUSTOM INPUT[TYPE=FILE]
By Osvaldas Valutis, www.osvaldas.info
Available for use under the MIT License
*/

'use strict';

;( function (document, window, index) {
    var inputs = document.querySelectorAll('.inputfile');
    Array.prototype.forEach.call(inputs, function (input) {
        var label = input.nextElementSibling,
            labelVal = label.innerHTML;

        input.addEventListener('change', function (e) {
            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = ( this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
            else
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                label.querySelector('span').innerHTML = fileName;
            else
                label.innerHTML = labelVal;
        });

        // Firefox bug fix
        input.addEventListener('focus', function () {
            input.classList.add('has-focus');
        });
        input.addEventListener('blur', function () {
            input.classList.remove('has-focus');
        });
    });
}(document, window, 0));
