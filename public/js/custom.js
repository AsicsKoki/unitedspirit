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
        $('#payment-form').css('display', 'block');
        var amount = $(this).text();
        $('.amount').text(amount);
    });
    $('.donation_btn_other').click(function() {
        $('.require-validation').css('display', 'block');
        var amount = $('.other_amount').val().replace(/\D/g, '');
        $('.amount').text(amount + '€');
    })


    $('#sub_20').click(function() {
        $('#payment-form').css('display', 'block');
        $('.sub_amount').text('20€');
        $('#plan').text('monthly');
        $('#planName').val('monthly');
    });
    $('#sub_55').click(function() {
        $('#payment-form').css('display', 'block');
        $('.sub_amount').text('55€');
        $('#plan').text('13 weeks');
        $('#planName').val('13 weeks');
    });

    $('#sub_100').click(function() {
        $('#payment-form').css('display', 'block');
        $('.sub_amount').text('100€');
        $('#plan').text('26 weeks');
        $('#planName').val('26 weeks');
    });

    $('#sub_200').click(function() {
        $('#payment-form').css('display', 'block');
        $('.sub_amount').text('200€');
        $('#plan').text('52 weeks');
        $('#planName').val('52 weeks');
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
$('a[href^="#"]').click(function() {
    var target = $(this.hash);
    if (target.length == 0) target = $('a[href="' + this.hash.substr(1) + '"]');
    if (target.length == 0) target = $('html');
    $('html, body').animate({ scrollTop: target.offset().top - 70 }, 700);
    return false;
});