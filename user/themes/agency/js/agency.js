/*!
 * Start Bootstrap - Agnecy Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        if ($anchor.attr('href') === '#header') {
            $('html, body').stop().animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
        }
        else {
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
        }
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function () {
    $('.navbar-toggle:visible').click();
});

$('div.modal').on('show.bs.modal', function () {
    var modal = this;
    var hash = modal.id;
    window.location.hash = hash;
    window.onhashchange = function () {
        if (!location.hash) {
            $(modal).modal('hide');
        }
    }
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(modal).modal('hide');
        }
    });
});

$(document).ready(function () {
    if (window.innerWidth < 990) {
        $('#header').addClass('bg-cover')
        $('#myVideo').addClass('hide')
    }
    $('a[href="#about"]').click(function () {
        $('a[href="#portfolioModal1"]').click()
    })
})

$('button[data-dismiss="modal"]').click(function () {
    setTimeout(function () {
        window.scrollTo(0, document.body.scrollHeight);
    }, 500)
})