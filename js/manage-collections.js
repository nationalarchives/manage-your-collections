/* -- TNA AUTHORED JS -- */

$(document).ready(function () {

    // Hide all expanded table rows
    $(".expanded").hide();

    // Click on a table and show it's associated expanded row
    $('tr').on('click', function (e) {
        var $receivedElement = $(e.currentTarget);
        var receivedElementID = '#' + $receivedElement.data('id');

        $(".expanded").hide();
        $(receivedElementID).show();
    });

    // Append option box to summary box
    var optionBox = "<div class='option-box'><div class='breather clr'><a id='delete' href='' class='discoveryPrimaryCallToActionLink left small'>Delete this collection</a><div class='left-to-right'> <ul class='inline'><li>To edit</li><li><span>Step 1: Download the collection file</span><a href='' class='discoveryPrimaryCallToActionLink' id='download'>Download</a></li><li><span>Step 2: Upload the amended file</span><a href='' class='discoveryPrimaryCallToActionLink' id='upload'>Upload</a></li></ul></div></div></div><!-- end option box -->";
    $(optionBox).appendTo('#details');

    // Append option box to step 1
    var optionBox = "<div class='option-box'><div class='breather clr'><a href='' id='download' class='discoveryPrimaryCallToActionLink'>Download file</a></div><!-- end breather --></div><!-- end option-box -->";
    $(optionBox).appendTo('#step-1');

    // Append option box to step 2
    var optionBox = "<div class='option-box'><div class='breather clr'><a href='' id='download' class='discoveryPrimaryCallToActionLink'>Upload file</a></div><!-- end breather --></div><!-- end option-box -->";
    $(optionBox).appendTo('#step-2');

    // Wrap the forms in overlays
    $(".form").wrap(function () {
        var currentID = $(this).attr('id');
        return "<div class='overlay' id='" + currentID + "'><div class='modal'></div></div>";
    });

    // Hide the overlay area
    $('.overlay').hide();

    // Show the relevant overlay
    $('.option-box .discoveryPrimaryCallToActionLink').on('click', function (e) {
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
});


/* -- NON-TNA AUTHORED JS --

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
