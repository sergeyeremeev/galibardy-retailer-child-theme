jQuery(document).ready(function($) {
    // Prevent click event on product page main image
    $('#sync1').find('img').closest('span').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
    });
});