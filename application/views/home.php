<!DOCTYPE HTML>
<html lang="en-us" class="default">
<head>
    <?php $this->load->view('inc/head') ?>
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
        var contentOnly = false;
        var currency = {
            "id": 1,
            "name": "Dollar",
            "iso_code": "USD",
            "iso_code_num": "840",
            "sign": "$",
            "blank": "0",
            "conversion_rate": "1.000000",
            "deleted": "0",
            "format": "1",
            "decimals": "1",
            "active": "1",
            "prefix": "$ ",
            "suffix": "",
            "id_shop_list": null,
            "force_id": false
        };
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
        <?php foreach ($category as $cat):
        if( count( $cat->pro['products']  ) == 0  ) continue;
           $c[]['title'] = url_title($cat->title) ;
        endforeach; ?>
        var catlist = <?= json_encode($c) ?>;
    </script>
    <?php $this->load->view('inc/head_js') ?>
    <style>
    .products_block h4, .toplist-product h4, .categorieslink h4, .categorieslink h4 a, .latest-blogs h4 a{
	color: #340149;
	text-transform: uppercase;
}
.facebook-box { padding:20px;}
    </style>
</head>
<body id="index" class="index hide-left-column show-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view('inc/header') ?>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <div class="row">
                <!-- Center -->
                <section id="center_column" class="col-md-12">
                    <div class="clearfix"><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <div class="row topnav-bar  hidden-sp ApRow has-bg bg-boxed"
                             data-bg=" no-repeat" style="background: no-repeat;">

                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "   >
                                <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
                                <div
                                    class="ApRawHtml block">
                                    <div class="block_content">
                                        <ul class="nav-bar">
                                            <li class="deals"><a href="#"><img src="images/icon9.png" class="img-responsive " title="" alt="Today Deals"></a></li>
                                            <?php foreach ($category as $cat): ?>
                                                <?php if( count( $cat->pro['products']  ) == 0  ) continue; ?>
                                                <li class="<?= url_title($cat->title) ?>"><a href="#"><img
                                                            src="<?= base_url() ?>uploads/<?= $cat->icon ?>"
                                                            class="img-responsive " title="<?= $cat->title ?>"
                                                            alt="<?= $cat->title ?>"></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <div class="row ApRow has-bg bg-boxed"
                             data-bg=" no-repeat" style="background: no-repeat;margin-top: 32px;">

                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                            <div
                                class="hidden-md hidden-sm hidden-xs hidden-sp col-lg-3 col-md-6 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                                ></div>
                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "    >
                                <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
                                <div id="slideshow-form_4087621637510659" class="ApSlideShow">
                                    <div class="bannercontainer banner-fullwidth" style="padding: 0;margin: 0;">
                                        <div class="iview iview-group-10"
                                             <?php foreach($slider as $sli ):  ?>
                                                 <!-- SLIDE IMAGE BEGIN -->
                                                 <div class="slide_config"
                                                      data-link="<?= $sli->url ?>"
                                                      data-leo_image="uploads/<?= $sli->image ?>"
                                                      data-leo_pausetime="5000"
                                                      data-leo_thumbnail="uploads/thumbs/<?= $sli->image ?>"
                                                      data-leo_background="image"  >
                                                     <div class="tp-caption  medium_text_white"   data-x="400"      data-y="275"  data-transition="wipeRight"   >
                                                         <?= $sli->title_1 ?>

                                                     </div>
                                                     <div class="tp-caption  large_text_yellow"   data-x="400"    data-y="305"    data-transition="wipeRight"  ><?= $sli->title_2 ?></div>
                                                     <div class="tp-caption  small_text_white"
                                                          data-x="400"
                                                          data-y="380"
                                                          data-transition="wipeRight"  ><?= $sli->description ?>
                                                     </div>
                                                 </div>
                                                 <!-- SLIDE IMAGE END -->
                                             <?php endforeach;  ?>
                                        </div>
                                        
                                    </div>
                                     
                                    
                                    
                                    
                                    <script type="text/javascript">
                                        $(document).ready(function () {

                                            jQuery(".iview-group-10").iView({
                                                // COMMON
                                                pauseTime: 5000, // delay
                                                startSlide: 0,
                                                autoAdvance: 1,	// enable timer thá»�i gian auto next slide
                                                pauseOnHover: 0,
                                                randomStart: 0, // Ramdom slide when start

                                                // TIMER
                                                timer: "360Bar",
                                                timerPosition: "top-right", // Top-right, top left ....
                                                timerX: 10,
                                                timerY: 10,
                                                timerOpacity: 0.5,
                                                timerBg: "#000",
                                                timerColor: "#EEE",
                                                timerDiameter: 30,
                                                timerPadding: 4,
                                                timerStroke: 3,
                                                timerBarStroke: 1,
                                                timerBarStrokeColor: "#EEE",
                                                timerBarStrokeStyle: "solid",
                                                playLabel: "Play",
                                                pauseLabel: "Pause",
                                                closeLabel: "Close", // Muli language

                                                // NAVIGATOR controlNav
                                                controlNav: 1, // true : enable navigate - default:'false'
                                                keyboardNav: 1, // true : enable keybroad
                                                controlNavThumbs: 0, // true show thumbnail, false show number ( bullet )
                                                controlNavTooltip: 0, // true : hover to bullet show thumnail
                                                tooltipX: 5,
                                                tooltipY: -5,
                                                controlNavHoverOpacity: 1, // opacity navigator

                                                // DIRECTION
                                                controlNavNextPrev: false, // false dont show direction at navigator
                                                directionNav: 1, // true  show direction at image ( in this case : enable direction )
                                                directionNavHoverOpacity: 1, // direction opacity at image
                                                nextLabel: "Next",				// Muli language
                                                previousLabel: "Previous", // Muli language

                                                // ANIMATION
                                                fx: 'random', // Animation
                                                animationSpeed: 500, // time to change slide
//		strips: 20,
                                                strips: 1, // set value is 1 -> fix animation full background
                                                blockCols: 10, // number of columns
                                                blockRows: 5, // number of rows

                                                captionSpeed: 500, // speed to show caption
                                                captionOpacity: 1, // caption opacity
                                                captionEasing: 'easeInOutSine', // caption transition easing effect, use JQuery Easings effect
                                                customWidth: 870,
                                                customHtmlBullet: false,
                                                rtl: false,
                                                height: 460,

                                                //onBeforeChange: function(){}, // Triggers before a slide transition
                                                //onAfterChange: function(){}, // Triggers after a slide transition
                                                //onSlideshowEnd: function(){}, // Triggers after all slides have been shown
                                                //onLastSlide: function(){}, // Triggers when last slide is shown
                                                //onPause: function(){}, // Triggers when slider has paused
                                                //onPlay: function(){} // Triggers when slider has played

                                                onAfterLoad: function () {
                                                    // THUMBNAIL

                                                    // BULLET

                                                },

                                            });
                                        });

                                        $(document).ready(function () {
                                            $(".img_disable_drag").bind('dragstart', function () {
                                                return false;
                                            });
                                        });

                                        // Fix : Slide link, image cant swipe
                                        $(document).ready(function () {
                                            // step 1
                                            var link_event = 'click';

                                            // step 3
                                            $(".iview-group-10 .slide_config").on("click", function () {

                                                if (link_event !== 'click') {
                                                    link_event = 'click';
                                                    return;
                                                }

                                                if ($(this).data('link') != undefined && $(this).data('link') != '') {
                                                    window.open($(this).data('link'), $(this).data('target'));
                                                }

                                            });

                                            // step 2
                                            $(".iview-group-10 .slide_config").on('swipe', function () {
                                                link_event = 'swiped';	// do not click event
                                            });
                                        });

                                    </script>
                                </div>
                            </div>
                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <div class="row hidden-sm hidden-md hidden-xs hidden-sp ApRow has-bg bg-boxed"
                             data-bg=" no-repeat" style="background: no-repeat;">

                            <?php foreach($banners_top as $ban ): ?>
                                <div class="space-top-30 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                                    >

                                    <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                    <div id="image-form_6986144542579725" class="block img_overlay ApImage"><a href="<?= $ban->title ?>"> <img
                                                src="<?= base_url() ?>uploads/<?= $ban->image ?>" class="img-responsive "
                                                title=""
                                                alt=""
                                                style=" width:auto;
			height:auto"/> </a></div>
                                </div>
                            <?php endforeach ?>

                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <div class="row tabs-deals ApRow has-bg bg-boxed"
                             data-bg=" no-repeat" style="background: no-repeat;">

                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                            <div class="deal-product col-lg-9 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "   >
                                <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                                <div  class="block products_block exclusive appagebuilder panel-default ApProductCarousel">
                                    <h4 class="title_block"> Today Deals </h4>
                                    <div class="block_content">
                                        <div class="owl-row">
                                            <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                                            <div id="carousel-1767282219"  class="owl-carousel owl-theme owl-loading product-list-1442507709">
                                            <?php foreach($topdeals as $k => $pro ): ?>
                                                <?php if($k % 2 == 0 ): ?>
                                                    <div class="item <?= $k== 0 ? "first":"" ?> ">
                                                <?php endif; ?>
                                                        <div class="product-container product-block" itemscope itemtype="">
                                                        <div class="left-block">
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                                                            <div class="product-image-container image">
                                                                <div class="leo-more-info hidden-xs"
                                                                     data-idproduct="<?= $pro->image ?>"></div>
                                                                <a class="product_img_link" href="<?= base_url() ?>top-deals/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                   title="<?= $pro->title ?>"
                                                                   itemprop="url"> <img
                                                                        class="replace-2x img-responsive"
                                                                        src="uploads/thumbs/<?= $pro->image ?>"
                                                                        alt="<?= $pro->title ?>"
                                                                        title="<?= $pro->title ?>"
                                                                        width="250" height="250" itemprop="image"/>
                                                                    <span class="product-additional"
                                                                          data-idproduct="4"></span> </a>
                                                            </div>
                                                            <div class="box-buttons">
                                                                <!-- @file modules\appagebuilder\views\templates\front\products\add_to_cart -->
                                                                <a class="button ajax_add_to_cart_button btn btn-default" href="" rel="nofollow" title="Add to cart" data-id-product-attribute="<?= $pro->product_option_id  ?>" data-id-product="<?= $pro->id ?>" data-minimal_quantity="1"> <i class="fa fa-shopping-cart"></i> </a>

                                                                <!-- @file modules\appagebuilder\views\templates\front\products\wishlist -->

                                                                <div class="wishlist"><a
                                                                        class="button btn addToWishlist wishlistProd_4"
                                                                        data-link="<?= $pro->id ?>" href="#"
                                                                        onclick="WishlistCart('wishlist_block_list', 'add', '<?= $pro->id ?>', false, <?= $pro->product_option_id  ?>); return false;"
                                                                        title="Add to my wishlist"> <span><i
                                                                                class="fa fa-heart-o"></i></span> </a>
                                                                </div>

                                                                <!-- @file modules\appagebuilder\views\templates\front\products\compare -->

                                                                <a class="add_to_compare compare" href=""
                                                                   data-id-product="<?= $pro->id ?>" title="Add to compare"><span><i
                                                                            class="fa fa-refresh"></i></span></a>

                                                                <!-- @file modules\appagebuilder\views\templates\front\products\view -->
                                                                <div class="view">
                                                                    <a itemprop="url"    class="lnk_view button btn-tooltip"
                                                                                     href="<?= base_url() ?>top-deals/<?= url_title($pro->title ) ?>/<?= $pro->id ?>" title="View">
                                                                        <i   class="fa fa-search"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="product-meta">
                                                                <!-- @file modules\appagebuilder\views\templates\front\products\reviews -->


                                                                <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                                                                <h5 itemprop="name" class="name">
                                                                    <a class="product-name"  href="<?= base_url() ?>top-deals/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                       title="<?= $pro->title ?>"  itemprop="url">
                                                                        <?= $pro->title ?></a>
                                                                </h5>

                                                                <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                                                                <div class="content_price">
                                                                    <?php if($pro->discount > 0  ): ?>
                                                                        <span    class="price product-price"> <?= number_format( round( (100-$pro->discount)/100 * $pro->price ) , 2 ) ?> QAR </span>
                                                                        <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?> QAR </span>
                                                                        <span class="price-percent-reduction">-<?= round($pro->discount) ?>%</span>
                                                                    <?php else: ?>
                                                                        <span    class="price product-price"> <?= number_format($pro->price ,2) ?> QAR </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="leo-more-cdown" data-idproduct="<?= $pro->id ?>"></div>
                                                                <!-- @file modules\appagebuilder\views\templates\front\products\quick_view -->
                                                                 </div>
                                                        </div>
                                                    </div>
                                                <?php if($k % 2 == 1 ): ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                                <?= count($topdeals)%2 == 1 ? "</div>":""  ?>
                                            </div>
                                            <script type="text/javascript">
                                                $(window).load(function () {
                                                    $('#carousel-1767282219').owlCarousel({
                                                        items: 2,
                                                        itemsDesktop: [1199, 2],
                                                        itemsDesktopSmall: [979, 2],
                                                        itemsTablet: [768, 2],
                                                        itemsMobile: [479, 2],
                                                        itemsCustom: false,
                                                        singleItem: false,         // true : show only 1 item
                                                        itemsScaleUp: false,
                                                        slideSpeed: 200,  //  change speed when drag and drop a item
                                                        paginationSpeed: 800, // change speed when go next page

                                                        autoPlay: false,   // time to show each item
                                                        stopOnHover: false,
                                                        navigation: true,
                                                        navigationText: ["&lsaquo;", "&rsaquo;"],

                                                        scrollPerPage: false,

                                                        pagination: false, // show bullist
                                                        paginationNumbers: false, // show number

                                                        responsive: true,
                                                        //responsiveRefreshRate : 200,
                                                        //responsiveBaseWidth : window,

                                                        //baseClass : "owl-carousel",
                                                        //theme : "owl-theme",

                                                        lazyLoad: false,
                                                        lazyFollow: false,  // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                                        lazyEffect: "fade",

                                                        autoHeight: false,

                                                        //jsonPath : false,
                                                        //jsonSuccess : false,

                                                        //dragBeforeAnimFinish
                                                        mouseDrag: true,
                                                        touchDrag: true,

                                                        addClassActive: true,
                                                        //transitionStyle : "owl_transitionStyle",

                                                        //beforeUpdate : false,
                                                        //afterUpdate : false,
                                                        //beforeInit : false,
                                                        afterInit: OwlLoaded,
                                                        //beforeMove : false,
                                                        //afterMove : false,
                                                        afterAction: SetOwlCarouselFirstLast,
                                                        //startDragging : false,
                                                        //afterLazyLoad: false


                                                    });
                                                });
                                                function OwlLoaded(el) {
                                                    el.removeClass('owl-loading').addClass('owl-loaded');
                                                }
                                                ;

                                                function SetOwlCarouselFirstLast(el) {
                                                    el.find(".owl-item").removeClass("first");
                                                    el.find(".owl-item.active").first().addClass("first");

                                                    el.find(".owl-item").removeClass("last");
                                                    el.find(".owl-item.active").last().addClass("last");
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                            <div
                                class="hidden-md hidden-sm hidden-xs hidden-sp col-lg-3 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                                >
                                <!-- @file modules\appagebuilder\views\templates\hook\ApProductList -->
                                <div class="block toplist-product view-product-special panel-default ApProductList">
                                    <input type="hidden" class="apconfig"
                                           value='{"form_id":"form_23602028178046475","class":"toplist-product view-product-special panel-default ApProductList","select_by_product_id":"1","category_type":"all","product_type":"best_sellers","product_id":"1,2,3,4","order_way":"asc","order_by":"position","columns":"1","nb_products":"10","profile":"plist1442508533","use_showmore":"1","title":"Popular Products","rtl":"0","page_number":"1","get_total":false}'/>
                                    <h4 class="title_block"> Popular Products </h4>
                                    <!-- Products list -->
                                    <div class="block_content">
                                        <ul class="product_list grid row product-list-1442508533">
                                            <?php foreach($popular as $k => $pro ): ?>
                                                <li class="ajax_block_product product_block col-md-12 col-xs-12 <?=  $k == 0 ? "first_item" : count($popular) == ($k+1)? "last_item" :"" ?> ">
                                                    <div class="product-container product-block" itemscope
                                                         itemtype="http://schema.org/Product">
                                                        <div class="left-block">
                                                            <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                                                            <div class="product-image-container image">
                                                                <div class="leo-more-info hidden-xs"
                                                                     data-idproduct="<?= $pro->image ?>"></div>
                                                                <a class="product_img_link" href="<?= base_url() ?>popular-products/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                   title="<?= $pro->title ?>"
                                                                   itemprop="url"> <img
                                                                        class="replace-2x img-responsive"
                                                                        src="uploads/thumbs/<?= $pro->image ?>"
                                                                        alt="<?= $pro->title ?>"
                                                                        title="<?= $pro->title ?>"
                                                                        width="250" height="250" itemprop="image"/>
                                                                    <span class="product-additional"
                                                                          data-idproduct="4"></span> </a>
                                                            </div>
                                                        </div>
                                                        <div class="right-block">
                                                            <div class="product-meta">
                                                                <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                                                                <h5 itemprop="name" class="name">
                                                                    <a class="product-name"  href="<?= base_url() ?>popular-products/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                       title="<?= $pro->title ?>"  itemprop="url">
                                                                        <?= $pro->title ?></a>
                                                                </h5>
                                                                <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                                                                <div class="content_price">
                                                                    <?php if($pro->discount > 0  ): ?>
                                                                        <span    class="price product-price"> <?= number_format( round(( (100-$pro->discount)/100 * $pro->price )) , 2 ) ?> QAR </span>
                                                                        <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?> QAR  </span>
                                                                        <span class="price-percent-reduction">-<?=round($pro->discount)  ?>%</span>
                                                                    <?php else: ?>
                                                                        <span    class="price product-price"> <?= number_format($pro->price ,2) ?> QAR </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                    <!-- End Products list -->

                                </div>
                            </div>
                        </div>

                        <?php $i =0 ; $bc = count($banners); ?>
                        <?php foreach($category as $ck => $cat ): ?>
                            <?php  if($ck % 2 ==  0  && $bc > $i  ):   ?>
                                <div class="row ApRow "  style="">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn " >
                                        <div id="image-form_37973395597485925" class="block effect ApImage">
                                            <a href="<?= $banners[$i]->title ?>">
                                                <img  src="uploads/<?= $banners[$i]->image ?>" class="img-responsive "    title=""   alt=""   style=" width:auto; height:auto"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++;  endif; ?>
                            <?php if( count( $cat->pro['products']  ) == 0  ) continue; ?>
                            <div class="wrapper">
                                <div class="panel-default panel-default1">
                                    <div class="row tabs-<?= url_title($cat->title) ?> ApRow has-bg bg-boxed"
                                         data-bg=" no-repeat" style="background: no-repeat;">
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                        <div  class="categorieslink col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "   >
                                            <h4 class="title_block"><?= $cat->title ?></h4>
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApCategoryImage -->
                                            <div class="widget-category_image block">
                                                <div class="block_content">
                                                    <?php foreach($cat->sub as $s ): ?>
                                                        <ul class="level0">
                                                            <li class="cate_<?= $s->id ?>">
                                                                <a href="<?= base_url()?>shop/<?= url_title($cat->title) ?>/<?= $cat->id ?>/<?= url_title($s->title) ?>/<?= $s->id ?>">
                                                                    <span class="cate_content"> <span  class="cover-img"> </span> <span><?= $s->title ?></span> </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    <?php endforeach; ?>

                                                    <div id="view_all_wapper_categories-image-<?= $cat->id ?>"
                                                         style="display:none"><span class="view_all"><a
                                                                href="javascript:void(0)">View all</a></span></div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">


                                                jQuery(document).ready(function () {
                                                    $(".view_all_wapper").hide();
                                                    var limit = 5;
                                                    var level = 1 - 1;
                                                    $("ul.ul-categories-image-<?= $cat->id ?>, ul.ul-categories-image-<?= $cat->id ?> ul").each(function () {
                                                        var element = $(this).find(">li").length;
                                                        var count = 0;
                                                        $(this).find(">li").each(function () {
                                                            count = count + 1;
                                                            if (count > limit) {
                                                                // $(this).remove();
                                                                $(this).hide();
                                                            }
                                                        });
                                                        if (element > limit) {
                                                            view = $(".view_all", "#view_all_wapper_categories-image-<?= $cat->id ?>").clone(1);
                                                            // view.appendTo($(this).find("ul.level" + level));
                                                            view.appendTo($(this));
                                                            var href = $(this).closest("li").find('a:first-child').attr('href');
                                                            $(view).attr("href", href);
                                                        }
                                                    })
                                                });

                                            </script>
                                        </div>
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                        <div  class="border-right hidden-md hidden-sm hidden-xs hidden-sp col-lg-4 col-md-6 col-sm-12 col-xs-12 col-sp-12 ApColumn "   >

                                            <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                            <div id="image-form_4731874348473778" class="block effect-overlay ApImage">
                                                <a  href="<?= base_url()?>shop/<?= url_title($cat->title) ?>/<?= $cat->id ?>">
                                                    <img src="uploads/<?= $cat->image ?>" class="img-responsive "     title="<?= $cat->title ?>"  alt="<?= $cat->title ?>"  style=" width:auto; height:auto"/>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "     >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                                            <div class="block products_block exclusive appagebuilder productviewlist ApProductCarousel">
                                                <div class="block_content">
                                                    <div class="owl-row">
                                                        <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                                                        <div id="carousel-<?= $cat->id ?>"
                                                             class="owl-carousel owl-theme owl-loading product-list-1442492182">
                                                            <?php foreach($cat->pro['products'] as $k => $pro ): ?>
                                                                <?php if($k % 2 == 0 ): ?>
                                                                    <div class="item   ">
                                                                <?php endif; ?>
                                                                <div class="product-container product-block" itemscope itemtype="">
                                                                    <div class="left-block">
                                                                        <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                                                                        <div class="product-image-container image">
                                                                            <div class="leo-more-info hidden-xs"
                                                                                 data-idproduct="<?= $pro->image ?>"></div>
                                                                            <a class="product_img_link" href="<?= base_url() ?>product_detail/<?= url_title($cat->title ) ?>/<?= $cat->id ?>/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                               title="<?= $pro->title ?>"
                                                                               itemprop="url"> <img
                                                                                    class="replace-2x img-responsive"
                                                                                    src="uploads/thumbs/<?= $pro->image ?>"
                                                                                    alt="<?= $pro->title ?>"
                                                                                    title="<?= $pro->title ?>"
                                                                                    width="250" height="250" itemprop="image"/>
                                                                    <span class="product-additional"
                                                                          data-idproduct="4"></span> </a>
                                                                        </div>
                                                                        <div class="box-buttons">
                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\add_to_cart -->
                                                                            <a class="button ajax_add_to_cart_button btn btn-default" href="" rel="nofollow" title="Add to cart" data-id-product-attribute="<?= $pro->product_option_id  ?>" data-id-product="<?= $pro->id ?>" data-minimal_quantity="1"> <i class="fa fa-shopping-cart"></i> </a>


                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\wishlist -->

                                                                            <div class="wishlist"><a
                                                                                    class="button btn addToWishlist wishlistProd_4"
                                                                                    data-link="<?= $pro->id ?>" href="#"
                                                                                    onclick="WishlistCart('wishlist_block_list', 'add', '<?= $pro->id ?>', false, 1); return false;"
                                                                                    title="Add to my wishlist"> <span><i
                                                                                            class="fa fa-heart-o"></i></span> </a>
                                                                            </div>

                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\compare -->

                                                                            <a class="add_to_compare compare" href=""
                                                                               data-id-product="<?= $pro->id ?>" title="Add to compare"><span><i
                                                                                        class="fa fa-refresh"></i></span></a>

                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\view -->
                                                                            <div class="view">
                                                                                <a itemprop="url"    class="lnk_view button btn-tooltip"
                                                                                   href="<?= base_url() ?>product_detail/<?= url_title($cat->title ) ?>/<?= $cat->id ?>/<?= url_title($pro->title ) ?>/<?= $pro->id ?>" title="View">
                                                                                    <i   class="fa fa-search"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <div class="product-meta">
                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\reviews -->
                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\name -->
                                                                            <h5 itemprop="name" class="name">
                                                                                <a class="product-name"  href="<?= base_url() ?>product_detail/<?= url_title($cat->title ) ?>/<?= $cat->id ?>/<?= url_title($pro->title ) ?>/<?= $pro->id ?>"
                                                                                   title="<?= $pro->title ?>"  itemprop="url">
                                                                                    <?= $pro->title ?></a>
                                                                            </h5>

                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\price -->
                                                                            <div class="content_price">
                                                                                <?php if($pro->discount > 0  ): ?>
                                                                                    <span    class="price product-price"> <?= number_format( round(( (100-$pro->discount)/100 * $pro->price )) , 2 ) ?> QAR </span>
                                                                                    <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?> QAR  </span>
                                                                                    <span class="price-percent-reduction">-<?= round($pro->discount)  ?>%</span>
                                                                                <?php else: ?>
                                                                                    <span    class="price product-price"> <?= number_format($pro->price ,2) ?> QAR </span>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <div class="leo-more-cdown" data-idproduct="<?= $pro->id ?>"></div>
                                                                            <!-- @file modules\appagebuilder\views\templates\front\products\quick_view -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php if($k % 2 == 1 ): ?>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <script type="text/javascript">
                                                            $(window).load(function () {
                                                                $('#carousel-<?= $cat->id ?>').owlCarousel({
                                                                    items: 2,
                                                                    itemsDesktop: [1199, 2],
                                                                    itemsDesktopSmall: [979, 2],
                                                                    itemsTablet: [768, 2],
                                                                    itemsMobile: [479, 1],
                                                                    itemsCustom: false,
                                                                    singleItem: false,         // true : show only 1 item
                                                                    itemsScaleUp: false,
                                                                    slideSpeed: 200,  //  change speed when drag and drop a item
                                                                    paginationSpeed: 800, // change speed when go next page

                                                                    autoPlay: false,   // time to show each item
                                                                    stopOnHover: false,
                                                                    navigation: true,
                                                                    navigationText: ["&lsaquo;", "&rsaquo;"],

                                                                    scrollPerPage: false,

                                                                    pagination: false, // show bullist
                                                                    paginationNumbers: false, // show number

                                                                    responsive: true,
                                                                    //responsiveRefreshRate : 200,
                                                                    //responsiveBaseWidth : window,

                                                                    //baseClass : "owl-carousel",
                                                                    //theme : "owl-theme",

                                                                    lazyLoad: false,
                                                                    lazyFollow: false,  // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                                                    lazyEffect: "fade",

                                                                    autoHeight: false,

                                                                    //jsonPath : false,
                                                                    //jsonSuccess : false,

                                                                    //dragBeforeAnimFinish
                                                                    mouseDrag: true,
                                                                    touchDrag: true,

                                                                    addClassActive: true,
                                                                    //transitionStyle : "owl_transitionStyle",

                                                                    //beforeUpdate : false,
                                                                    //afterUpdate : false,
                                                                    //beforeInit : false,
                                                                    afterInit: OwlLoaded,
                                                                    //beforeMove : false,
                                                                    //afterMove : false,
                                                                    afterAction: SetOwlCarouselFirstLast,
                                                                    //startDragging : false,
                                                                    //afterLazyLoad: false


                                                                });
                                                            });
                                                            function OwlLoaded(el) {
                                                                el.removeClass('owl-loading').addClass('owl-loaded');
                                                            }
                                                            ;

                                                            function SetOwlCarouselFirstLast(el) {
                                                                el.find(".owl-item").removeClass("first");
                                                                el.find(".owl-item.active").first().addClass("first");

                                                                el.find(".owl-item").removeClass("last");
                                                                el.find(".owl-item.active").last().addClass("last");
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <?php // best seller  ?>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
                        <?php  if(  $bc > $i  ):   ?>
                        <div class="row ApRow "  style="">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn " >
                                <div id="image-form_37973395597485925" class="block effect ApImage">
                                    <a href="<?= $banners[$i]->title ?>">
                                        <img  src="uploads/<?= $banners[$i]->image ?>" class="img-responsive "    title=""   alt=""   style=" width:auto; height:auto"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php $i++;  endif; ?>
                        
                        
                        
                        

                        <div class="wrapper">
                            <div class="panel-default">
                                <div class="row ApRow has-bg bg-boxed"
                                     data-bg=" no-repeat" style="background: no-repeat;">

                                    <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                                        >
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->
                                        <div class="block latest-blogs exclusive appagebuilder"
                                             id="blog-form_1411843741184405">
                                            <h4 class="title_block"> <a href="<?= base_url('Brands-and-Suppliers') ?>">Brands and Suppliers</a> </h4>
                                            <div class="block_content">
                                                <!-- @file modules\appagebuilder\views\templates\hook\BlogOwlCarousel -->
                                                <div class="owl-row">
                                                    <div id="carousel-3198440653" class="owl-carousel owl-theme">
                                                        <?php foreach($blogs as $blog ): ?>
                                                            <div class="item">
                                                                <div class="blog-container" itemscope
                                                                     itemtype="http://schema.org/Blog">
                                                                    <div class="left-block">
                                                                        <div class="blog-image-container"><a
                                                                                class="blog_img_link" href=""
                                                                                title="<?= $blog->title ?>"
                                                                                itemprop="url"> <img
                                                                                    class="replace-2x img-responsive"
                                                                                    src="uploads/<?= $blog->image ?>"
                                                                                    alt="<?= $blog->title ?>"
                                                                                    title="<?= $blog->title ?>"
                                                                                    width="357" height="179"
                                                                                    itemprop="image"/> </a></div>
                                                                    </div>
                                                                    <div class="right-block">
                                                                        <h5 class="blog-title"><a href="<?= base_url() ?>Brands-and-Suppliers/<?= url_title( $blog->title) ?>/<?= $blog->id ?>"
                                                                                                  title="<?= $blog->title ?>"><?= $blog->title ?> </a>
                                                                        </h5>

                                                                        <div class="blog-desc" itemprop="description">
                                                                            <?= character_limiter($blog->short , 100) ?>
                                                                        </div>
                                                                        <div class="blog-meta"> <span class="created"><span
                                                                                    class="fa fa-minus"></span>
                                    </span> <span class="nbcomment"> <span class="fa fa-comments"></span> 0 </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('#carousel-3198440653').owlCarousel({
                                                            items: 3,
                                                            itemsDesktop: [1199, 3],
                                                            itemsDesktopSmall: [979, 3],
                                                            itemsTablet: [768, 2],
                                                            itemsMobile: [479, 1],
                                                            itemsCustom: false,
                                                            singleItem: false,         // true : show only 1 item
                                                            itemsScaleUp: false,
                                                            slideSpeed: 200,  //  change speed when drag and drop a item
                                                            paginationSpeed: 800, // change speed when go next page

                                                            autoPlay: true,   // time to show each item
                                                            stopOnHover: false,
                                                            navigation: true,
                                                            navigationText: ["&lsaquo;", "&rsaquo;"],

                                                            scrollPerPage: false,

                                                            pagination: false, // show bullist
                                                            paginationNumbers: false, // show number

                                                            responsive: true,
                                                            //responsiveRefreshRate : 200,
                                                            //responsiveBaseWidth : window,

                                                            //baseClass : "owl-carousel",
                                                            //theme : "owl-theme",

                                                            lazyLoad: false,
                                                            lazyFollow: false,  // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                                            lazyEffect: "fade",

                                                            autoHeight: false,

                                                            //jsonPath : false,
                                                            //jsonSuccess : false,

                                                            //dragBeforeAnimFinish
                                                            mouseDrag: true,
                                                            touchDrag: true,

                                                            addClassActive: true,
                                                            //transitionStyle : "owl_transitionStyle",

                                                            //beforeUpdate : false,
                                                            //afterUpdate : false,
                                                            //beforeInit : false,
                                                            //afterInit : false,
                                                            //beforeMove : false,
                                                            //afterMove : false,
                                                            afterAction: SetOwlCarouselFirstLast,
                                                            //startDragging : false,
                                                            //afterLazyLoad: false


                                                        });
                                                    });

                                                    function SetOwlCarouselFirstLast(el) {
                                                        el.find(".owl-item").removeClass("first");
                                                        el.find(".owl-item.active").first().addClass("first");

                                                        el.find(".owl-item").removeClass("last");
                                                        el.find(".owl-item.active").last().addClass("last");
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  if(  $bc > $i  ):   ?>
                        <div class="row ApRow "  style="">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn " >
                                <div id="image-form_37973395597485925" class="block effect ApImage">
                                    <a href="<?= $banners[$i]->title ?>">
                                        <img  src="uploads/<?= $banners[$i]->image ?>" class="img-responsive "    title=""   alt=""   style=" width:auto; height:auto"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php $i++;  endif; ?>

                        <div class="wrapper">
                            <div class="panel-default panel-default2">
                                <div class="row ApRow has-bg bg-boxed"
                                     data-bg=" no-repeat" style="background: no-repeat;">

                                  
                                    
                                    <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                    <div class="box-service col-lg-6 col-md-12 col-sm-12 col-xs-12 ApColumn">
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                        <div id="image-form_5046872515392673" class="media block text-center ApImage">
                                            <div class="fbox-icon"><a href=""> <img src="images/delivery.png" class=""
                                                                                    title=""
                                                                                    alt=""
                                                                                    style=" width:auto; 
			height:auto"/> </a></div>
                                            <div class='media-body'>
                                                <div class="fbox-body">
                                                    <h4>Cash on Delivery</h4>

                                                    <p>We provide cash on delivery all over Doha which is convenient and accessible payment option.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-service col-lg-6 col-md-12 col-sm-12 col-xs-12 ApColumn "
                                        >
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                        <div id="image-form_9082735895813376" class="media block text-center ApImage">
                                            <div class="fbox-icon"><a href=""> <img src="images/confiden.png" class=""
                                                                                    title=""
                                                                                    alt=""
                                                                                    style=" width:auto; 
			height:auto"/> </a></div>
                                            <div class='media-body'>
                                                <div class="fbox-body">
                                                    <h4>Shop with Confidence</h4>

                                                    <p>100% Genuine Products. Quality is remembered long after the price is forgotten.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-service no-border-right col-lg-6 col-md-12 col-sm-12 col-xs-12 ApColumn "
                                        >
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                        <div id="image-form_19136784460356142" class="media block text-center ApImage">
                                            <div class="fbox-icon"><a href=""> <img src="images/help.png" class=""
                                                                                    title=""
                                                                                    alt=""
                                                                                    style=" width:auto; 
			height:auto"/> </a></div>
                                            <div class='media-body'>
                                                <div class="fbox-body">
                                                    <h4>Help Center Content</h4>

                                                    <p>For more queries & info, please contact us by email or call us from 10.00am to 10.00pm.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-service no-border-right col-lg-6 col-md-12 col-sm-12 col-xs-12 ApColumn "
                                        >
                                        <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                                        <div id="image-form_19136784460356142" class="media block text-center ApImage">
                                            <div class="fbox-icon"><a href=""> <img src="images/greate-value.png" class=""
                                                                                    title=""
                                                                                    alt=""
                                                                                    style=" width:auto; 
			height:auto"/> </a></div>
                                            <div class='media-body'>
                                                <div class="fbox-body">
                                                    <h4>Greate Value</h4>

                                                    <p>We offer competitive prices and daily deals a great place to shop</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    
                                    <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                    
                                  
                                    
                                    <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                                    
                                    
                                    <div class="box-service no-border-right col-lg-5 col-md-12 col-sm-12 col-xs-12 ApColumn "
                                        >
                                        <div class="facebook-box">
                                             <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/dohabestbuy" data-tabs="timeline" data-width="712" data-height="364" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dohabestbuy" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dohabestbuy" target="_blank">dohabestbuy.com</a></blockquote></div>
                                        
                                        </div>
                                  
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    <!-- Footer -->

    <?php $this->load->view('inc/footer') ?>
</section>
<!-- #page -->
<p id="back-top"><a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a></p>

</body>
</html>