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
  .placard {
    text-align: center;
    min-height: 346px;
}
.placard {
    background-color: #FFF;
    border-radius: 3px;
    padding: .5357142857rem;
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    position: relative;
	box-shadow: 0 0 4px rgba(0,0,0,.2);
}
.bottom-spacing {
    margin-bottom: 4.0714285714rem;
}
.top-spacing {
    margin-top: 6.0714285714rem;
}
.top-spacing1 {
    margin-top: 2.0714285714rem;
}
h1{
	text-transform: capitalize;
}

  .cms-block p{
	  text-align: justify;
      text-justify: inter-word;
	            }

  </style>
</head>   
<body id="authentication" class="authentication hide-left-column hide-right-column lang_en  fullwidth header-default">
<section id="page" data-column="col-xs-12 col-sm-6 col-md-4" data-type="grid"> 
  <!-- Header -->
  <?php $this->load->view('inc/header'); ?>
  <div id="breadcrumb" class="clearfix">
    <div class="container"> 
      
      <!-- Breadcrumb -->
      <div class="breadcrumb clearfix"> <a class="home" href="" title="Return to Home"><i class="fa fa-home"></i></a> <span class="navigation-pipe">&gt;</span> Returns </div>
      <!-- /Breadcrumb --> 
      
    </div>
  </div>
  <!-- Content -->
  <section id="columns" class="columns-container">
    <div class="container">
      <div class="row"> 
        
        <!-- Center -->
        <section id="center_column" class="col-md-12">

          <div class="rte">
          
            <div class="row">
            
            <!--<div class="col-xs-12 col-sm-12 bottom-spacing">
            <div class="col-md-3">
            <div class="placard">
									<img src="<?= base_url() ?>images/img1.png" class="bottom-spacing top-spacing">
									<h5>15 Days Returns</h5>
									<p>You have 15 days to make a refund request after your order has been delivered. </p>
								</div>
            
            </div>
            <div class="col-md-3">
            <div class="placard">
									<img src="<?= base_url() ?>images/img2.png" class="bottom-spacing top-spacing">
									<h5>Easy and Free Returns</h5>
									<p>You can return any product you have bought, and we will take care of the return shipping costs. </p>
								</div>
            
            </div>
            <div class="col-md-3">
            <div class="placard">
									<img src="<?= base_url() ?>images/img3.png" class="bottom-spacing top-spacing">
									<h5>Full Refunds</h5>
									<p>If the item you have received is damaged, defective or not as described on the website, you will receive a full refund along with any shipping fees applied.</p>
								</div>
            
            </div>
            <div class="col-md-3">
            <div class="placard">
									<img src="<?= base_url() ?>images/img4.png" class="bottom-spacing top-spacing">
									<h5>Authenticity Guarantee</h5>
									<p>If your purchase is found to be counterfeit, you will receive a full refund along with any shipping fees payed.</p>
								</div>
            </div>
            </div>-->
            
           
             <h1 class="page-heading bottom-indent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How does Return Policy Work?</h1>
             <div class="col-xs-12 col-sm-12">
             <div class="top-spacing hide-for-small-only"><img src="<?= base_url() ?>images/policy-work1.png" width="100%"></div>
            <div class="col-md-3">
            <center>
									
									<h5 class="top-spacing1"><span class="hide-for-medium-up">1- </span>Initiate A Return</h5>
									<p class="top-spacing1">Call our customer support number <br/><b>+974 - 6616 6329</b> or return via My Orders page. </p>
								</center>
            </div>
            <div class="col-md-3">
            <center>
									
									<h5 class="top-spacing1"><span class="hide-for-medium-up">2- </span>Schedule Pick-up</h5>
									<p class="top-spacing1">A pick-up will be scheduled by one of our courier services. </p>
								</center>
            </div>
            <div class="col-md-3">
            <center>
									
									<h5 class="top-spacing1"><span class="hide-for-medium-up">3- </span>Return The Item</h5>
									<p class="top-spacing1">Pack the item in its original state and packaging. Hand over the package to the courier representative. </p>
								</center>
            </div>
            <div class="col-md-3">
            
            <center>
									
									<h5 class="top-spacing1"><span class="hide-for-medium-up">4- </span>Refund Processed</h5>
									<p class="top-spacing1">Once we receive your returned item, we will inspect it and process your refund.</p>
								</center>
            </div>
            </div>
            
            
            </div>
            <div class="row top-spacing ">
            
            
            
            
            
              <div class="col-xs-12 col-sm-12">
              
              
              
              
              
              
                <div class="cms-block">

                  <p>If I don’t want to receive my order what shall I do?</p>
                  <p>You can cancel your order within 12 hours or email confirmation within mentioned periods your order has been shipped from our warehouse. If you fail to cancel then you have to pay your shipping charges for respective orders.</p>
                  <p>What if my items I received is damaged on delivery?</p>
                  <p>At dohabestbuy.com,  we always take extra care in packing your items.</p>
                  <p>Dohabestbuy.com does NOT accept returns. All items sold on our site are very discounted which is why we are unable to accept returns. If you receive a defective item or if an item arrives DOA you must contact dohabestbuy.com within 03 days after receiving the item. We will replace the item for you. </p>
                  <p>If the item is no longer in stock you will receive a full refund. All returns are subject to a Return Merchandise Authorization from dohabestbuy.com. A return merchandise authorization number or form can be requested by emailing <strong>support@dohabestbuy.com</strong>. All items must be returned in the original box with all packing materials and accessories. Any returns that are received not in original box, missing packing materials and or accessories may be refused or subject to a restocking fee. ANY SIGNS OF WEAR, TAMPERED ITEM, REMOVAL OF PARTS, WILL RESULT IN REFUSAL OF YOUR RETURN. A package that is refused by the customer or undeliverable, shipping fees will be deducted.
                  </p>




                </div>
              </div>


            </div>
          </div>
          <br />

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