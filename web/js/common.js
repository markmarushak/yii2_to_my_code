$(document).ready(function () {

    $('#toggle-search').on('click', function () {
        if ($('.nav_search').hasClass('slide-hidden')){
            $('.nav_search').removeClass('slide-hidden');
            $('.nav_search form').animate({'width': 200},1500);

        }else {
            $('.nav_search').addClass('slide-hidden');
            $('.nav_search form').animate({'width': 0},1500);
        }
    });

});