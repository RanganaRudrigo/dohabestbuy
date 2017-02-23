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



                    <h1 class="page-heading">My account</h1>
                    <p class="info-account">Welcome to your account. Here you can manage all of your personal information and orders.</p>
                    <div class="row addresses-lists">
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <ul class="myaccount-link-list">
                                <li><a href="" title="Information"><i class="fa fa-user"></i><span>My personal information</span></a></li>
<!--                                <li><a href="" title="Addresses"><i class="fa fa-ship"></i><span>Shipping Addresses</span></a></li>-->
                                <li><a href="<?= base_url() ?>user/history" title="Credit slips"><i class="fa fa-ban"></i><span>Order History</span></a></li>
                                <li><a href="<?= base_url() ?>user/wishlist" title="Addresses"><i class="fa fa-heart"></i><span>My wishlists</span></a></li>

                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-8 personal-info  "  >
                            <ul class="last_item item box">
                                <li><h3 class="page-subheading">My personal</h3></li>
                                <li>  <span class="address_name">    <?= $customer->firstname ?>   </span>
                                      <span class="address_name"> <?= $customer->lastname ?> </span>
                                </li>
                                <li>   <span class="address_company">    <?= $customer->company ?>   </span>
                                </li>
                                <li>  <span class="address_address1">    <?= $customer->address1 ?> </span>
                                      <span class="address_address2"> <?= $customer->address2 ?> </span>
                                </li>
                                <li>   <span>   <?= $customer->city ?>,    </span>
                                       <span>  <?= $customer->state ?>  </span>
                                        <span> <?= $customer->postcode ?>  </span>
                                </li>
                                <li>  <span>  Qatar  </span>  </li>
                                <li>   <span class="address_phone"> <?= $customer->phone ?> </span>
                                </li>
                                <li>  <span class="address_phone_mobile">  <?= $customer->phone_mobile ?>    </span>   </li>
                                <li class="address_update">
                                    <a class="btn btn-outline button button-small btn-sm" href="<?= current_url() ?>/edit" title="Update"><span>Update</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </section>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('inc/footer'); ?>
</section>
<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>

</body>
</html>