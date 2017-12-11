$(document).ready(function() {
    $('#selfrel').mouseenter(function() {
        $('#selfrel p').css('opacity', '1');
    });
    $('#selfrel').mouseleave(function() {
        $('#selfrel p').css('opacity', '0');
    });
    $('#wisdom').mouseenter(function() {
        $('#wisdom p').css('opacity', '1');
    });
    $('#wisdom').mouseleave(function() {
        $('#wisdom p').css('opacity', '0');
    });
    $('#health').mouseenter(function() {
        $('#health p').css('opacity', '1');
    });
    $('#health').mouseleave(function() {
        $('#health p').css('opacity', '0');
    });

    $("[data-js=open]").on("click", function() {
        popupOpenClose($(".popup"));
    });
    $("[data-js=open2]").on("click", function() {
        popupOpenClose($(".popup2"));
    });

    // donations buttons pop form
    $('.donation_btn').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $(this).text();
        $('.amount').text(amount);
    });
    $('.donation_btn_other').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $('.other_amount').val().replace(/\D/g, '');
        $('.amount').text(amount + '€');
    })


    $('#sub_20').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $(this).text();
        $('#hidden_input_val').val('20');
        $('.amount').text('20€');
    });
    $('#sub_55').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $(this).text();
        $('#hidden_input_val').val('55');
        $('.amount').text('55€');
    });

    $('#sub_100').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $(this).text();
        $('#hidden_input_val').val('100');
        $('.amount').text('100€');
    });

    $('#sub_200').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $(this).text();
        $('#hidden_input_val').val('200');
        $('.amount').text('200€');
    });

    $('.self_realization h3 a').click(function(e) {
        e.preventDefault();
    });
});


/* popup js */

function popupOpenClose(popup) {

    /* Add div inside popup for layout if one doesn't exist */
    if ($(".wrapper").length == 0) {
        $(popup).wrapInner("<div class='wrapper'></div>");
    }

    /* Open popup */
    $(popup).show();

    /* Close popup if user clicks on background */
    $(popup).click(function(e) {
        if (e.target == this) {
            if ($(popup).is(':visible')) {
                $(popup).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup).hide();
    });
};

// smooth scroll 
var $root = $('html, body');

$('a[href^="#"]').click(function() {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function() {
        window.location.hash = href;
    });

    return false;
});