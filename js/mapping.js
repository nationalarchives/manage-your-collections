
/* Hide and amend controls not needed
$('#matched-fields h3').html('<span>3</span> Matched fields <a href="#" id="undo-all" >Undo all</a>');
$('#match').remove();
$('#matched-fields h4').remove(); */


// Store the two radio lists
var $discovery_fields = $("#discovery-fields"),
    $custom_fields = $('#custom-fields'),
    $combined = $("#custom-fields, #discovery-fields");

// If either list is changed find out whether there are checked inputs
$("#match").on('click', function (e) {
    e.preventDefault();
    $checked_discovery_field = $discovery_fields.find(':checked');
    $checked_custom_field = $custom_fields.find(':checked');

    // If either list has checked inputs
    if($checked_custom_field.length && $checked_discovery_field.length) {

        // Store the checked fields and attributes
        var $selected = $checked_discovery_field;
        var $checked = $checked_custom_field;
        var $discovery_container = $checked_discovery_field.parent();
        var $custom_container = $checked_custom_field.parent();
        var $field_identifier = $selected.attr('id');

        // Create and append the list item for matched items
        var $match = '<li class="pulse">' + $selected.val() + ' = ' + $checked.val() + '<br><a href="#" class="undo" data-attr="' + $field_identifier + '-field">Undo</a></li>';
        $("#mapping ul").append($match);

        // Add identifiers for parent items for checked items
        $discovery_container.addClass($field_identifier + '-field');
        $custom_container.addClass($field_identifier + '-field');

        // Hide the parent containers and reset radio list / definition lists
        $discovery_container.animate({
            left: "+=50",
            height: "toggle"
        }, 200, function() {
            $(this).hide();
        });
        $custom_container.animate({
            left: "+=50",
            height: "toggle"
        }, 200, function() {
            $(this).hide();
        });;
        $('.definition').hide();
        $('.pulse').removeClass();
        $("input:radio").removeAttr("checked");

        // Individual undo links - when selected show the associated items and remove this item
        $(".undo").on('click', function (e) {
            e.preventDefault();
            var $binder = $(this).attr("data-attr");
            var $binderClass = '.' + $binder;
            var $custom_label = $custom_container.children('label');
            var $discovery_label = $discovery_container.children('label');
            $custom_label.addClass('pulse');
            $discovery_label.addClass('pulse');

            $($binderClass).show();
            $(this).parent().remove();
            $("input:radio").removeAttr("checked");
        });

        // Undo all link - empty the list and reset the radio button lists
        $("#undo-all").on('click', function (e) {
            e.preventDefault();
            $(".data-item").show();
            $("input:radio").removeAttr("checked");
            $("#mapping ul li").remove();
        });
    }
});

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("match-navigation");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky + 150) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}