<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
<head>
    <?php $this->load->view("inc/head") ?>
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
    <?php $this->load->view("inc/head_js") ?>
    <script src="<?=base_url()?>js/validate.js" type="text/javascript" ></script>
    <script src="<?=base_url()?>js/authentication.js" type="text/javascript" ></script>
    <style>
        .sidebar .block-highlighted .title_block {
            text-transform: uppercase;
        }
        .sidebar .block-highlighted .title_block {
            color: black;
            background-color: transparent;
            border-color: #e1e1e1;
        }
        .sidebar .block .title_block {
            color: black;
            position: relative;
            text-transform: uppercase;
            font-family: "Poppins",sans-serif;
            padding: 15px;
            font-size: 19px;
            letter-spacing: 1px;
            background: transparent;
            font-weight: 900;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 0;
        }
		.blog-top { margin-top:20px;}
		#center_column .ApColumn .title_block {
    position: relative;
    padding: 19px 0px 17px;
    margin-bottom: 0;
    border-bottom: 2px solid #ccc;
}
		#center_column .ApColumn .title_block:before {
    position: absolute;
    bottom: 12px;
    content: "";
    width: 16px;
    height: 2px;
    background-color: #a130a8;
    left: 2px;
}
    </style>
</head>
<body id="authentication" class="authentication hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view("inc/header") ?>
    <div id="breadcrumb" class="clearfix">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="" title="Return to Home"><i class="fa fa-home"></i></a>
                <span class="navigation-pipe">&gt;</span> Brands and Suppliers
            </div>
            <!-- /Breadcrumb -->

        </div>
    </div>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <div class="row">
                <div   class="hidden-md hidden-sm hidden-xs hidden-sp col-lg-3 col-md-12 col-sm-12 col-xs-12 col-sp-12 sidebar "   >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApProductList -->
                    <div class="block toplist-product view-product-special panel-default ApProductList">
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
                                                            src="<?= base_url() ?>uploads/thumbs/<?= $pro->image ?>"
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
                                                            <span    class="price product-price"> <?= number_format( ( (100-$pro->discount)/100 * $pro->price ) , 2 ) ?> </span>
                                                            <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?>  </span>
                                                            <span class="price-percent-reduction">-<?= $pro->discount ?>%</span>
                                                        <?php else: ?>
                                                            <span    class="price product-price"> <?= number_format($pro->price ,2) ?> </span>
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
                <section id="center_column" class="col-md-9">

                    <div id="blogpage" class="blog-detail blog-container box">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                                        > 
                                        <div class="block latest-blogs exclusive appagebuilder"
                                             id="blog-form_1411843741184405">
                                            <h4 class="title_block"> <a href="">Brands and Suppliers</a> </h4>
                                            <div class="block_content"> 
                                                <div class="owl-row blog-top">
                                                    <div id="carousel-3198440653" class="owl-carousel owl-theme">
                                                        <?php foreach($blogs as $blog ): ?>
                                                            <div class="item col-sp-12 col-sm-6 col-md-6 col-xs-12">
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
                                                 </div>
                                        </div>
                                    </div>
                    </div>

                </section>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php $this->load->view("inc/footer") ?>
</section>
<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>

</body>
</html>