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
    var readOnly = 'isreadonly';
    if($('#' + readOnly).length == 0) {
        var optionBox = "<div class='option-box-primary'> <div class='breather clr'> <a id='delete' href='' class='discoveryPrimaryCallToActionLink left small'>Delete this collection</a> </div></div><div class='option-box-secondary'> <ul class='inline'> <li>To edit this collection</li><li><span>Step 1</span><a href='' class='discoveryPrimaryCallToActionLink' id='download'>Download template</a></li><li><span>Step 2</span><a href='' class='discoveryPrimaryCallToActionLink' id='upload'>Upload changes</a></li></ul></div>";
        $(optionBox).appendTo('#details');
    }
    else {
        var optionBox = "<div class='option-box-primary'> <div class='breather clr'> <a href='' class='discoveryPrimaryCallToActionLink left small disabled'>Delete this collection</a> </div></div><div class='option-box-secondary'> <ul class='inline'> <li>To edit this collection</li><li><span>Step 1</span><a href='' class='discoveryPrimaryCallToActionLink' id='download'>Download template</a></li><li><span>Step 2</span><a href='' class='discoveryPrimaryCallToActionLink disabled'>Upload changes</a></li></ul></div>";
        $(optionBox).appendTo('#details');
    }
    var readOnly = 'isreadonly';
    if($('#' + readOnly).length == 0) {
        // Append option box to step 3
        var optionBox = "<div class='option-box-primary'><div class='breather clr'><a href='' id='upload' class='discoveryPrimaryCallToActionLink'>Upload file</a></div><!-- end breather --></div><!-- end option-box -->";
        $(optionBox).appendTo('#step-3');
    }

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

        // Hide details
        $('.details').hide();

        // Add a show details link
        $('.deleted').append(' <a class="smaller" href="">(show details)</a>');

        // When the show details link is clicked, show the next details container and change text to hide details
        $('.smaller').on('click', function (e) {
            e.preventDefault();
            $(this).parent().next('.details').toggle();
            var show = $(this).text();
            if (show == '(show details)') {
                $(this).text('(hide details)');
            }
            else {
                $(this).text('(show details)');
            }

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
