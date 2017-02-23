<style>
 .top1 {
	float: right;
	padding-top: 6px;
}
.top2 {
	padding-top: 5px;
	color: #FFF;
}
.top_line {
	height: 40px;
	margin-top: 12px;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #5c2274;
	font-weight: bold;
}
@media (max-width:680px)  {
    .top1 {
	float: left;
	padding-top: 6px;
}
#topbar a {
    color: #333;
}
.leo-megamenu .navbar-nav > li > a { background-color:#530374;}
.top_line { display: none;}
}

</style>

<header id="header" class="header-center">
  <section class="header-container">
    <div id="topbar">
    
    <div class="top_head">
      <div class="container">
      <div  class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-sp-12"><p class="top2">Exfast Online Computer Technology.</p></div>
       <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-sp-12">
       <div id="social_block" class=" top1"> 
              <ul>
                  <li class="facebook"> <a class="_blank" href="http://www.facebook.com/dohabestbuy"> <span>Facebook</span> </a> </li>
                  <li class="twitter"> <a class="_blank" href="https://twitter.com/dohabestbuy"> <span>Twitter</span> </a> </li>
                  
                  <li class="google-plus"> <a class="_blank" href="https://plus.google.com/u/0/117382325046807495361" rel="publisher"> <span>Google Plus</span> </a> </li>
              </ul>
          </div>
       <div class="header_user_info e-translate-top top1">
                <div data-toggle="dropdown" class="popup-title">
                <i class="fa fa-list-alt"></i></div>
                
                 <script type="text/javascript">
              $(document).ready( function(){
                if( $(window).width() < 1025 ){
                  $(".header_user_info").addClass('popup-over');
                  $(".header_user_info .links").addClass('popup-content');
                }
                else{
                  $(".header_user_info").removeClass('popup-over');
                  $(".header_user_info .links").removeClass('popup-content');
                }
                $(window).resize(function() {
                  if( $(window).width() < 1025 ){
                    $(".header_user_info").addClass('popup-over');
                    $(".header_user_info .links").addClass('popup-content');
                  }
                  else{
                    $(".header_user_info").removeClass('popup-over');
                    $(".header_user_info .links").removeClass('popup-content');
                  }
                });
              });
            </script>
                <ul class="links">
                <?php if( $this->session->has_userdata("front_user") ): ?>
                    <li class="first"> <a class="login" href="<?= base_url() ?>user/logout" rel="nofollow" title="Login to your customer account"> Sign out </a> </li>
                    <li> <a href="<?= base_url() ?>user" title="My account">My Account</a> </li>
                    <li> <a href="<?= base_url() ?>cart/order" title="Checkout" class="last">Checkout</a> </li>
                <?php else: ?>
                    <li class="first"> <a class="login" href="<?= base_url() ?>user/signin" rel="nofollow" title="Login to your customer account"> Sign in </a> </li>
                <?php endif; ?>
                <li> <a class="ap-btn-wishlist" id="wishlist-total" href="<?= base_url() ?>user/wishlist" title="My wishlists"> <span>Wish List</span><span class="ap-total-wishlist ap-total"><?= count($this->wishlist->contents()) ?></span> </a> </li>
                <li class="last"> <a class="ap-btn-compare" href="<?= base_url() ?>user/compare" title="Compare" rel="nofollow"> <span>Compare</span><span class="ap-total-compare ap-total"><?= count($this->compare->contents()) ?></span> </a> </li>
              </ul>
              </div>
              
              
            </div>
          
      </div>
      
      </div>
      </div>
      <div class="container">
        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
        <div        class="row ApRow has-bg bg-boxed"
                    data-bg=" no-repeat top"                style="background: no-repeat top;padding-top: 20px;padding-bottom: 15px;"        >

          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div    class="header-logo col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12 ApColumn "
              >
            <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

            <a href="<?=base_url()?>" title="Doha Best Buy"><img class="logo img-responsive" src="<?= base_url() ?>images/logo.png" alt="Doha Best Buy" width="365" height="50"/></a> </div>
          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div    class="pull-left col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12 ApColumn "
		    >
              <?php if(is_object($top)): ?>
                  <a href="<?= $top->title ?>" >
                      <img class="img-responsive" src="<?=base_url()?>uploads/<?= $top->image ?>" width="610" height="88"/>
                  </a>
              <?php endif ?>

              
            </div>
          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->

        </div>
        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
        <div class="wrapper"      >
          <div class="header-box">
            <div        class="row ApRow "
                        style=""        >

              <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
              <div    class="hidden-sm hidden-xs hidden-sp col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                  >
                <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                <div id="contact-link" >
                  <h4 class="title_block">call for support</h4>
                  <span>+974 - 6624 8080</span> </div>
              </div>
              <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
              <div    class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                  >
                <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                <!-- Block search module -->

                <script type="text/javascript">
                  $(document).ready( function(){
                    //$(".leo_block_search").each( function(){
                    var content = $(".groupe-content");
                    $(".groupe-btn").click( function(){
                      content.toggleClass("eshow");
                    }) ;
                    //} );
                  });
                </script>
                <div id="leo_search_block_top" class="leo_block_search exclusive">
                  <div class="groupe-content">
                    <form method="get" action="<?= base_url() ?>search" id="leosearchtopbox">
                      <div class="group-leosearch clearfix">
                        <select name="cate" id="cate">
                          <option value="">All Categories</option>
                          <?php foreach($category as $cat ): ?>
                            <option value="<?= $cat->id ?>"><?= $cat->title ?></option>
                            <?php foreach($cat->sub as $s ): ?>
                              <option value="<?= $s->id ?>"><?= $s->title ?></option>
                            <?php endforeach; ?>
                          <?php endforeach; ?>
                        </select>
                        <input class="search_query grey" type="text" id="leo_search_query_top" name="search_query" placeholder="Please Type Here" value="" />
                        <button type="submit" id="leo_search_top_button" class="btn btn-outline-inverse button button-small"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /Block search module -->

              </div>
              <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
              <div    class="position-static col-lg-2 col-md-3 col-sm-12 col-xs-12 col-sp-12 ApColumn "
                  >
                <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                <!-- MODULE Block cart -->
                <div class="blockcart_top clearfix pull-right">
                  <div id="cart" class="shopping_cart">
                    <div class="media heading">
                      <div class="cart-inner media-body">
                        <a href="<?= base_url() ?>cart/order" title="View my shopping cart" rel="nofollow"> <span
                              class="title-cart">Shopping cart </span> <span
                              class="ajax_cart_quantity unvisible"><?= count($this->cart->contents()) ?></span> <span
                              class="ajax_cart_total unvisible hidden-sp"> </span> <span
                              class="ajax_cart_product_empty ajax_cart_no_product"> <?= count($this->cart->contents()) ?> item(s) - <?= $this->cart->format_number($this->cart->total()); ?> </span> <span
                              class="ajax_cart_product_txt unvisible"> - item</span> <span
                              class="ajax_cart_product_txt_s unvisible"> - item(s)</span> </a>
                      </div>
                    </div>
                    <div class="cart_block block exclusive">
                        <div class="block_content">
                            <!-- block list of products -->
                            <div class="cart_block_list">
                                <dl class="products">
                                    <?php foreach($this->cart->contents() as $item ): ?>
                                        <dt data-id="cart_block_product_<?= $item['id'] ?>_1_0" class="">
                                        <a class="cart-images"
                                           href="<?= base_url() ?>product_detail/<?= url_title($item['name'])."/".$item['id'] ?>"
                                           title="<?= $item['name'] ?>"><img
                                                src="<?= base_url('uploads/thumbs')."/".$item['options']['image'] ?>" width="75"
                                                alt="<?= $item['name'] ?>"/></a>
                                    <div class="cart-info">
                                        <div class="product-name">
                                            <span class="quantity-formated"><span class="quantity"><?= $item['qty'] ?></span>&nbsp;x&nbsp;</span>
                                            <a
                                                class="cart_block_product_name"
                                                href="<?= base_url() ?>product_detail/<?= url_title($item['name'])."/".$item['id'] ?>"
                                                title="<?= $item['name'] ?>"><?= character_limiter(  $item['name'] , 10) ?></a>
                                                <span class="price"><?= number_format($item['price'],2) ?></span>
                                        </div>
                                        <div class="product-atributes">
                                        </div>

                                    </div>
                                    <span class="remove_link">
                                        <a class="ajax_cart_block_remove_link"
                                           href="<?= base_url() ?>cart/remove/?rowid=<?= $item['rowid'] ?>"
                                           rel="nofollow"
                                           title="remove this product from my cart"><i
                                                class="fa fa-trash-o"></i></a>
                                    </span>
                                    </dt>
                                    <?php endforeach ?>

                                    <dd data-id="cart_block_combination_of_1_1_0" class="first_item">
                                        <!-- Customizable datas -->
                                    </dd>
                                </dl>
                                <p class="cart_block_no_products unvisible">
                                    No products
                                </p>

                                <div class="cart-prices">
                                    <div class="cart-prices-line first-line">
								<!--<span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
																			$2.00
																	</span>
								<span>
									Shipping
								</span>-->
                                    </div>
                                    <div class="cart-prices-line last-line">
                                        <span class="price cart_block_total ajax_block_cart_total"><?= $this->cart->format_number($this->cart->total())  ?></span>
                                        <span>Total</span>
                                    </div>
                                </div>
                                <p class="cart-buttons clearfix">
                                    <a id="button_order_cart"
                                       class="btn btn-warning button-medium button button-small pull-right"
                                       href="<?=base_url()?>cart/order"
                                       title="Check out" rel="nofollow">
								<span>
									Check out
								</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- .cart_block -->
                  </div>
                </div>
                <div id="layer_cart">
                  <div class="clearfix">
                    <div class="layer_cart_product col-xs-12 col-md-6"> <span class="cross" title="Close window"></span> <span class="title"> <i class="fa fa-ok"></i>Product successfully added to your shopping cart </span>
                      <div class="product-image-container layer_cart_img"> </div>
                      <div class="layer_cart_product_info"> <span id="layer_cart_product_title" class="product-name"></span> <span id="layer_cart_product_attributes"></span>
                        <div> <strong class="dark">Quantity</strong> <span id="layer_cart_product_quantity"></span> </div>
                        <div> <strong class="dark">Total</strong> <span id="layer_cart_product_price"></span> </div>
                      </div>
                    </div>
                    <div class="layer_cart_cart col-xs-12 col-md-6"> <span class="title">
                        <!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
                        <span class="ajax_cart_product_txt_s  unvisible"> There are <span class="ajax_cart_quantity">0</span> items in your cart. </span>
                        <!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
                        <span class="ajax_cart_product_txt "> There is 1 item in your cart. </span> </span>
                      <div class="layer_cart_row"> <strong class="dark"> Total products </strong> <span class="ajax_block_products_total"> </span> </div>
                      <div class="layer_cart_row"> <strong class="dark unvisible"> Total shipping&nbsp; </strong> <span class="ajax_cart_shipping_cost unvisible"> To be determined </span> </div>
                      <div class="layer_cart_row"> <strong class="dark"> Total </strong> <span class="ajax_block_cart_total"> </span> </div>
                      <div class="button-container"> <span class="continue btn btn-outline btn-sm button exclusive-medium" title="Continue shopping"> <span> Continue shopping </span> </span> <a class="btn btn-outline btn-sm button pull-right" href="<?=base_url()?>cart/order" title="Proceed to checkout" rel="nofollow"> <span> Proceed to checkout </span> </a> </div>
                    </div>
                  </div>
                  <div class="crossseling"></div>
                </div>
                <!-- #layer_cart -->
                <div class="layer_cart_overlay"></div>

                <!-- /MODULE Block cart -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="header-main" class="header-left">
      <div class="container">
        <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
        <div id="leo-mainnav"        class="row ApRow "
             style=""        >

          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div    class="col-lg-3 col-md-1 col-sm-12 col-xs-12 col-sp-12 ApColumn "
              >
            <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

            <div id="leo-verticalmenu" class="leo-verticalmenu block float-vertical float-vertical-left">
              <h4 class="title_block float-vertical-button"><i class="fa fa-bars"></i> <span>Categories</span></h4>
              <div class="box-content block_content">
                <div id="verticalmenu" class="verticalmenu" role="navigation">
                  <ul class="nav navbar-nav megamenu right">
                    <?php foreach($category as $k => $cat ): ?>
                    <li <?= $k > 9 ? " style='display:none' " :"" ?> class=" parent dropdown <?= floor($k/10)."_cat"  ?> " >
                      <a href="<?= base_url() ?>shop/<?= url_title( $cat->title) ?>/<?= $cat->id ?>" class="dropdown-toggle has-category" data-toggle="dropdown" target="_self">
                        <span class="hasicon menu-icon" style="background:url('<?=base_url()?>uploads/<?=$cat->icon ?>') no-repeat;">
                          <span class="menu-title"><?=$cat->title ?></span></span></a><b class="caret"></b>
                      <div class="dropdown-sub dropdown-menu"  style="width:600px;right: -600px; " >
                        <div class="dropdown-menu-inner">
                          <div class="row">
                            <div class="mega-col col-sm-5" >
                              <div class="mega-col-inner ">
                                <div class="leo-widget">
                                  <div class="widget-subcategories">
                                    <div class="widget-inner">
                                      <div class="widget-heading"><?=$cat->title ?></div>
                                      <ul>
                                        <?php foreach($cat->sub as $s ): ?>
                                          <li class="clearfix"> <a href="<?= base_url()."shop/".url_title($cat->title)?>/<?=$cat->id?>/<?=url_title($s->title)?>/<?=$s->id?>" title="Tops" class="img"> <?=$s->title?> </a> </li>
                                        <?php endforeach; ?>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mega-col col-sm-7" >
                              <div class="mega-col-inner ">
                                <div class="leo-widget">
                                  <div class="widget-html">
                                    <div class="widget-heading"> Info </div>
                                    <div class="widget-inner" >
                                      <p style="text-align: justify" ><?=$cat->short ?></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php endforeach; ?>

                    <li  onclick="$('.'+$(this).data('link')+'_cat').removeAttr('style');$(this).data( 'link' , parseInt($(this).data('link'))+1  )" data-link="1"  > <a class="has-category"><span class="hasicon menu-icon" style="background:url('<?= base_url() ?>images/icon10.png') no-repeat;"><span class="menu-title">All Categories</span></span></a></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
          <div    class="col-lg-9 col-md-11 col-sm-10 col-xs-12 col-sp-12 ApColumn "
              >
            <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

            <div id="leo-megamenu" class="clearfix">
              <nav id="cavas_menu"  class="sf-contener leo-megamenu">
                <div class="" role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle btn-outline-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="fa fa-bars"></span> </button>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav megamenu">
                    <!--  <li class="home" > <a href="<?= base_url()?>" target="_self" class="has-category"><span class="menu-title">Home</span></a></li> -->
                    <li class="hot" > <a href="<?= base_url()?>New-Arrival" target="_self" class="has-category"><span class="menu-title"> New Arrival </span><span class="sub-title">new</span></a></li>
                    <li class="top_line" ></li>
                    <li class="" > <a href="<?= base_url()?>top-deals" target="_self" class="has-category"><span class="menu-title"> Today Deals </span></a></li>
                    <li class="top_line" ></li>
                    <li class="hot" > <a href="<?= base_url()?>Buy-One-Get-One-Free" target="_self" class="has-category"><span class="menu-title"> Buy One Get One Free </span><span class="sub-title">hot</span></a></li>
                    <li class="top_line" ></li>
                    <li class="" > <a href="<?= base_url()?>Bundle-Offer" target="_self" class="has-category"><span class="menu-title"> Bundle Offer </span></a></li>
                    <li class="top_line" ></li>
                    <li class="" > <a href="<?= base_url()?>Below-100-QAR" target="_self" class="has-category"><span class="menu-title"> Below 100 QAR </span></a></li>

                       </ul>
                     </div>
                   </div>
                 </nav>
               </div>
               <script type="text/javascript">
                 // <![CDATA[
                //  var current_link = ""; 
               //  var currentURL = window.location;
                // currentURL = String(currentURL);
                // currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
                // current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
                // isHomeMenu = 0;
                // if($("body").attr("id")=="index") isHomeMenu = 1;
                // $(".megamenu > li > a").each(function() {
                //   menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
                //   if( (currentURL == menuURL) || (currentURL.replace(current_link,"") == menuURL) || isHomeMenu){
                //     $(this).parent().addClass("active");
                 //    return false;
                //   }
                // });
                 // ]]>
               </script>
               <script type="text/javascript">
                 (function($) {
                   $.fn.OffCavasmenu = function(opts) {
                     // default configuration
                     var config = $.extend({}, {
                       opt1: null,
                       text_warning_select: "Please select One to remove?",
                       text_confirm_remove: "Are you sure to remove footer row?",
                       JSON: null
                     }, opts);
                     // main function
                     // initialize every element
                     this.each(function() {
                       var $btn = $('#cavas_menu .navbar-toggle');
                       var $nav = null;
                       if (!$btn.length)
                         return;
                       var $nav = $('<section id="off-canvas-nav" class="leo-megamenu"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span>Close</div></nav></sections>');
                       var $menucontent = $($btn.data('target')).find('.megamenu').clone();
                       $("body").append($nav);
                       $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);
                       $("#off-canvas-nav .offcanvas-mainnav").css('min-height',$(window).height()+30+"px");
                       $("#off-canvas-nav .offcanvas-mainnav ul").css('width',"100%");
                       $("html").addClass ("off-canvas");
                       $("#off-canvas-button").click( function(){
                         $btn.click();
                       } );
                       $btn.toggle(function() {
                         $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
                       }, function() {
                         $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");
                       });
                     });
                     return this;
                   }
                 })(jQuery);
                 $(document).ready(function() {
                   jQuery("#cavas_menu").OffCavasmenu();
                   $('#cavas_menu .navbar-toggle').click(function() {
                     $('body,html').animate({
                       scrollTop: 0
                     }, 0);
                     return false;
                   });
                 });
                 $(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
                   if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
                     window.location.href = this.href;
                   }
                 });
               </script>
             </div>
           </div>
         </div>
       </div>
     </section>
   </header>




