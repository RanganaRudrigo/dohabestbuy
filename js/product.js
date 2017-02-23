/**
 * Created by Gowtham on 5/31/2016.
 */
var serialScrollNbImagesDisplayed;
var first_url_check = true;
var color_id = 0 ,
    quantityAvailable = 0 ,
    size_id = 0 ;

$(document).ready(function() {
    var url_found = checkUrl();
    //init the price in relation of the selected attributes
    if (!url_found)
        if (typeof productHasAttributes !== 'undefined' && productHasAttributes)
            findCombination();


    serialScrollSetNbImages();


    //init the serialScroll for thumbs
    if ($.prototype.serialScroll)
        $('#thumbs_list').serialScroll({
            items: 'li:visible',
            prev: '#view_scroll_left',
            next: '#view_scroll_right',
            axis: 'x',
            offset: 0,
            start: 0,
            stop: true,
            onBefore: serialScrollFixLock,
            duration: 700,
            lazy: true,
            lock: false,
            force: false,
            cycle: false
        });

    $('#thumbs_list').trigger('goto', 0);

    //set jqZoom parameters if needed
    if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled) {
        if ($('#thumbs_list .shown img').length) {
            var new_src = $('#thumbs_list .shown img').attr('src').replace('cart_', 'large_');
            if ($('.jqzoom img').attr('src') != new_src)
                $('.jqzoom img').attr('src', new_src).parent().attr('href', new_src);
        }

        $('.jqzoom').jqzoom({
            zoomType: 'innerzoom', //innerzoom/standard/reverse/drag
            zoomWidth: 458, //zooming div default width(default width value is 200)
            zoomHeight: 458, //zooming div default width(default height value is 200)
            xOffset: 21, //zooming div default offset(default offset value is 10)
            yOffset: 0,
            title: false
        });

    }
    if (typeof(contentOnly) !== 'undefined') {
        if (!contentOnly && !!$.prototype.fancybox) {
            $('li:visible .fancybox, .fancybox.shown').fancybox({
                'hideOnContentClick': true,
                'openEffect': 'elastic',
                'closeEffect': 'elastic'
            });
        }
        else if (contentOnly) {
            $('#buy_block').attr('target', '_top');
        }
    }

    if ($('#bxslider li').length && !!$.prototype.bxSlider)
        $('#bxslider').bxSlider({
            minSlides: 1,
            maxSlides: 6,
            slideWidth: 178,
            slideMargin: 20,
            pager: false,
            nextText: '',
            prevText: '',
            moveSlides: 1,
            infiniteLoop: false,
            hideControlOnEnd: true
        });
});

//hover 'other views' images management
$(document).on('mouseover', '#views_block li a', function(){
    displayImage($(this));
});

//hover 'other views' images management
$(document).on('change', '#color_picker ', function(){
    window.location.replace(original_url + "#/color-" +$.trim($("#color_picker option:selected").text()) +
    "_" + $(this).val() );
    color_id = $(this).val();
    if($("#size_picker").length)
        getSizeByColorId();
    else 
        displayPrice();
});
//hover 'other views' images management
$(document).on('change', '#size_picker ', function(){
    window.location.replace(original_url + "#/color-" +$.trim($("#color_picker option:selected").text() )+
    "_" + $("#color_picker").val() +
    "/size-" +$.trim($("#size_picker option:selected").text()) +
        "_" + $(this).val()
    ); 
    size_id = $(this).val();
    displayPrice();
});


// The button to increment the product value
$(document).on('click', '.product_quantity_up', function(e){
    e.preventDefault();
    fieldName = $(this).data('field-qty');
    var currentVal = parseInt($('input[name='+fieldName+']').val());
    if (!allowBuyWhenOutOfStock && quantityAvailable > 0)
        quantityAvailableT = quantityAvailable;
    else
        quantityAvailableT = 100000000;
    if (!isNaN(currentVal) && currentVal < quantityAvailableT)
        $('input[name='+fieldName+']').val(currentVal + 1).trigger('keyup');
    else
        $('input[name='+fieldName+']').val(quantityAvailableT);

    $('#quantity_wanted').change();
});
// The button to decrement the product value
$(document).on('click', '.product_quantity_down', function(e){
    e.preventDefault();
    fieldName = $(this).data('field-qty');
    var currentVal = parseInt($('input[name='+fieldName+']').val());
    if (!isNaN(currentVal) && currentVal > 1)
        $('input[name='+fieldName+']').val(currentVal - 1).trigger('keyup');
    else
        $('input[name='+fieldName+']').val(1);

    $('#quantity_wanted').change();
});

function getSizeByColorId() {
    if( typeof options  != undefined &&   $("#size_picker").length >0 ){
        var all = options['all'],size_html ="",flag=true;
         for(var i in all){
             if(all[i]['color_id'] == color_id ){
                if(flag  ){
                    flag = false;
                        window.location.replace(original_url + "#/color-" +$.trim($("#color_picker option:selected").text() )+
                            "_" + $("#color_picker").val() +
                            "/size-" + all[i]['size'] +
                            "_" + all[i]['size_id'] );
                    size_html += "<option value='"+ all[i]['size_id']+"' selected > " + all[i]['size'] + " </option>";
                }else
                    size_html += "<option value='"+ all[i]['size_id']+"' > " + all[i]['size'] + " </option>";
             }
         }
        $("#size_picker").html(size_html);
    }else{
        window.location.replace(original_url + "#/color-" +$.trim($("#color_picker option:selected").text() )+
            "_" + $("#color_picker").val() );
    }
}


//update display of the large image
function displayImage(domAAroundImgThumb, no_animation)
{
    if (typeof(no_animation) == 'undefined')
        no_animation = false;
    if (domAAroundImgThumb.attr('href'))
    {
        var new_src = domAAroundImgThumb.attr('href').replace('thickbox', 'large');
        var new_title = domAAroundImgThumb.attr('title');
        var new_href = domAAroundImgThumb.attr('href');
        if ($('#bigpic').attr('src') != new_src)
        {
            $('#bigpic').attr({
                'src' : new_src,
                'alt' : new_title,
                'title' : new_title
            }).load(function(){
                if (typeof(jqZoomEnabled) !== 'undefined' && jqZoomEnabled)
                    $(this).attr('rel', new_href);
            });
        }
        $('#views_block li a').removeClass('shown');
        $(domAAroundImgThumb).addClass('shown');
    }
}


function findCombination() {

}


function serialScrollSetNbImages()
{
    $('#thumbs_list_frame').css("width", ($('#thumbs_list_frame li').width() * $('#thumbs_list_frame li').length ) + 250 );

    serialScrollNbImagesDisplayed = 4;
    if ($('#thumbs_list').outerWidth(true) < 194)
        serialScrollNbImagesDisplayed = 1;
    else if ($('#thumbs_list').outerWidth(true) < 294)
        serialScrollNbImagesDisplayed = 2;
    else if ($('#thumbs_list').outerWidth(true) < 392)
        serialScrollNbImagesDisplayed = 3;
}

function serialScrollFixLock(event, targeted, scrolled, items, position)
{
    var serialScrollNbImages = $('#thumbs_list li:visible').length;
    var leftArrow = position == 0 ? true : false;
    var rightArrow = position + serialScrollNbImagesDisplayed >= serialScrollNbImages ? true : false;

    $('#view_scroll_left').css('cursor', leftArrow ? 'default' : 'pointer').css('display', leftArrow ? 'none' : 'block').fadeTo(0, leftArrow ? 0 : 1);
    $('#view_scroll_right').css('cursor', rightArrow ? 'default' : 'pointer').fadeTo(0, rightArrow ? 0 : 1).css('display', rightArrow ? 'none' : 'block');
    return true;
}


function checkUrl()
{
    if (original_url != window.location  )
    {
        first_url_check = false;
        var url = window.location + '';
        // if we need to load a specific combination
        if (url.indexOf('#/') != -1)
        {
            // get the params to fill from a "normal" url
            params = url.substring(url.indexOf('#') + 1, url.length);
            tabParams = params.split('/');
            tabValues = [];
            if (tabParams[0] == '')
                tabParams.shift();

            var len = tabParams.length;
            for (var i=0; i<len; i++)
            {
                tabParams[i] = tabParams[i].replace(attribute_anchor_separator, '-');
                tabValues.push(tabParams[i].split('-'));
            }
            if( len > 0 ) {
                var color = tabValues[0][1].split('_') ;
                color_id = color[1];
                $("#color_picker").val(color_id);
                getSizeByColorId();
                if(len > 1 ){
                    var size = tabValues[1][1].split('_') ;
                    size_id = size[1];
                    $("#size_picker").val(size_id);
                }
                displayPrice();
            }
        }else{displayPrice();}
    }else{
        if($("#color_picker").length ){
            color_id = $("#color_picker option:first").val();
            getSizeByColorId();
            if($("#size_picker").length)
                size_id = $("#size_picker option:first").val();

        }else{
            color_id =$("input[name='color']").val();
            if($("#size_picker").length)
                size_id =$("input[name='size']").val()
        }
        displayPrice();
    }
    return false;
}

function displayPrice() {
    var all = options['all'];
    for(var i in all){
        if(all[i]['color_id'] == color_id   ){ //&& all[i]['size_id'] == size_id
            $("#idCombination").val(all[i]['product_option_id']);
            $("#our_price_display").html(
                (  Math.round( (100 - product.discount) /100 * all[i]['price'] ) ).toFixed(2) +( " QAR")
            );
            if(product.discount){
                $("#reduction_percent_display").html( ( Math.round(product.discount) ) + " %");
                $("#old_price_display.price").html(product.price);
            }
            quantityAvailable =  parseInt(all[i]['qty']) ;
            if(quantityAvailable == 0 ){
                $("#availability_statut span").html('Out of stock').addClass("label-danger");
            }else if(quantityAvailable == 1 ){
                $("#availability_statut span").html('Warning: Last items in stock!').addClass("label-warning");
            }else if(quantityAvailable > 0 ){
                $("#availability_statut span").html('In stock').addClass("label-success");
            }

            break;
        }
    }


}



$(window).resize(function(){
    serialScrollSetNbImages();
    $('#thumbs_list').trigger('goto', 0);
    serialScrollFixLock('', '', '', '', 0);
});

//add a link on the span 'view full size' and on the big image
$(document).on('click', '#view_full_size, #image-block', function(e){
    $('#views_block .shown').click();
});