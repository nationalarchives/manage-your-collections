/* -- TNA AUTHORED JS -- */




$(document).ready(function () {

    $('#global-container').hide();
    var changeArchive = "<li id='change-archive'><a href='#'>Change archive</a></li>";
    $(changeArchive).prependTo('#account-controls ul');

    // Append option box to summary box
    var optionBox = "<div class='option-box-primary'> <div class='breather clr'> <a id='delete' href='' class='discoveryPrimaryCallToActionLink left small'>Delete this collection</a> </div></div><div class='option-box-secondary'> <ul class='horizontal'> <li>To edit this collection</li><li><span>Step 1</span><a href='' class='discoveryPrimaryCallToActionLink' id='download'>Get your collection</a></li><li><span>Step 2</span><a href='' class='discoveryPrimaryCallToActionLink' id='upload'>Upload changes</a></li></ul></div>";
    $(optionBox).appendTo('#details');

    // Append option box to step 1
    var optionBox = "<div class='option-box-primary'><div class='breather clr'><a href='' id='download' class='discoveryPrimaryCallToActionLink'>Get the template</a></div><!-- end breather --></div><!-- end option-box -->";
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

    /* $('.containing-panel ul li').each(function(){
        if ($(this).parent().has('ul')) {
            $(this).wrapInner("<a href=\"#\"></a>");
        }
    }); */

    $( ".containing-panel ul" ).parent().addClass('plus');

    $('li').on('click', function(e) {
        $(this).toggleClass('expanded');
        e.stopPropagation();
    });

/*  ----
INTRODUCTION MESSAGE ON FIRST VISIT (only for world view page)
 ----- */

if ($("H1:contains('Manage your collections - new')").length) {

    // When remove notice is clicked, set a cookie and hide the background and intro map
    $(document).on('click', '#removeNotice', function (e) {
        e.preventDefault();
        document.cookie = "dontShowIntro=true; max-age=" + (60 * 60 * 24 * 7 * 4) + ";path=/";
        $('.background, .intro').remove();
    });

    // Check to see if the cookie has been set. If not, append intro message to the container and fade it in

    var introContent = $("#intro-content").html();
    console.log(introContent);

    if (document.cookie.indexOf("dontShowIntro") === -1) {
        $('body').append('<div class="background"><div class="intro"><p><a href="#" id="removeNotice" class="button intro-button">Get started</a></p><h2>First time user?</h2>' + introContent + '</div></div>');

        setTimeout(function () {
            $('.background, .intro').fadeIn("slow");
        }, 1000);
    }
}
/*  ----
 END INTRODUCTION MESSAGE ON FIRST VISIT
 ----- */

    // SHOW CHANGE ARCHIVE AREA
    // When the toggler is clicked...
    $("#change-archive").on('click', function (e) {
        // Show the search area
        e.preventDefault();
        $("#global-container").slideToggle();
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
