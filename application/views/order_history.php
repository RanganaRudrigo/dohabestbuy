<!DOCTYPE HTML>
<html lang="en-us"  class="default" >
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
  <?php $this->load->view('inc/head_js') ?>
<style>
#order-detail-content table label {
	font-weight: 400;
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
        <span class="navigation-pipe">&gt;</span> Order History </div>
      <!-- /Breadcrumb --> 
      
    </div>
  </div>
  <!-- Content -->
  <section id="columns" class="columns-container">
    <div class="container">
      <div class="row"> 
        
        <!-- Center -->
        <section id="center_column" class="col-md-12">
              <?php if($this->session->flashdata('new_order')) : ?>
                <div class="container">
                  <div class="row">

                    <!-- Center -->
                    <section id="center_column" class="col-md-12">
                      <h1 class="page-heading">Order Confirmation</h1>

                      <?php if($order->status == 0 ): ?>
                      <p class="alert alert-success">Your order is successfully complete.
                        <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                      </p>
                      <?php else : ?>
                        <p class="alert alert-danger">Your order transaction failure.
                          <button type="button" class="close" data-dismiss="alert"
                                  aria-hidden="true">&times;</button>
                        </p>
                      <?php  endif; ?>
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">

                          <div class="box order-confirmation">
                            <h3 class="page-subheading">Thank you <?= $customer->firstname ?> <?= $customer->lastname ?>:</h3>
                            <strong>We appreciate your order!</strong><br/>
                            We will call you soon to confirm order. Your order number is  <?= $order->receipt_no ?> and was placed at 7.00 pm

                            <br>Confirmed order will be delivered in 2 -3 business day
                            <br>If your order is to these areas, than your delivery will take a few extra days

                          </div>
                          <?php if( $this->input->get("type") == 'cash' ): ?>
                            <div class="box order-confirmation line1">

                              <strong>Thanks for choosing Cash on Delivery! <br/> Here's what happens next : </strong><br/>
                              <ul>
                                <li>1. We will call you to confirm your order before it leaves our warehouse</li>
                                <li>2. Our deelivery partner will arrive with your order and collect the necessary cash</li>
                                <li>3. Remember to keep the right amount of cash at hand</li>
                                <li>4. If you want to return your order for any reason, call us on 800-Shops and we'll more than happy to help</li>
                              </ul>
                            </div>
                          <?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                          <img src="<?= base_url() ?>images/shopping.png"/>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              <?php endif; ?>
          <h1 class="page-heading bottom-indent">Order history</h1>
          <p class="info-title">Here are the orders you've placed since your account was created.</p>
          <div class="block-center table-responsive" id="block-history">
            <table id="order-list" class="table table-bordered footab footable-loaded footable default">
              <thead>
                <tr>
                  <th class="first_item footable-first-column" data-sort-ignore="true">Order reference</th>
                  <th class="item footable-sortable">Date<span class="footable-sort-indicator"></span></th>
                  <th data-hide="phone" class="item footable-sortable" style="display: table-cell;">Total price <br/><small> + shipping price   </small> <span class="footable-sort-indicator"></span></th>
                  <th class="item footable-sortable">Status<span class="footable-sort-indicator"></span></th>
                  <th class="item footable-sortable">Payment Type<span class="footable-sort-indicator"></span></th>
                  <th data-sort-ignore="true" data-hide="phone,tablet" class="item" style="display: table-cell;"> Transaction No </th>
                  <th data-sort-ignore="true" data-hide="phone,tablet" class="last_item footable-last-column" style="display: table-cell;">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($orders as $o ): ?>
                  <tr class="first_item " <?= $o->id == $order->id  ?" style='background-color: #cbcbcb' ":"" ?>   >
                    <td class="history_link bold footable-first-column">
                      <span class="footable-toggle"></span> <a class="color-myaccount" href="<?= base_url() ?>user/order/?id=<?= $o->id ?>"> <?= $o->receipt_no ?> </a></td>
                    <td data-value="20160408025439" class="history_date bold"> <?= date("d/m/Y" , strtotime( $o->date ) ) ?>  </td>
                    <td class="history_price"   style="display: table-cell;"><span class="price"> <?= number_format($o->total+$o->shipping,2)?> QAR </span></td>

                    <td data-value="10" class="history_state">
                      <?php if(  $o->status == 0  ): ?>
                        <span class="label" style="background-color:#3ec02b; border-color:#3ec02b;"> success </span>
                      <?php else : ?>
                        <span class="label" style="background-color:#e1341f; border-color:#e1341f;"> failure </span>
                      <?php endif; ?>
                     </td>
                    <td data-value="10" class="history_state">
                      <?php if(  $o->payment == 1  ): ?>
                        <span class="label" style="background-color:#3ec02b; border-color:#3ec02b;"> credit cart </span>
                      <?php else : ?>
                        <span class="label" style="background-color:#ef8934; border-color:#ef8934;"> pay on cash </span>
                      <?php endif; ?>
                    </td>
                    <td class="history_invoice" style="display: table-cell;"> <?= empty($o->transaction_no) ? "-" : $o->transaction_no ?>  </td>
                    <td class="history_detail footable-last-column" style="display: table-cell;"><a class="btn btn-outline button button-small btn-sm" href="<?= base_url() ?>cart/order_detail/<?= $o->id ?>">
                        <span> Details </span> </a>    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

            <?php if(!empty($order) ):  ?>
              <div class="adresses_bloc">
                <div class="row">
                  <table class="table " >
                    <tr>
                      <td>
                        <ul class="address alternate_item box">
                          <li>
                            <h3 class="page-subheading"  > Primary Address </h3>
                          </li>
                          <li><span class="address_firstname"><?= $customer->firstname ?></span> <span class="address_lastname"><?= $customer->lastname ?></span></li>
                          <li class="address_company"><?= $customer->company ?></li>
                          <li><span class="address_address1"><?= $customer->address1 ?></span> <span class="address_address2"><?= $customer->address2 ?></span></li>
                          <?php   ?>
                          <li><span class="address_city"><?= $customer->City;  ?>,</span> <span class="address_State:name"><?= $customer->Zone ?></span> <span class="address_postcode"><?= $customer->postcode ?></span></li>
                          <li><span class="address_Country:name">Qatar  </span></li>
                          <li><span class="address_phone"><?= $customer->phone ?></span></li>
                          <li class="address_phone_mobile"><?= $customer->phone_mobile ?></li>
                          <li class="email"><?= $customer->email ?></li>
                        </ul>
                      </td>
                      <td>
                        <ul class="address alternate_item box">
                          <li>
                            <h3 class="page-subheading"  > Shipping Address </h3>
                          </li>
                          <li><span class="address_firstname"><?= $customer->firstname ?></span> <span class="address_lastname"><?= $customer->lastname ?></span></li>
                          <li class="address_company"><?= $customer->company ?></li>
                          <li><span class="address_address1"><?php $cus = json_decode($order->customer_detail);
                              echo $cus->shipping ; ?></span> </li>
                          <li><span class="address_city"><?= $cus->city ?>,</span> <span class="address_State:name"><?= $cus->state ?></span> <span class="address_postcode"><?= $cus->postcode ?></span></li>
                          <li><span class="address_Country:name">Qatar</span></li>
                          <li><span class="address_phone"><?= $customer->phone ?></span></li>
                          <li class="address_phone_mobile"><?= $customer->phone_mobile ?></li>
                          <li class="email"><?= $customer->email ?></li>
                        </ul>
                      </td>
                    </tr>
                  </table>
                  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6">

                  </div>
                  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-6">

                  </div>
                </div>

                <div id="order-detail-content" class="table_block table-responsive">

                  <?php $carts = json_decode($order->cart_details , true);  ?>

                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="first_item">Reference</th>
                      <th class="item">Product</th>
                      <th class="item">Quantity</th>
                      <th class="item">Unit price</th>
                      <th class="last_item">Total price</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <!-- <tr class="item">
                       <td colspan="1"><strong>Items (tax excl.)</strong></td>
                       <td colspan="4"><span class="price">$83.45</span></td>
                     </tr>-->
                     <tr class="item">
                       <td colspan="1"><strong>Items (tax incl.) </strong></td>
                       <td colspan="4"><span class="price"><?= number_format($order->total,2) ?> QAR</span></td>
                     </tr>
                     <tr class="item">
                       <td colspan="1"><strong>Shipping &amp; handling (tax incl.) </strong></td>
                       <td colspan="4"><span class="price-shipping"><?= number_format($order->shipping,2) ?> QAR</span></td>
                     </tr>
                    <tr class="totalprice item">
                      <td colspan="1"><strong>Total</strong></td>
                      <td colspan="4"><span class="price"><?= number_format($order->total+$order->shipping,2) ?> QAR</span></td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <!-- Customized products -->
                    <!-- Classic products -->
                    <?php foreach($carts as $cart ): ?>
                      <tr class="item">
                        <td><label for="cb_24"><?= $cart['options']['code'] ?></label></td>
                        <td class="bold"><label for="cb_24"> <?= $cart['name'] ?><small class="cart_ref"> SKU : <?= $cart['options']['code'] ?>
                              <?= strlen( $cart['options']['color']) ? ",Color :" .$cart['options']['color'] :"" ?>
                              <?= strlen( $cart['options']['size']) ? ",Size :" .$cart['options']['size'] :"" ?>
                            </small> </label></td>
                        <td class="return_quantity"><label for="cb_24"><span class="order_qte_span editable"><?= $cart['qty'] ?></span></label></td>
                        <td class="price"><label for="cb_24"> <?= number_format($cart['price'],2) ?> QAR </label></td>
                        <td class="price"><label for="cb_24"> <?= number_format($cart['subtotal'],2) ?> QAR  </label></td>
                      </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
                </div>

              </div>
            <?php endif ?>
          </div>
          <ul class="footer_links clearfix">
            <li class="pull-left"> <a class="btn btn-outline button button-small btn-sm" href="<?= base_url() ?>user/myaccount"> <span> <i class="fa fa-user"></i> Back to Your Account </span> </a> </li>
            <li class="pull-right"> <a class="btn btn-outline button button-small btn-sm" href="<?= base_url() ?>"> <span><i class="fa fa-home"></i> Home</span> </a> </li>
          </ul>
        </section>

  </section>
  <!-- Footer -->
  <?php $this->load->view('inc/footer') ?>
</section>
<!-- #page -->
<p id="back-top"> <a href="#top" title="Scroll To Top"><i class="fa fa-angle-up"></i>Top</a> </p>
</body>
</html>