
jQuery(document).ready(function($){
    $( '.menu-btn' ).click(function(){
        $('.responsive-menu').toggle();
        $('.menu-btn span').toggleClass('color-btn');
    });

});