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
        var baseDir = '';
        var baseUri = '';
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

   
    <script src="<?=base_url()?>js/jquery.prettyPhoto.js" type="text/javascript" ></script>
    <style>
        .myaccount-link-list li {
            overflow: hidden;
            padding-bottom: 10px;
        }
        .myaccount-link-list li a {
            display: block;
            overflow: hidden;
            color: #555454;
            text-transform: uppercase;
            text-decoration: none;
            position: relative;
            border: 1px solid;
            border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
            background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0%,#f7f7f7),color-stop(100%,#ededed));
            background-image: -webkit-linear-gradient(#f7f7f7,#ededed);
            background-image: -moz-linear-gradient(#f7f7f7,#ededed);
            background-image: -o-linear-gradient(#f7f7f7,#ededed);
            background-image: linear-gradient(#f7f7f7,#ededed);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;
        }
        .myaccount-link-list li a i {
            font-size: 25px;
            color: #a130a8;
            position: absolute;
            left: 0;
            top: 0;
            width: 52px;
            height: 100%;
            padding: 10px 0 0 0;
            text-align: center;
            -moz-border-radius-topleft: 4px;
            -webkit-border-top-left-radius: 4px;
            border-top-left-radius: 4px;
            -moz-border-radius-bottomleft: 4px;
            -webkit-border-bottom-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .myaccount-link-list li a span {
            display: block;
            padding: 13px 15px 15px 17px;
            overflow: hidden;
            margin-left: 52px;
            -moz-border-radius-topright: 5px;
            -webkit-border-top-right-radius: 5px;
            border-top-right-radius: 5px;
            -moz-border-radius-bottomright: 5px;
            -webkit-border-bottom-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .last_item { padding:20px; background-color:#f0f0f0;}
        .address_update { margin-top:10px;}
    </style>
</head>
<body id="authentication" class="authentication hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view('inc/header'); ?>
    <div id="breadcrumb" class="clearfix">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix"> <a class="home" href="" title="Return to Home"><i class="fa fa-home"></i></a> <span class="navigation-pipe">&gt;</span> Authentication </div>
            <!-- /Breadcrumb -->

        </div>
    </div>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <div class="row">

                <!-- Center -->
                <section id="center_column" class="col-md-12">
<div class="col-xs-12 col-sm-6 col-lg-6">
<form action="" method="post" id="account-creation_form" class="std box form-horizontal">

                        <?php
                        $error = isset($error) ? $error : $this->session->flashdata('error');
                        $valid = $this->session->flashdata('valid');
                        if (isset($valid)) $error = $valid;
                        if( isset($error) ): ?>
                            <div
                                class="alert <?= isset($valid) ? 'alert-success' : 'alert-danger' ?> alert-dismissable fade in ">
                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                <?= $error ?>
                            </div>
                        <?php endif; ?>

                        <div class="account_creation">
                            <h3 class="page-subheading">Your personal information</h3>
                            <p class="required"><sup>*</sup>Required field</p>
                            <div class="clearfix form-group">
                                <label class="control-label col-lg-3">Title</label>
                                <div class="col-lg-9">
                                    <div class="radio-inline">
                                        <label for="id_gender1" class="top">
                                            <input type="radio" name="gender" id="id_gender1" value="Mr." <?= $customer->gender == "Mr." ?"checked" :"" ?>  >
                                            Mr.
                                        </label>
                                    </div>
                                    <div class="radio-inline">
                                        <label for="id_gender2" class="top">
                                            <input type="radio" name="gender" id="id_gender2" value="Mrs."  <?= $customer->gender == "Mrs." ?"checked" :"" ?>   >
                                            Mrs.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="customer_firstname">First name <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <input onkeyup="$('#firstname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_firstname" name="firstname" value="<?= $customer->firstname?>">
                                </div>
                            </div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="customer_lastname">Last name <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <input onkeyup="$('#lastname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_lastname" name="lastname" value="<?= $customer->lastname?>">
                                </div>
                            </div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="email">Email <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <input type="email" class="is_required validate form-control" data-validate="isEmail" id="email" name="email" value="<?= $customer->email?>">
                                </div>
                            </div>
                            <div class="required password form-group">
                                <label class="control-label col-lg-3" for="passwd">Password <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <input type="password" class="is_required validate form-control" data-validate="isPasswd" name="password" id="passwd">
                                    <span class="form_info">(Five characters minimum)</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3" for="company">Company</label>
                                <div class="col-lg-9">
                                    <input class="form-control validate" data-validate="isGenericName" type="text" id="company" name="company" value="<?= $customer->company ?>">
                                </div>
                            </div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="address1">Address <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <input class="is_required validate form-control" data-validate="isAddress" type="text" id="address1" name="address1" value="<?= $customer->address1 ?>">
                                </div>
                            </div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="address2">Address (Line 2)</label>
                                <div class="col-lg-9">
                                    <input class="validate form-control" data-validate="isAddress" type="text" id="address2" name="address2" value="<?= $customer->address2 ?>">
                                </div>
                            </div>

                            <div class="required id_state form-group" style="">
                                <label class="control-label col-lg-3" for="id_state">Municipality/Zone <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <select name="ZoneId" id="ZoneId" class="form-control">
                                        <option value="0" > --------------- </option>
                                        <?php foreach($state as $s ): ?>
                                            <option value="<?= $s->ZoneId ?>" <?= $customer->ZoneId == $s->ZoneId ? "selected" :"" ?>  > <?= $s->Zone ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="required id_state form-group" style="">
                                <label class="control-label col-lg-3" for="id_state"> City <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <select name="CityId" id="CityId" class="form-control">
                                          <option value="0" > --------------- </option>
                                    </select>
                                </div>
                            </div>

                           <!-- <div class="required form-group">
                                <label class="control-label col-sm-4" for="city">City <sup>*</sup></label>
                                <div class="col-sm-6">
                                    <input class="is_required validate form-control" data-validate="isCityName" type="text" name="city" id="city" value="<?= $customer->city ?>" maxlength="64">
                                </div>
                            </div>

                            <div class="required id_state form-group" style="">
                                <label class="control-label col-sm-4" for="id_state">State <sup>*</sup></label>
                                <div class="col-sm-6">
                                    <select name="state" id="id_state" class="form-control">
                                        <?php foreach($state as $s ): ?>
                                            <option id="<?= $s->name ?>" <?= $customer->state == $s->name ? "selected" :"" ?>  > <?= $s->name ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="required postcode form-group unvisible" style="display: block;">
                                <label class="control-label col-sm-4" for="postcode">Zip/Postal Code <sup>*</sup></label>
                                <div class="col-sm-6">
                                    <input class="is_required validate form-control" data-validate="isPostCode" type="text" id="postcode" name="postcode" value="<?= $customer->postcode ?>">
                                </div>
                            </div> -->
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="id_country">Country <sup>*</sup></label>
                                <div class="col-lg-9">
                                    <select id="id_country" class="form-control" name="id_country"><option value="173" selected="selected">Qatar</option></select>
                                </div>
                            </div>
                            <div class="form-group phone-number">
                                <label class="control-label col-lg-3" for="phone">Home phone  </label>
                                <div class="col-lg-9">
                                    <input class="is_required validate form-control" data-validate="isPhoneNumber" type="tel" id="phone" name="phone" value="<?= $customer->phone ?>">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="required form-group">
                                <label class="control-label col-lg-3" for="phone_mobile">Mobile phone </label>
                                <div class="col-lg-9">
                                    <input class="validate form-control" data-validate="isPhoneNumber" type="tel" id="phone_mobile" name="phone_mobile" value="<?= $customer->phone_mobile ?>">
                                </div>
                            </div>


                        </div>

                        <div class="submit clearfix">
                            <button type="submit"  id="submitAccount" class="btn btn-outline button button-medium">
                                <span>Save & Continue </span>
                            </button>
                            <p class="pull-right required"><span><sup>*</sup>Required field</span></p>
                        </div>
                    </form>
</div>
<div class="col-xs-12 col-sm-6 col-lg-6">

 <ul class="gallery clearfix">
				<li>
                <a href="<?= base_url() ?>images/persona_information.jpg" rel="prettyPhoto">
                <img src="<?= base_url() ?>images/persona_information.jpg"/>
                </a>
                </li>
			</ul>
</div>
                    
                </section>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('inc/footer'); ?>
    <script>
        $(function () {
        $("#ZoneId").change(function () {
            var $this= $(this) , CityId = <?= (int) $this->input->post('CityId') ?> ;
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
</section>
<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>

</body>
</html>