$(document).ready(function () {


    $('select#post-searchcountry').bind('change', function (e) {
        var el = $(e.target);

        $('select#post-searchregion, select#post-searchcity').find('option').remove();
        $('select#post-searchregion').append("<option value='0'>Выберите Область</option>");
        $('select#post-searchcity').append("<option value='0'>Выберите Город</option>");


        overlayOn();
        // console.log(overlayOn());

        $.post('/region/get-regions-by-country', {'countryId':el.val()} ,function (data) {
            console.log(data);
            var regionSelect =  $('select#post-searchregion');
            $.each(data, function( region_id,name){
              regionSelect.append("<option value=" + region_id +" name=\""+ name + "\">" + name + "</option>");
            });
            overlayHide();
        },"json");

    });
    $('select#post-searchregion').bind('change', function (e) {
        var el = $(e.target);

        $('select#post-searchcity').find('option').remove().append("<option value='0'>Выберите Город</option>");

        console.log(el.val());
        overlayOn();
        $.post('/city/get-cities-by-region', {'regionId':el.val()} ,function (data) {
            console.log(data);
            var citySelect =  $('select#post-searchcity');
            $.each(data, function( city_id,name){
                citySelect.append("<option value=\"" + city_id + "\">" + name + "</option>");
            });
            overlayHide();
        },"json");
    });


    function overlayOn()
    {
        $('.inner-geowidget').addClass('preloader');
        setTimeout(function () {
            $('.inner-geowidget').removeClass('preloader');
        },10000)
    }
    function overlayHide() {
        $('.inner-geowidget').removeClass('preloader');

    }



});