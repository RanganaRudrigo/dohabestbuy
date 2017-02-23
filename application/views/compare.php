<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
<head>
<meta charset="utf-8" />
<title>Doha Best Buy</title>
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
<?php $this->load->view('inc/head_js') ?>
  <style>
    table#product_comparison .remove a {
      font-size: 23px;
      line-height: 23px;
      color: #c0c0c0;
    }
    table#product_comparison .remove {
      text-align: right;
      padding: 0 0 15px 0;
    }
    .socialsharing_product button {
      border: none;

    }
    table#product_comparison tbody tr td.comparison_infos {
      text-align: center;
      background: transparent;
    }
    table#product_comparison .comparison_product_infos {
      margin-top: 15px;
    }
    table#product_comparison .product-rating {
      width: 90px;
      margin: 0 auto;
      overflow: hidden;
    }
    .btn {

      text-transform: uppercase;

    }
  </style>
</head>
<body id="order" class="order hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid"> 
  <!-- Header -->
  <?php $this->load->view('inc/header') ?>
  <div id="breadcrumb" class="clearfix">
    <div class="container"> 
      
      <!-- Breadcrumb -->
      <div class="breadcrumb clearfix"> <a class="home" href="<?= base_url() ?>" title="Return to Home"><i class="fa fa-home"></i></a>
        <span class="navigation-pipe">&gt;</span> compare </div>
      <!-- /Breadcrumb --> 
      
    </div>
  </div>
  <!-- Content -->
  <section id="columns" class="columns-container">
    <div class="container">
      <div class="row"> 
        
        <!-- Center -->
        <section id="center_column" class="col-md-12">

          <h1 class="page-heading">Product Comparison</h1>

          <div class="products_block table-responsive">
            <table id="product_comparison" class="table table-bordered">
              <tbody>
              <tr>
                <td class="td_empty compare_extra_information">
                  <div id="social-share-compare">
                    <p>Share this comparison with your friends:</p>

                    <p class="socialsharing_product">
                      <button data-type="twitter" type="button"
                              class="btn btn-default btn-block btn-twitter social-sharing">
                        <i class="fa fa-twitter"></i> Tweet
                      </button>
                      <button data-type="facebook" type="button"
                              class="btn btn-default btn-block btn-facebook social-sharing">
                        <i class="fa fa-facebook"></i> Share
                      </button>
                      <button data-type="google-plus" type="button"
                              class="btn btn-default btn-block btn-google-plus social-sharing">
                        <i class="fa fa-google-plus"></i> Google+
                      </button>
                      <button data-type="pinterest" type="button"
                              class="btn btn-default btn-block btn-pinterest social-sharing">
                        <i class="fa fa-pinterest"></i> Pinterest
                      </button>
                    </p>
                  </div>

                </td>
                <?php 
				//p($this->compare->contents());
				foreach($this->compare->contents() as $item ): ?>
                    <?php
                  $pro = $this->pro->getBy(array('id'=> $item['id'] ) , 1 , "short,discount,price" ) ;
                   $options = $this->pro->getStock($item['id']); 
			   if( !empty($options['all']) ) {
					$pro->price = $options['all'][0]->price ;
					$pro->qty = $options['all'][0]->qty ;
				}
                  ?>
                  <td class="ajax_block_product comparison_infos product-block product-<?= $item['id'] ?>">
                    <div class="remove">
                      <a class="" href="<?= base_url()."cart/remove_to_compare/?rowid=" . $item['rowid']?>&back=<?= current_url() ?>" title="Remove" data-id-product="<?= $item['id'] ?>">
                        <i class="fa fa-trash-o"></i>
                      </a>
                    </div>
                    <div class="left-block">
                      <div class="product-image-container image">
                        <a class="product_image" href="<?= base_url() ?>product_detail/<?= url_title($item['name'] )?>/<?= $item['id'] ?>" title="<?= $item['name'] ?>">
                          <img class="img-responsive"
                               src="<?= base_url() ?>uploads/thumbs/<?= $item['options']['image'] ?>"
                               alt="<?= $item['name'] ?>">
                        </a>

                      </div>
                      <!-- end product-image-block -->
                    </div>
                    <div class="right-block">
                      <div class="product-meta">
                        <h5 class="name">
                          <a class="product-name" href="<?= base_url() ?>product_detail/<?= url_title($item['name'] )?>/<?= $item['id'] ?>">
                            <?= $item['name'] ?>
                          </a>
                        </h5>

                        <div class="product_desc"> <?= $pro->short ?> </div>
                        <div class="prices-container content_price">

                          <div class="prices-container content_price">
                            <?php if($pro->discount > 0  ): ?>
                              <span    class="price product-price"> <?= number_format( ( (100-$pro->discount)/100 * $pro->price ) , 2 ) ?> </span>
                              <span    class="old-price product-price">  <?= number_format($pro->price ,2) ?>  </span>
                              <span class="price-percent-reduction">-<?= $pro->discount ?>%</span>
                            <?php else: ?>
                              <span    class="price product-price"> <?= number_format($pro->price ,2) ?> </span>
                            <?php endif; ?>
                          </div>


                        </div>
                        <!-- end prices-container -->
                        <div class="clearfix">
                          <div class="button-container">
                            <a class="button ajax_add_to_cart_button btn btn-default" data-id-product-attribute="1"   data-minimal_quantity="1" data-id-product="<?= $item['id'] ?>" href=""
                               title="Add to cart">
                              <span>Add to cart</span>
                            </a>
                            <a class="button lnk_view btn btn-default" href="<?= base_url() ?>product_detail/<?= url_title($item['name'] )?>/<?= $item['id'] ?>" title="View">
                              <span>View</span>
                            </a>
                          </div>
                        </div>
                        <div class="comparison_product_infos">
                          <p class="comparison_availability_statut">
                            <span class="availability_label">Availability:</span>
									<span class="availability_value"> <?= $pro->qty >  0 ? "In stock":"Out of stock"?> 	</span>
                          </p>


                        </div>
                        <!-- end comparison_product_infos -->
                      </div>
                    </div>
                  </td>
                <?php endforeach; ?>

              </tr>


              </tbody>
            </table>
          </div>
          <!-- end products_block -->
          <ul class="footer_link">
            <li>
              <a class="button lnk_view btn btn-default" href="<?= base_url() ?>">
                <span><i class="icon-chevron-left left"></i>Continue Shopping</span>
              </a>
            </li>
          </ul>

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