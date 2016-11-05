jQuery(function ($) {
$('#gtcc-slick').slicknav({
    label: 'GTCC Menu',
    duration: 500,
    prependTo:'#gtcc-menu',
    init: function( autoopen ){}
});

$(function( autoopen ) {
    jQuery('#gtcc-slick').slicknav('close');
});
});