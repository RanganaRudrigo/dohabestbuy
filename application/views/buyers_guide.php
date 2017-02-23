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
  .cms-block p {
	  text-align: justify;
      text-justify: inter-word;
	            }
  .buy-1 { width:100%; margin-top:14px;}
 .buy-2 { font-size:18px; font-weight:bold; margin-top:20px;}
  .cms-block ul {
	  padding-left:20px;
	
}
 .cms-block ul li {
	list-style-type: decimal;
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
      <div class="breadcrumb clearfix"> <a class="home" href="" title="Return to Home"><i class="fa fa-home"></i></a> <span class="navigation-pipe">&gt;</span>Buyer’s Guide </div>
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
		<h1 class="page-heading bottom-indent">Buyer’s Guide</h1>
<div class="row">
<div class="col-xs-12 col-sm-12">
<div class="cms-block">

<p>Buying products on dohabestbuy.com is easy. Navigation through categories, searching for specific products and product selection are simple. Wheremulti paymentoptions are supported for all of your needs. Get started by following some simple steps: </p>
<ul>
<li> <a href="#buy-page-1">Search and explore products </a></li>
<li> <a href="#buy-page-2">Learn about the product, and Add to cart</a></li>
<li> <a href="#buy-page-3">Review your shopping cart, and Sign in to checkout</a></li>
<li> <a href="#buy-page-4">Place your order</a></li>
<li> <a href="#buy-page-5">Congrats! Track your order until it's delivered to your door</a></li>
</ul>

<div class="buy-1" id="buy-page-1">
<h3><span>01.</span>	Search & Explore products</h3>
<p>Can select one category from the list and from that, choose any of the product.</p>
<img src="<?= base_url() ?>images/buy-1.png"/>
<p class="buy-2">Now, finalize the product from product list</p>
<img src="<?= base_url() ?>images/buy-2.png"/>

</div>

<div class="buy-1" id="buy-page-2">
<h3><span>02.</span>	Learn about the product, and Add to cart</h3>

<img src="<?= base_url() ?>images/buy-3.png"/>
<img src="<?= base_url() ?>images/buy-4.png"/>

</div>
<div class="buy-1" id="buy-page-3">
<h3><span>03.</span>Review your shopping cart and Sign in to checkout</h3>
<p>Review your cart and click "Proceed to checkout". Just make sure that all products you want to buy now are there in the shopping cart, and those you want to buy later, if any, are moved to "Continue Shopping".</p>

<img src="<?= base_url() ?>images/buy-5.png"/>
<p class="buy-2">If you're a registered user then just sign in to your account.</p>
<img src="<?= base_url() ?>images/buy-6.png"/>
<p class="buy-2">If you're not registered yet then simply do by filling our form</p>
<img src="<?= base_url() ?>images/buy-7.png"/>
</div>

<div class="buy-1" id="buy-page-4">
<h3><span>04.</span>	Place Your Order</h3>
<p>Provide your address details, where you would like us to deliver your order, and click "PROCESS". If Shipping Address Same as primary address just put    mark.</p>

<img src="<?= base_url() ?>images/buy-8.png"/>
<p class="buy-2">Select the payment mode By ‘Credit Card or Cash on delivery’</p>
<img src="<?= base_url() ?>images/buy-9.png"/>
<p class="buy-2">If selected methodis ‘Pay by Cash’, then appears as</p>
<img src="<?= base_url() ?>images/buy-10.png"/>
<img src="<?= base_url() ?>images/buy-11.png"/>
<p class="buy-2">If selected method is ‘Pay by Credit card’ then appears,</p>
<img src="<?= base_url() ?>images/buy-12.png"/>
<p class="buy-2">Here can choose one of the card option. If selected  VISA card then will get a link as,</p>
<img src="<?= base_url() ?>images/buy-13.png"/>
<p class="buy-2">For  Master Card, link appears as,</p>
<img src="<?= base_url() ?>images/buy-14.png"/>
<p class="buy-2">Just fill up the details for payment and  make your payment here  by online.</p>
</div>

<div class="buy-4" id="buy-page-5">
<h3><span>05.</span>Congrats! Track your order until it’s delivered to your door</h3>
<p>Wondering what happened to your order? Worry not, with dohabestbuy.com you have an option to check the progress of the shipment, so you won't lose track of your order. Just navigate to "My Orders" to check the status of your orders. Dohabestbuy.com works with trusted logistics and fulfillment partners to deliver your products to your door as fast as possible, and in the safest conditions.</p>

</div>

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