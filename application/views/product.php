<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
<head>
    <?php $this->load->view('inc/head') ?>
    <style>
        .box-cart-bottom .add_to_wishlist, .box-cart-bottom .add_to_compare {
            padding: 8px 0;
            border: none;
            color: #999;
            text-transform: none;
            font-weight: 500;
        }
        .box-cart-bottom .add_to_wishlist:hover, .box-cart-bottom .add_to_compare:hover {
            color: #bf9a61;
        }
        .box-cart-bottom .btn {
            clear: both;
            color: #666666;
            padding: 11px 13px 10px;
            background-color: white;
        }
    </style>
    <script>
    var CUSTOMIZE_TEXTFIELD = 1;
    var FancyboxI18nClose = 'Close';
    var FancyboxI18nNext = 'Next';
    var FancyboxI18nPrev = 'Previous';
    var PS_CATALOG_MODE = false;
    var added_to_wishlist = 'The product was successfully added to your wishlist.';
    var ajax_allowed = true;
    var ajaxsearch = true;
    var allowBuyWhenOutOfStock = false;
    var attribute_anchor_separator = '-';
    var attributesCombinations = [];
    var availableLaterValue = 'Out of Stock';
    var availableNowValue = 'In stock';
    var baseDir = '<?= base_url() ?>';
    var baseUri = '<?= base_url() ?>';
    var blocksearch_type = 'top';
    var blockwishlist_add = 'The product was successfully added to your wishlist';
    var blockwishlist_remove = 'The product was successfully removed from your wishlist';
    var blockwishlist_viewwishlist = 'View your wishlist';
    var combinations = { };
    var combinationsFromController = {};
    var comparator_max_item = 3;
    var confirm_report_message = 'Are you sure that you want to report this comment?';
    var contentOnly = false;
    var currency = {
        "id": 1,
        "name": "Rupees",
        "iso_code": "LKR",
        "iso_code_num": "840",
        "sign": "",
        "blank": "0",
        "conversion_rate": "1.000000",
        "deleted": "0",
        "format": "1",
        "decimals": "1",
        "active": "1",
        "prefix": "",
        "suffix": "",
        "id_shop_list": null,
        "force_id": false
    };
    var currencyBlank = 0;
    var currencyFormat = 1;
    var currencyRate = 1;
    var currencySign = '$';
    var currentDate = '2016-04-05 03:07:07';
    var customerGroupWithoutTax = true;
    var customizationFields = false;
    var customizationId = null;
    var customizationIdMessage = 'Customization #';
    var default_eco_tax = 0;
    var delete_txt = 'Delete';
    var displayDiscountPrice = '0';
    var displayList = false;
    var displayPrice = 1;
    var doesntExist = 'This combination does not exist for this product. Please select another combination.';
    var doesntExistNoMore = 'This product is no longer in stock';
    var doesntExistNoMoreBut = 'with those attributes but is available with others.';
    var ecotaxTax_rate = 0;
    var fieldRequired = 'Please fill in all the required fields before saving your customization.';
    var freeProductTranslation = 'Free!';
    var freeShippingTranslation = 'Free shipping!';
    var generated_date = 1459840028;
    var groupReduction = 0;
    var hasDeliveryAddress = false;
    var highDPI = false;
    var idDefaultImage = 24;
    var id_lang = 1;
    var id_product = <?= $product->id ?>;
    var img_dir = '<?= base_url('uploads') ?>';
    var img_prod_dir = '<?= base_url('uploads') ?>';
    var img_ps_dir = '<?= base_url('uploads') ?>';
    var instantsearch = false;
    var isGuest = 0;
    var isLogged = 1;
    var isMobile = false;
    var jqZoomEnabled = false;
    var loggin_required = 'You must be logged in to manage your wishlist.';
    var maxQuantityToAllowDisplayOfLastQuantityMessage = 3;
    var max_item = 'You cannot add more than 3 product(s) to the product comparison';
    var min_item = 'Please select at least one product';
    var minimalQuantity = 1;
    var moderation_active = true;
    var mywishlist_url = '<?= base_url() ?>cart/';
    var noTaxForThisProduct = true;
    var oosHookJsCodeFunctions = [];
    var page_name = 'product';
    var placeholder_blocknewsletter = 'Enter your e-mail';
    var priceDisplayMethod = 1;
    var priceDisplayPrecision = 2;
    var productAvailableForOrder = true;
    var productBasePriceTaxExcl = <?=(int) $product->price ?>;
    var productBasePriceTaxExcluded = <?= (int) $product->price ?>;
    var productBasePriceTaxIncl = <?=(int)  $product->price ?>;
    var productHasAttributes = true;
    var productPrice = <?= (int) $product->price ?>;
    var productPriceTaxExcluded = <?= (int) $product->price ?>;
    var productPriceTaxIncluded = <?= (int) $product->price ?>;
    var productPriceWithoutReduction = <?=(int) $product->price ?>;
    var productReference = '<?= $product->code ?>';
    var productShowPrice = true;
    var productUnitPriceRatio = 0;
    var product_fileButtonHtml = 'Choose File';
    var product_fileDefaultHtml = 'No file selected';
    var product_specific_price = {"id_specific_price":"4","id_specific_price_rule":"0","id_cart":"0","id_product":"1","id_shop":"0","id_shop_group":"0","id_currency":"0","id_country":"0","id_group":"0","id_customer":"0","id_product_attribute":"0","price":<?= (int)$product->price ?>,"from_quantity":"1","reduction":"0.300000","reduction_tax":"1","reduction_type":"percentage","from":"2015-09-28 00:00:00","to":"2018-05-31 00:00:00","score":"0"};
    var productcomment_added = 'Your comment has been added!';
    var productcomment_added_moderation = 'Your comment has been added and will be available once approved by a moderator.';
    var productcomment_ok = 'OK';
    var productcomment_title = 'New comment';
    var productcomments_controller_url = '';
    var productcomments_url_rewrite = true;
    var quantitiesDisplayAllowed = true;
    var quantityAvailable = <?= $product->qty ?> ;
    var quickView = true;
    var reduction_percent = <?= round(floatval($product->discount))  ?>;
    var reduction_price = 0;
    var removingLinkText = 'remove this product from my cart';
    var roundMode = 2;
    var search_url = '';
    var secure_key = 'ead50a1e0e1eacbf7e89695842abe4b2';
    var sharing_img = '<?= base_url('uploads').$product->image ?>';
    var sharing_name = '<?= html_escape($product->title) ?>';  
    var sharing_url = '<?= current_url() ?>';
    var specific_currency = false;
    var specific_price = <?= (int)$product->price  ?>;
    var static_token = 'd18e1f4f2bf063ab30a22ca0d98de0ce';
    var stf_msg_error = 'Your e-mail could not be sent. Please check the e-mail address and try again.';
    var stf_msg_required = 'You did not fill required fields';
    var stf_msg_success = 'Your e-mail has been sent successfully';
    var stf_msg_title = 'Send to a friend';
    var stf_secure_key = '8660aac6da33fdb026ce5d6df964172e';
    var stock_management = 1 ;
    var taxRate = 0;
    var toBeDetermined = 'To be determined';
    var token = 'd18e1f4f2bf063ab30a22ca0d98de0ce';
    var upToTxt = 'Up to';
    var uploading_in_progress = 'Uploading in progress, please be patient.';
    var usingSecureMode = false;
    var wishlistProductsIds = false;
    var options = <?= json_encode($options) ?> ;
    var original_url = '<?= current_url() ?>';
    var product = <?= json_encode($product) ?> ;
    </script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.easing.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/tools.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/global.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/10-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/15-jquery.total-storage.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/15-jquery.uniform-modified.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/products-comparison.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.idTabs.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.serialScroll.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/product.js?v=1.0"></script>
    <script type="text/javascript" src="<?=base_url()?>js/socialsharing.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/ajax-cart.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/treeManagement.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/blocknewsletter.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/blocksearch.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/ajax-wishlist.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.rating.pack.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/sendtoafriend.js?v=1.0"></script>
    <script type="text/javascript" src="<?=base_url()?>js/productcomments.js?v=1.0"></script>
    <script type="text/javascript" src="<?=base_url()?>js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/instafeed.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.stellar.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/countdown.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/script.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/raphael-min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/iview.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.autocomplete_productsearch.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/leosearch.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.cooki-plugin.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/colorpicker.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/paneltool.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/jquery.textareaCounter.plugin.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/profile1442473272.js"></script>
    <style>
        #send_friend_form {
            overflow: hidden;
            text-align: left;
        }
        #attributes .attribute_list .form-control {
            width: auto ;
        }
    </style>
</head>
<body id="product" class="product product-1 product-dkny-jeans-women-s-printed-lace-tank category-5 category-tshirts hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view('inc/header') ?>
    <div id="breadcrumb" class="clearfix">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="<?= base_url() ?>" title="Return to Home"><i
                        class="fa fa-home"></i></a>
                    <?php if($mainmenu): ?>
                        <span class="navigation-pipe">&gt;</span>
                        <span itemscope itemtype="">
                        <a itemprop="url" href="<?= base_url() ?>shop/<?= url_title( $mainmenu->title) ?>/<?= $mainmenu->id ?>"   title="<?= $mainmenu->title ?>">
                            <span   itemprop="title"><?= $mainmenu->title ?></span></a>
                        </span>
                    <?php endif; ?>

                    <?php if($menu): ?>
                        <span  class="navigation-pipe">></span>
                        <span itemscope itemtype="">
                        <a itemprop="url" href="<?= base_url() ?>shop/<?= url_title( $mainmenu->title) ?>/<?= $mainmenu->id ?>/<?= url_title( $menu->title) ?>/<?= $menu->id ?>"   title="<?= $menu->title ?>">
                            <span   itemprop="title"><?= $menu->title ?></span></a>
                        </span>
                    <?php endif; ?>
                    <span class="navigation-pipe">></span><?= $product->title ?>
                </span>
            </div>
            <!-- /Breadcrumb -->

        </div>
    </div>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <div class="row">

                <!-- Center -->
                <section id="center_column" class="col-md-12">
                    <div class="panel-default" itemscope itemtype="">
                        <meta itemprop="url" content="">
                        <div class="primary_block row">
                            <h1 itemprop="name"> <?= $product->title ?> </h1>
                            <div class="container">
                                <div class="top-hr"></div>
                            </div>
                            <!-- left infos-->
                            <div class="pb-left-column col-xs-12 col-sm-12 col-md-5">
                                <!-- product img-->
                                <div id="image-block" class="clearfix">
                                   
                                    <span id="view_full_size"> <img id="bigpic" class="img-responsive" itemprop="image" src="<?= base_url() ?>uploads/<?= $product->image ?>" title="" width="458" height="458"/> <span class="span_link no-print status-enable"></span> </span> </div>
                                <!-- end image-block -->
                                <!-- thumbnails -->
                                <div id="views_block" class="clearfix "> <span class="view_scroll_spacer"> <a id="view_scroll_left" class="" title="Other views" href="javascript:{}"> Previous </a> </span>
                                    <div id="thumbs_list">
                                        <ul id="thumbs_list_frame">
                                            <li id="thumbnail_24"> <a href="<?= base_url() ?>uploads/<?= $product->image ?>"	data-fancybox-group="other-views" class="fancybox shown" title=""> <img class="img-responsive" id="thumb_24" src="<?= base_url() ?>uploads/thumbs/<?= $product->image ?>" alt="" title="" height="80" width="80" itemprop="image" /> </a> </li>
                                       <?php foreach($images as $k => $img ): ?>
                                           <li id="thumbnail_<?=$k+25?>"> <a href="<?= base_url() ?>uploads/<?= $img->image ?>"	data-fancybox-group="other-views" class="fancybox" title=""> <img class="img-responsive" id="thumb_25" src="<?= base_url() ?>uploads/thumbs/<?= $img->image ?>" alt="" title="" height="80" width="80" itemprop="image" /> </a> </li>
                                       <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- end thumbs_list -->
                                    <a id="view_scroll_right" title="Other views" href="javascript:{}"> Next </a> </div>
                                <!-- end views-block -->
                                <!-- end thumbnails -->
                                <p class="resetimg clear no-print"> <span id="wrapResetImages" style="display: none;"> <a href="" data-id="resetImages"> <i class="fa fa-repeat"></i> Display all pictures </a> </span> </p>
                            </div>
                            <!-- end pb-left-column -->
                            <!-- end left infos-->
                            <!-- center infos -->
                            <div class="pb-center-column col-xs-12 col-sm-12 col-md-4">
                                <!--<div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                    <div class="comments_note clearfix"> <span>Rating&nbsp;</span>
                                        <div class="star_content clearfix">
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <meta itemprop="worstRating" content = "0" />
                                            <meta itemprop="ratingValue" content = "5" />
                                            <meta itemprop="bestRating" content = "5" />
                                        </div>
                                    </div>

                                    <ul class="comments_advices">
                                        <li> <a href="#idTab5" class="reviews" onclick="$('#link_idTab5').trigger('click');"> Read reviews (<span itemprop="reviewCount">1</span>) </a> </li>
                                    </ul>
                                </div>-->
                                <!--  /Module ProductComments -->

                                <p class= "">&nbsp;  </p>

                                <div id="product_comments_block_extra" class="no-print" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                                   <!-- <div class="comments_note clearfix">
                                        <span>Rating&nbsp;</span>
                                        <div class="star_content clearfix">
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <div class="star star_on"></div>
                                            <meta itemprop="worstRating" content="0">
                                            <meta itemprop="ratingValue" content="5">
                                            <meta itemprop="bestRating" content="5">
                                        </div>
                                    </div>--> <!-- .comments_note -->

                                    <ul class="comments_advices">
                                        <li>
                                            <a href="#idTab5" class="reviews selected" onclick="$('#link_idTab5').trigger('click');">
                                                Read reviews (<span itemprop="reviewCount"><?= count($reviews) ?></span>)
                                            </a>
                                        </li>
                                        <li>
                                            <a class="open-comment-form" href="#new_comment_form">
                                                Write a review
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Fancybox -->
                                <div style="display: none;">
                                    <div id="new_comment_form">
                                        <form id="id_new_comment_form" action="#">
                                            <h2 class="page-subheading">
                                                Write a review
                                            </h2>
                                            <div class="row">
                                                <div class="product clearfix col-xs-12 col-sm-6">
                                                    <img src="<?= base_url('uploads') ?>/<?= $product->image ?>" height="125" width="125" alt="<?= $product->title ?>" />
                                                    <div class="product_desc">
                                                        <p class="product_name">
                                                            <strong><?= $product->title ?></strong> </p>
                                                        <p> <?= $product->short ?></p>
                                                    </div>
                                                </div>
                                                <div class="new_comment_form_content col-xs-12 col-sm-6">
                                                    <div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
                                                        <ul></ul>
                                                    </div>
                                                    <ul id="criterions_list">
                                                        <li>
                                                            <label>Quality:</label>
                                                            <div class="star_content">
                                                                <input class="star not_uniform" type="radio" name="criterion" value="1" />
                                                                <input class="star not_uniform" type="radio" name="criterion" value="2" />
                                                                <input class="star not_uniform" type="radio" name="criterion" value="3" />
                                                                <input class="star not_uniform" type="radio" name="criterion" value="4" checked="checked" />
                                                                <input class="star not_uniform" type="radio" name="criterion" value="5" />
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    </ul>
                                                    <label for="comment_title">
                                                        Email: <sup class="required">*</sup>
                                                    </label>
                                                    <input id="comment_email" required name="email" type="email" value=""/>
                                                    <label for="comment_title">
                                                        Title: <sup class="required">*</sup>
                                                    </label>
                                                    <input id="comment_title" required name="title" type="text" value=""/>
                                                    <label for="content">
                                                        Comment: <sup class="required">*</sup>
                                                    </label>
                                                    <textarea id="content" required name="content"></textarea>
                                                    <div id="new_comment_form_footer">
                                                        <input id="id_product_comment_send" name="id_product" type="hidden" value='<?= $product->id ?>' />
                                                        <p class="fl required"><sup>*</sup> Required fields</p>
                                                        <p class="fr">
                                                            <button id="submitNewMessage" name="submitMessage" type="submit" class="btn button button-small btn-sm">
                                                                <span>Submit</span>
                                                            </button>&nbsp;
                                                            or&nbsp;
                                                            <a class="closefb" href="#">
                                                                Cancel
                                                            </a>
                                                        </p>
                                                        <div class="clearfix"></div>
                                                    </div> <!-- #new_comment_form_footer -->
                                                </div>
                                            </div>
                                        </form><!-- /end new_comment_form_content -->
                                    </div>
                                </div>
                                <!-- End fancybox -->

                                <p id="product_reference">
                                    <label>Reference: </label>
                                    <span class="editable" itemprop="sku" content="<?= $product->code ?>"><?= $product->code ?></span> </p>
                                <!--<p id="product_condition">
                                    <label>Condition: </label>
                                    <link itemprop="itemCondition" href="https://schema.org/NewCondition"/>
                                    <span class="editable">New product</span> </p>-->
                                <div id="short_description_block">
                                    <div id="short_description_content" class="rte align_justify" itemprop="description">
                                        <p style="text-align: justify" >  <?= $product->short ?></p>
                                    </div>

                                    <!---->
                                </div>
                                <!-- end short_description_block -->
                                <!-- number of item in stock -->
                                <p id="pQuantityAvailable"> <span id="quantityAvailable"></span> <span  style="display: none;" id="quantityAvailableTxt">Item</span> <span  id="quantityAvailableTxtMultiple">Items</span> </p>
                                <!-- availability or doesntExist -->

                                <p id="availability_statut"  > <span id="" class="label "></span> </p>
                                <p class="label warning_inline" id="last_quantities"  style="display: none" >Warning: Last items in stock!</p>
                                <p id="availability_date" style="display: none;"> <span id="availability_date_label">Availability date:</span> <span id="availability_date_value"></span> </p>
                                <!-- Out of stock hook -->
                                <div id="oosHook" style="display: none;"> </div>

                                <p class="socialsharing_product list-inline no-print">
                                    <button  data-type="twitter" type="button" class="btn1 btn-outline btn-twitter social-sharing"> <i class="fa fa-twitter"></i> Tweet
                                        <!-- <img src="http://demo4leotheme.com/prestashop/leo_emarket_demo/modules/socialsharing/img/twitter.gif" alt="Tweet" /> -->
                                    </button>
                                    <button  data-type="facebook" type="button" class="btn1 btn-outline btn-facebook  social-sharing"> <i class="fa fa-facebook"></i> Share
                                        <!-- <img src="http://demo4leotheme.com/prestashop/leo_emarket_demo/modules/socialsharing/img/facebook.gif" alt="Facebook Like" /> -->
                                    </button>
                                    <button data-type="google-plus" type="button" class="btn1 btn-outline btn-google-plus  social-sharing"> <i class="fa fa-google-plus"></i> Google+
                                        <!-- <img src="http://demo4leotheme.com/prestashop/leo_emarket_demo/modules/socialsharing/img/google.gif" alt="Google Plus" /> -->
                                    </button>
                                    <button data-type="pinterest" type="button" class="btn1 btn-outline btn-pinterest  social-sharing"> <i class="fa fa-pinterest"></i> Pinterest
                                        <!-- <img src="http://demo4leotheme.com/prestashop/leo_emarket_demo/modules/socialsharing/img/pinterest.gif" alt="Pinterest" /> -->
                                    </button>
                                </p>




                                <!-- usefull links-->
                                <ul id="usefull_link_block" class="clearfix no-print">
                                    <li class="sendtofriend"> <a id="send_friend_button" href="#send_friend_form"></a>
                                    </li>
                                    <li class="print"> <a href="javascript:print();"></a> </li>
                                </ul>

                                <div style="display: none;">
                                    <div id="send_friend_form">
                                        <h2  class="page-subheading"> Send to a friend </h2>
                                        <div class="row">
                                            <div class="product clearfix col-xs-12 col-sm-6">
                                                <img src="<?= base_url('uploads') ?>/<?= $product->image ?>" height="125" width="125" alt="<?= $product->title ?>" />
                                                <div class="product_desc">
                                                    <p class="product_name">
                                                        <strong><?= $product->title ?></strong> </p>
                                                    <p> <?= $product->short ?></p>
                                                </div>
                                            </div>
                                            <!-- .product -->
                                            <div class="send_friend_form_content col-xs-12 col-sm-6" id="send_friend_form_content">
                                                <div id="send_friend_form_error"></div>
                                                <div id="send_friend_form_success"></div>
                                                <div class="form_container">
                                                    <p class="intro_form"> Recipient : </p>
                                                    <p class="text">
                                                        <label for="friend_name"> Name of your friend <sup class="required">*</sup> : </label>
                                                        <input id="friend_name" name="friend_name" type="text" value="" class="form-control"/>
                                                    </p>
                                                    <p class="text">
                                                        <label for="friend_email"> E-mail address of your friend <sup class="required">*</sup> : </label>
                                                        <input id="friend_email" name="friend_email" type="text" value="" class="form-control"/>
                                                    </p>
                                                    <p class="txt_required"> <sup class="required">*</sup> Required fields </p>
                                                </div>
                                                <p class="submit">
                                                    <button id="sendEmail" class="btn button button-small btn-sm" name="sendEmail" type="submit"> <span>Send</span> </button>
                                                    &nbsp;
                                                    or&nbsp; <a class="closefb" href="#"> Cancel </a> </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end center infos-->
                            <!-- pb-right-column-->
                            <div class="pb-right-column col-xs-12 col-sm-12 col-md-3">
                                <!-- add to cart form-->
                                <form id="buy_block" action="<?= base_url() ?>cart/add" method="post">
                                    <!-- hidden datas -->
                                    <p class="hidden">
                                        <input type="hidden" name="token" value="9dd6a1e80ac1c982bcb37309d9ae779d" />
                                        <input type="hidden" name="id_product" value="<?= $product->id ?>" id="product_page_product_id" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
                                    </p>
                                    <div class="box-info-product">
                                        <div class="content_prices clearfix">
                                            <!-- prices -->
                                            <div class="price">
                                                <p class="our_price_display" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                                    <link itemprop="availability" href="https://schema.org/InStock"/>
                                                    <?php $price =   ( (100-$product->discount)/100 * (int)$product->price  )   ?>
                                                    <span id="our_price_display" class="price" itemprop="price" content="<?= number_format( $price, 2 ) ?>"><?= number_format( $price, 2 ) ?> QAR</span>
                                                    <meta itemprop="priceCurrency" content="USD" />
                                                </p>
                                                <?php if($product->discount > 0  ): ?>
                                                    <p id="reduction_percent" ><span id="reduction_percent_display">-<?= round($product->discount) ?>%</span></p>
                                                    <p id="reduction_amount"  style="display:none"><span id="reduction_amount_display"></span></p>
                                                    <p id="old_price"><span id="old_price_display"><span class="price"><?= number_format((int)$product->price  ,2) ?> QAR </span></span></p>
                                                <?php endif; ?>
                                            </div>
                                            <!-- end prices -->

                                            <div class="clear"></div>
                                        </div>
                                        <!-- end content_prices -->
                                        <div class="product_attributes clearfix">
                                            <!-- attributes -->
                                            <div id="attributes">
                                                <div class="clearfix"></div>
                                                <?php if(!empty($options['color'])): ?>
                                                    <fieldset class="attribute_fieldset">
                                                        <label class="attribute_label">Color :&nbsp;</label>
                                                        <div class="attribute_list">
                                                            <select  name="color" id="color_picker"
                                                                     class="form-control attribute_select no-print "> 
                                                                <?php foreach ($options['color'] as $k=> $color):  ?>
                                                                    <option value="<?=$color->color_id?>"
                                                                            title="<?=$color->color?>">
                                                                        <?=$color->color?>
                                                                    </option>
                                                                <?php endforeach;  ?>
                                                            </select>
                                                        </div>
                                                        <!-- end attribute_list -->
                                                    </fieldset>
                                                <?php else : ?>
                                                    <input type="hidden" name="color"  value="0" >
                                                <?php endif; ?>

                                                <?php if(!empty($options['size'])): ?>
                                                    <fieldset class="attribute_fieldset">
                                                        <label class="attribute_label">Size :&nbsp;</label>
                                                        <div class="attribute_list">
                                                            <select  name="size" id="size_picker"
                                                                     class="form-control attribute_select no-print ">
                                                            </select>
                                                        </div>
                                                        <!-- end attribute_list -->
                                                    </fieldset>
                                                <?php else : ?>
                                                    <input type="hidden" name="size"  value="0" >
                                                <?php endif; ?>

                                            </div>
                                            <!-- end attributes -->
                                            <!-- quantity wanted -->
                                            <p id="quantity_wanted_p">
                                                <a href="#" data-field-qty="qty" class="btn status-enable button-minus btn-sm product_quantity_down"> <i class="fa fa-minus"></i> </a>
                                                <input type="number" max="<?= $product->qty ?>" min="1" name="qty" id="quantity_wanted" class="text form-control" value="<?= $product->cart_qty ?>" />
                                                <a href="#" data-field-qty="qty" class="btn status-enable button-plus btn-sm product_quantity_up"> <i class="fa fa-plus"></i> </a> <span class="clearfix"></span> </p>
                                            <!-- minimal quantity wanted -->
                                            <p id="minimal_quantity_wanted_p" style="display: none;"> The minimum purchase order quantity for the product is <b id="minimal_quantity_label">1</b> </p>
                                        </div>
                                        <!-- end product_attributes -->
                                        <div class="box-cart-bottom">
                                            <div>
                                                <p id="add_to_cart" class="buttons_bottom_block no-print">
                                                    <button type="submit" name="Submit" class="exclusive btn2 btn-outline"> <span>Add to cart</span> </button>
                                                </p>
                                            </div>
                                            <div class="group-btn">

                                                <a class="add_to_compare btn btn-default buttons_bottom_block" href="" data-id-product="<?= $product->id ?>" title="Add to compare">
                                                    <span><i class="fa fa-refresh"></i>Add to compare</span>
                                                </a>
                                                <p class="buttons_bottom_block no-print">
                                                    <a class="btn button btn-default add_to_wishlist" id="wishlist_button_nopop" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '3', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="Add to my wishlist">
                                                        <i class="fa fa-heart-o"></i>Add to wishlist
                                                    </a>
                                                </p>

                                                <!-- Productpaymentlogos module -->
                                                <div id="product_payment_logos">
                                                <div class="box-security">
                                                      
                                                        <img src="<?=base_url()?>images/payment-logo-1.png" alt="" class="img-responsive" /> </div>
                                                    
                                   
                                                </div>
                                                
                                                
                                                <!-- /Productpaymentlogos module -->
                                            </div>
                                        </div>
                                        <!-- end box-cart-bottom -->
                                    </div>
                                    <!-- end box-info-product -->
                                </form>
                            </div>
                            <!-- end pb-right-column-->
                        </div>
                        <!-- end primary_block -->
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first').addClass('active');
                        });
                    </script>
                    <ul class="nav nav-tabs tab-info page-product-heading">
                        <li class="active"><a href="#tab2" data-toggle="tab">More info</a></li>
                        <li><a href="#tab3" data-toggle="tab">Data sheet</a></li>
                        <li><a id="link_idTab5" href="#idTab5" data-toggle="tab">Reviews</a></li>
                      <!--  <li><a href="#tab4" data-toggle="tab">Accessories</a></li>-->
                    </ul>
                    <div class="tab-content page-product-content">

                        <!-- More info -->
                        <section id="tab2" class="tab-pane page-product-box active">

                            <!-- full description -->
                            <div  class="rte">
                               <?= $product->description ?>
                            </div>
                        </section>
                        <!--end  More info -->
                        <!-- Data sheet -->
                        <section id="tab3" class="tab-pane page-product-box">
                            <table class="table-data-sheet">
                                <?php foreach($datasheet as $k => $d) : ?>
                                    <tr class="<?= $k%2==0 ? "odd":"even" ?>">
                                        <td><?= $d->title ?></td>
                                        <td><?= $d->data ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </section>
                        <!--end Data sheet -->
                        <!--HOOK_PRODUCT_TAB -->
                        <section id="idTab5" class="tab-pane page-product-box">
                            <div id="product_comments_block_tab">
                                <?php foreach ($reviews as $pro ): ?>
                                    <div class="comment row" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                        <div class="comment_author col-sm-2">
                                            <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Restaurant"> <span itemprop="name"><?= $product->title ?></span> </div>
                                            <div class="star_content clearfix" itemprop="reviewRating" itemscope="" itemtype="https://schema.org/Rating">
                                                <?= repeater('<div class="star star_on"></div>', $pro->criterion) ?>
                                                <?= repeater('<div class="star star_off"></div>', 5-$pro->criterion) ?>
                                                <meta itemprop="worstRating" content="0">
                                                <meta itemprop="ratingValue" content="<?= $pro->criterion ?>">
                                                <meta itemprop="bestRating" content="5">
                                            </div>
                                            <div class="comment_author_infos">
                                                <meta itemprop="datePublished" content="<?= date('d/m/Y',strtotime($pro->date)) ?>" />
                                                <em> <?= date('d/m/Y',strtotime($pro->date)) ?> </em> </div>
                                        </div>

                                        <div class="comment_details col-sm-10">
                                            <p itemprop="name" class="title_block"> <strong><?= $pro->title ?></strong> </p>
                                            <p itemprop="reviewBody">  <?= $pro->content ?></p>

                                        </div>


                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- #product_comments_block_tab -->
                        </section>



                        <!--end HOOK_PRODUCT_TAB -->
                        <!--Accessories -->
                        <section id="tab4" class="tab-pane page-product-box">
                            <div class="block products_block clearfix">
                                <div class="block_content">
                                    <div class="product_list grid row">
                                        <?php foreach($related as $pro): ?>
                                            <div class="product_block col-xs-12 col-sm-6 col-md-3 col-lg-3 item  product_accessories_description">
                                                <div class="product-container product-block" itemscope itemtype="">
                                                    <div class="left-block">
                                                        <div class="box-buttons">
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\add_to_cart -->
                                                            <a class="button ajax_add_to_cart_button btn btn-default" href="" rel="nofollow" title="Add to cart" data-id-product-attribute="1" data-id-product="<?= $pro->id ?>" data-minimal_quantity="1"> <i class="fa fa-shopping-cart"></i> </a>
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\wishlist -->
                                                            <div class="wishlist"><a
                                                                    class="button btn addToWishlist wishlistProd_4"
                                                                    data-link="<?= $pro->id ?>" href="#"
                                                                    onclick="WishlistCart('wishlist_block_list', 'add', '<?= $pro->id ?>', false, 1); return false;"
                                                                    title="Add to my wishlist"> <span><i
                                                                            class="fa fa-heart-o"></i></span> </a>
                                                            </div><!-- @file modules\appagebuilder\views\templates\front\products\compare -->
                                                            <a class="add_to_compare compare" href="" data-id-product="<?= $pro->id ?>" title="Add to compare"><span><i class="fa fa-refresh"></i></span></a>
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\view -->
                                                            <div class="view"> <a itemprop="url" class="lnk_view button btn-tooltip" href="<?= base_url()."product_detail/".$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title="View"> <i class="fa fa-search"></i> </a> </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="product-meta">
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                                                            <h5 itemprop="name" class="name">
                                                                <a class="product-name"  href="<?= base_url() ?>top-deals/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                   title="<?= $pro->title ?>"  itemprop="url">
                                                                    <?= $pro->title ?></a>
                                                            </h5>
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                                                            <div class="content_price">
                                                                <?php if($pro->discount > 0  ): ?>
                                                                    <span    class="price product-price"> <?= number_format( ( (100-$pro->discount)/100 * $pro->price ) , 2 ) ?> QAR </span>
                                                                    <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?> QAR </span>
                                                                    <span class="price-percent-reduction">-<?= $pro->discount ?>%</span>
                                                                <?php else: ?>
                                                                    <span    class="price product-price"> <?= number_format($pro->price ,2) ?> QAR </span>
                                                                <?php endif; ?>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                          </div>
                                </div>
                            </div>
                        </section>
                        <!--end Accessories -->

                        <!-- description & features -->
                    </div>
                    <div class="panel-default blockproductscategory products_block block">
                        <h4 class="page-subheading productscategory_h3">Related Products</h4>
                        <div class="block_content">
                            <div id="productscategory_list" class="clearfix grid">
                                <?php foreach($related as $pro): ?>
                                    <div class="item ">
                                        <div class="product_block ajax_block_product product-list-1442492182">
                                            <div class="product-container product-block" itemscope itemtype="http://schema.org/Product">
                                                <div class="left-block">
                                                    <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                                                    <div class="product-image-container image">
                                                        <div class="leo-more-info hidden-xs" data-idproduct="<?= $pro->id ?>"></div>
                                                        <a class="product_img_link" href="<?= base_url()."product_detail/".$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title="" itemprop="url">
                                                            <img class="replace-2x img-responsive"
                                                                 src="<?= base_url('uploads')."/".$pro->image ?> "
                                                                 alt="" title="" itemprop="image"/>
                                                            <span  class="product-additional" data-idproduct="<?= $pro->id ?>">  </span>
                                                        </a>
                                                    </div>

                                                    <div class="box-buttons">
                                                        <!-- @file modules\appagebuilder\views\templates\front\products\add_to_cart -->
                                                        <a class="button ajax_add_to_cart_button btn btn-default" href="" rel="nofollow" title="Add to cart" data-id-product-attribute="<?= $pro->id ?>" data-id-product="<?= $pro->id ?>" data-minimal_quantity="1"> <i class="fa fa-shopping-cart"></i> </a>
                                                        <!-- @file modules\appagebuilder\views\templates\front\products\wishlist -->
                                                        <div class="wishlist"> <a class="button btn addToWishlist wishlistProd_1" data-link="<?= $pro->id ?>" href="#" onclick="" title="Add to my wishlist"> <span><i class="fa fa-heart-o"></i></span> </a> </div>
                                                        <!-- @file modules\appagebuilder\views\templates\front\products\compare -->
                                                        <a class="add_to_compare compare" href="" data-id-product="<?= $pro->id ?>" title="Add to compare"><span><i class="fa fa-refresh"></i></span></a>
                                                        <!-- @file modules\appagebuilder\views\templates\front\products\view -->
                                                        <div class="view"> <a itemprop="url" class="lnk_view button btn-tooltip" href="<?= base_url()."product_detail/".$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title="View"> <i class="fa fa-search"></i> </a> </div>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="product-meta">
                                                        <!-- @file modules\appagebuilder\views\templates\front\products\reviews -->

                                                        <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                                                        <h5 itemprop="name" class="name"> <a class="product-name" href="<?= base_url()."product_detail/".$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title="" itemprop="url" > <?= $pro->title ?>  </a> </h5>

                                                                 <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                                                        <div class="content_price">
                                                            <?php if($pro->discount > 0  ): ?>
                                                                <span    class="price product-price"> <?= number_format( ( (100-$pro->discount)/100 * $pro->price ) , 2 ) ?> QAR </span>
                                                                <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?> QAR  </span>
                                                                <span class="price-percent-reduction">-<?= $pro->discount ?>%</span>
                                                            <?php else: ?>
                                                                <span    class="price product-price"> <?= number_format($pro->price ,2) ?> QAR </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            $('#productscategory_list').owlCarousel({
                                direction:'ltr',
                                items : 4,
                                itemsCustom : false,
                                itemsDesktop : [1199,4],
                                itemsDesktopSmall : [979,2],
                                itemsTablet : [768,1],

                                itemsMobile : [479,1],
                                singleItem : false,         // true : show only 1 item
                                itemsScaleUp : false,
                                slideSpeed : 200,  //  change speed when drag and drop a item
                                paginationSpeed :800, // change speed when go next page

                                autoPlay : true,   // time to show each item
                                stopOnHover : false,
                                navigation : true,
                                navigationText : ["&lsaquo;", "&rsaquo;"],

                                scrollPerPage :true,
                                responsive :true,

                                pagination : false,
                                paginationNumbers : false,

                                addClassActive : true,

                            });
                        });
                    </script>
                </section>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view('inc/footer') ?>
</section>
<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>

</body>
</html>