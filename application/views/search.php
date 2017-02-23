<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
<head>
    <?php $this->load->view('inc/head') ?>
    <style>
        #categories_block_left li a.current {
            color: #bf9a61;
        }
        div.scott {
            padding:3px;
            margin:3px;
            text-align:center;
            font-size:16px;
        }

        div.scott a {
            padding: 2px 5px 2px 5px;
            margin-right: 2px;
            border: 1px solid #ddd;

            text-decoration: none;
            color: #ce9634;
        }
        div.scott a:hover, div.scott a:active {
            border:1px solid #ce9634;
            color: #bf9a61;
            background-color: #ffd283;
        }
        div.scott span.current {
            padding: 2px 5px 2px 5px;
            margin-right: 2px;
            border: 1px solid #9a7337;
            font-weight: bold;
            background-color: #bf9a61;
            color: #FFF;
        }
        div.scott span.disabled {
            padding: 2px 5px 2px 5px;
            margin-right: 2px;
            border: 1px solid #f3f3f3;
            color: #ccc;
        }
    </style>
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
        var page_name = 'category';
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
    <?php $this->load->view('inc/head_js') ?>
    <script>
        bindGrid();
    </script>
    <style>
        .cat-name {
            font-weight: 700
        }
    </style>
</head>
<body id="category" class="category category-3 category-fashion-clothing show-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid">
    <!-- Header -->
    <?php $this->load->view('inc/header') ?>
    <div id="breadcrumb" class="clearfix">
        <div class="container">

            <!-- Breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home"  href="<?= base_url() ?>"     title="Return to Home"><i class="fa fa-home"></i></a>
                <?php if(isset($mainmenu) &&  $mainmenu !== $menu ): ?>
                    <span  class="navigation-pipe">&gt;</span> <a class="home"  href="<?= base_url() ?>shop/<?= url_title($mainmenu->title ) ?>/<?= $mainmenu->id ?>"   title=" "><?= $mainmenu->title ?></a>
                <?php endif; ?>
                <span  class="navigation-pipe">&gt;</span> <?= $menu->title ?>
            </div>
            <!-- /Breadcrumb -->

        </div>
    </div>
    <!-- Content -->
    <section id="columns" class="columns-container">
        <div class="container">
            <div class="row">

                <!-- Left -->
                <section id="left_column" class="column sidebar col-md-3">
                    <!-- Block categories module -->
                    <!-- Block CMS module -->
                    <div id="informations_block_left_1" class="block informations_block_left">
                        <h4 class="title_block"> <a href=""> Information </a> </h4>
                        <div class="block_content list-block">
                            <ul>
                                <li> <a href="" title="Delivery"> Delivery </a> </li>
                                <li> <a href="" title="Legal Notice"> Legal Notice </a> </li>
                                <li> <a href="" title="Terms and conditions of use"> Terms and conditions of use </a> </li>
                                <li> <a href="" title="About us"> About us </a> </li>
                                <li> <a href="" title="Secure payment"> Secure payment </a> </li>
                                <li> <a href="" title="Our stores"> Our stores </a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Block CMS module -->
                    <!-- MODULE Block new products -->
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
                                                    <a class="product_img_link" href=""
                                                       title="<?= $pro->title ?>"
                                                       itemprop="url"> <img
                                                            class="replace-2x img-responsive"
                                                            src="<?= base_url() ?>uploads/<?= $pro->image ?>"
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
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <!-- End Products list -->

                    </div>


                </section>
                <!-- Center -->
                <section id="center_column" class="col-md-9">
                    <div class="content_scene_cat">
                        <!-- Category image -->
                        <div class="content_scene_cat_bg scene_cat">
                              <div class="cat-desc">
                                <div class="rte">
                                    <?= $menu->description ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="page-heading product-listing"> Search :  <span class="cat-name"> <b><?= $this->input->get('search_query') ?></b> &nbsp; </span> </h1>
                    <span class="heading-counter">There are <?= $count ?> products.</span>
                    <div class="content_sortPagiBar clearfix">
                        <div class="sortPagiBar clearfix row">
                            <div class="col-md-10 col-sm-8 col-xs-6">
                                <div class="sort">
                                    <div class="display hidden-xs pull-left">
                                        <div id="grid"><a rel="nofollow" href="#" title="Grid"><i class="fa fa-th"></i></a></div>
                                        <div id="list"><a rel="nofollow" href="#" title="List"><i class="fa fa-list-ul"></i></a></div>
                                    </div>
                                    <!--<form id="productsSortForm" action="" class="productsSortForm form-horizontal pull-left hidden-xs">
                                        <div class="select">
                                            <label for="selectProductSort">Sort by</label>
                                            <select id="selectProductSort" class="selectProductSort form-control">
                                                <option value="position:asc" selected="selected">--</option>
                                                <option value="price:asc">Price: Lowest first</option>
                                                <option value="price:desc">Price: Highest first</option>
                                                <option value="name:asc">Product Name: A to Z</option>
                                                <option value="name:desc">Product Name: Z to A</option>
                                                <option value="quantity:desc">In stock</option>
                                                <option value="reference:asc">Reference: Lowest first</option>
                                                <option value="reference:desc">Reference: Highest first</option>
                                            </select>
                                        </div>
                                    </form>-->
                                    <!-- /Sort products -->

                                    <!-- nbr product/page -->
                                    <!-- /nbr product/page -->

                                </div>
                            </div>
                            <div class="product-compare col-md-2 col-sm-4 col-xs-6">
                                <form method="post" action="" class="compare-form">
                                    <button type="submit" class="btn btn-outline button button-medium bt_compare bt_compare" disabled="disabled"> <span>Compare (<strong class="total-compare-val"><?= count($this->compare->contents()) ?></strong>)</span> </button>
                                    <input type="hidden" name="compare_product_count" class="compare_product_count" value="<?= count($this->compare->contents()) ?>" />
                                    <input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Products list -->
                    <div  class="product_list grid row no-margin  product-list-1442492182">
                        <?php foreach($products as $pro ): ?>
                            <div class="ajax_block_product col-sp-12 col-xs-12 col-sm-6 col-md-4   ">
                                <div class="product-container product-block" itemscope itemtype="">
                                    <div class="left-block">
                                        <!-- @file modules\appagebuilder\views\templates\front\products\image_container -->
                                        <div class="product-image-container image">
                                            <div class="leo-more-info hidden-xs" data-idproduct="<?= $pro->id ?>"></div>
                                            <a class="product_img_link" href="<?= base_url()."product_detail/".$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title="" itemprop="url">
                                                <img class="replace-2x img-responsive" src="<?= base_url() ?>uploads/thumbs/<?= $pro->image ?>" alt="" title=""  width="250" height="250" itemprop="image" />
                                                <span class="product-additional" data-idproduct="1"></span>
                                            </a>
                                        </div>
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
                                            <h5 itemprop="name" class="name"> <a class="product-name" href="<?= base_url().$link ?>/<?= url_title($pro->title)  ?>/<?= $pro->id ?>" title=" <?= $pro->title ?> " itemprop="url" > <?= $pro->title ?> </a> </h5>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\description -->
                                            <p class="product-desc" itemprop="description">  <?= character_limiter($pro->short , 100) ?>  </p>

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
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="content_sortPagiBar">
                        <div class="bottom-pagination-content clearfix row">
                            <div class="col-md-10 col-sm-8 col-xs-6">

                                <!-- Pagination -->
                                <div id="pagination_bottom" class="pagination clearfix">
                                    <div class="scott">
                                        <?php if(ceil($count /  $limit ) > 1 )  for ($i = 0; $i < ceil($count /  $limit ); $i++): ?>
                                            <?php if ($i + 1 == $this->input->get('page_id') || (!$this->input->get('page_id') && $i == 0)): ?>
                                                <span class="current"><?= $i + 1 ?></span>
                                            <?php else : ?>
                                                <a href="<?= current_url() ?>?page_id=<?= $i + 1 ?>"><?= $i + 1 ?></a>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div class="product-count pull-right"> Showing 1 - <?= count($products) ?> of <?= $count ?> items </div>
                                <!-- /Pagination -->

                            </div>
                            <div class="product-compare col-md-2 col-sm-4 col-xs-6">
                                <form method="post" action="http://demo4leotheme.com/prestashop/leo_emarket_demo/en/products-comparison" class="compare-form">
                                    <button type="submit" class="btn btn-outline button button-medium bt_compare bt_compare_bottom" disabled="disabled"> <span>Compare (<strong class="total-compare-val">0</strong>)</span> </button>
                                    <input type="hidden" name="compare_product_count" class="compare_product_count" value="0" />
                                    <input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
                                </form>
                            </div>
                        </div>
                    </div>
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