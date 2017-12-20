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
        $('#payment-form2').css('display', 'block');
        var amount = $(this).text();
        $('.don_amount').text(amount);
        $('#donation_sum').val(amount.slice(0, -1));
    });
    $('.donation_btn_other').click(function() {
        $('#payment-form2').css('display', 'block');
        var amount = $('.other_amount').val();
        $('.don_amount').text(amount + '€');
        $('#donation_sum').val(amount);
    })
    $('.self_realization h3 a').click(function(e) {
        e.preventDefault();
    });
    $('#show_password').click(function() {
        $('#new_password').attr('type', 'text');
    });
    $('#hide_password').click(function() {
        $('#new_password').attr('type', 'password');
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