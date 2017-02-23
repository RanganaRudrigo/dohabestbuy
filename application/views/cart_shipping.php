<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
<head>
    <?php $this->load->view('inc/head'); ?>
    <script type="text/javascript">
        var CUSTOMIZE_TEXTFIELD = 1;
        var FancyboxI18nClose = 'Close';
        var FancyboxI18nNext = 'Next';
        var FancyboxI18nPrev = 'Previous';
        var added_to_wishlist = 'The product was successfully added to your wishlist.';
        var ajax_allowed = true;
        var ajaxsearch = true;
        var baseDir = '<?= base_url() ?>';
        var baseUri = '<?= base_url() ?>';
        var blocksearch_type = 'top';
        var blockwishlist_add = 'The product was successfully added to your wishlist';
        var blockwishlist_remove = 'The product was successfully removed from your wishlist';
        var blockwishlist_viewwishlist = 'View your wishlist';
        var comparator_max_item = 3;
        var comparedProductsIds = [];
        var contentOnly = false;
        var currency = {"id":1,"name":"Dollar","iso_code":"USD","iso_code_num":"840","sign":"$","blank":"0","conversion_rate":"1.000000","deleted":"0","format":"1","decimals":"1","active":"1","prefix":"$ ","suffix":"","id_shop_list":null,"force_id":false};
        var currencyBlank = 0;
        var currencyFormat = 1;
        var currencyRate = 1;
        var currencySign = '$';
        var customizationIdMessage = 'Customization #';
        var delete_txt = 'Delete';
        var displayList = false;
        var freeProductTranslation = 'Free!';
        var freeShippingTranslation = 'Free shipping!';
        var generated_date = 1459225386;
        var hasDeliveryAddress = false;
        var highDPI = false;
        var homeslider_loop = 1;
        var homeslider_pause = 3000;
        var homeslider_speed = 500;
        var homeslider_width = 779;
        var id_lang = 1;
        var img_dir = '';
        var instantsearch = false;
        var isGuest = 0;
        var isLogged = 0;
        var isMobile = false;
        var loggin_required = 'You must be logged in to manage your wishlist.';
        var max_item = 'You cannot add more than 3 product(s) to the product comparison';
        var min_item = 'Please select at least one product';
        var mywishlist_url = '';
        var page_name = 'index';
        var placeholder_blocknewsletter = 'Enter your e-mail';
        var priceDisplayMethod = 1;
        var priceDisplayPrecision = 2;
        var quickView = true;
        var removingLinkText = 'remove this product from my cart';
        var roundMode = 2;
        var search_url = '';
        var static_token = '9dd6a1e80ac1c982bcb37309d9ae779d';
        var toBeDetermined = 'To be determined';
        var token = '1354b54ecf644944597f0fde0365978a';
        var usingSecureMode = false;
        var wishlistProductsIds = false;
    </script>

    <?php $this->load->view('inc/head_js'); ?>
    <link href='<?=base_url()?>css/prettyPhoto.css' rel='stylesheet' type='text/css'>

    <script src="<?=base_url()?>js/validate.js" type="text/javascript" ></script>
    <script src="<?=base_url()?>js/authentication.js" type="text/javascript" ></script>
    <script src="<?=base_url()?>js/jquery.prettyPhoto.js" type="text/javascript" ></script>
    <script>
        $(function(){
            $("#shipping_address").click(function(){
               if($(this).prop("checked")){
                    $("#shipping").val($('<div/>').html("<?= html_escape($cus->address1 ) ?>").text() );
                   $("#ZoneId").val("<?= $cus->ZoneId  ?>").trigger("change");
                    //$("#city").val($('<div/>').html("<?= html_escape($cus->city ) ?>").text() );
                    //$("#postcode").val($('<div/>').html("<?= html_escape($cus->postcode ) ?>").text() );
                    $("#phone").val($('<div/>').html("<?= html_escape($cus->phone ) ?>").text() );
                  // $("#id_state").val("<?= $cus->state  ?>");
               }else{
                   $("#shipping").val("");
                   $("#ZoneId").val("0");
                   $("#CityId").html("<option value='' >--------------</option>");
                  // $("#city").val("");
                  // $("#postcode").val("");
                   $("#phone").val("");
                  // $("#id_state").val("");
               }
            });
        });
    </script>
</head>
<body id="authentication" class="authentication hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view('inc/header'); ?>
    <div id="breadcrumb" class="clearfix">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="" title="Return to Home"><i class="fa fa-home"></i></a>
                <span class="navigation-pipe">&gt;</span> Authentication </div>
            <!-- /Breadcrumb -->

        </div>
    </div>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <?php
            $notification = $this->session->flashdata('notification');
            $error = $notification['error'];
            $valid = $notification['success'];
            if (isset($valid)) $error = $valid;
            if (isset($error)) {
                ?>
                <div
                    class="alert <?= isset($valid) ? 'alert-success' : 'alert-danger' ?> alert-dismissable fade in ">
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button>
                    <?= $error ?>
                </div>
                <?php
            }
            ?>
            <!-- Steps -->
            <ul class="step clearfix" id="order_step">
                <li class="col-md-2-4 col-xs-12   first">
                    <span><em>01.</em> Summary</span>
                </li>
                <li class="col-md-2-4 col-xs-12 step_todo second">
                    <span><em>02.</em> Sign in</span>
                </li>
                <li class="col-md-2-4 col-xs-12 step_todo  third">
                    <span><em>03.</em> Address</span>
                </li>
                <li class="col-md-2-4 col-xs-12 step_current  four">
                    <span><em>04.</em> Shipping</span>
                </li>
                <li id="step_end" class="col-md-2-4 col-xs-12 step_todo last">
                    <span><em>05.</em> Payment</span>
                </li>
            </ul>
            <!-- /Steps -->


            <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6"> <?php $this->load->view("inc/shipping") ?></div>
            <div class="col-xs-12 col-sm-6 col-lg-6">
            
            <ul class="gallery clearfix">
				<li>
                <a href="<?= base_url() ?>images/persona_information_1.jpg" rel="prettyPhoto">
                <img src="<?= base_url() ?>images/persona_information_1.jpg"/>
                </a>
                </li>
			</ul>
			
            
            
          
               
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('inc/footer'); ?>
</section>
<script>
    $(function () {
        $("#ZoneId").change(function () {
                var $this= $(this) , CityId = <?= (int)  $cus->CityId  ?> ;
                $.ajax({
                    url : baseUri +"api/getCityByZone/?ZoneId=2",
                    data : {ZoneId : $this.val()} ,
                    success : function (json) {
                        var option = "<option value='' >---------------</option>";
                        for (var i in json){
                            option += "<option value='"+ json[i].CityId +"' "+ (CityId == json[i].CityId ?"selected":"" ) +" >"+ json[i].City +"</option>";
                        }
                        $("#CityId").empty().html(option);
                    }
                });
            })
            <?php if($this->input->post('ZoneId')): ?>
            .trigger("change");
        <?php endif; ?>
    })
</script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
			});
			</script>

<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>

</body>
</html>