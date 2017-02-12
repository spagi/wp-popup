jQuery(document).ready(function (e) {
    if (jQuery.cookie('prepare') != 'seen') {
        jQuery.cookie('prepare', 'seen', {expires: 1, path: '/'}); // Set it to last a year, for example.
        setTimeout(function () {
            jQuery('#myModal').modal('show');
        }, 1000);
        jQuery('#closemodal').click(function () // You are clicking the close button
        {
            jQuery('#myModal').modal('hide'); // Now the pop up is hiden.
        });
        jQuery('#myModal').click(function (e)
        {
            jQuery('#myModal').fadeOut();
        });
    }
    ;
});