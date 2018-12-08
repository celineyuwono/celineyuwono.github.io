$(document).ready(function() {
    if(window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top - 20
        }, 500);
    }
});