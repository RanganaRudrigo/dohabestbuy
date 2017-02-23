<div class="visible-xs" id="topDrop">
    <div class="panel">
      <div class="collapse dropIt" id="dropNavigation">
        <div class="container">
          <div aria-multiselectable="true" class="panel-group" id="mobile-navigation" role="tablist">

            <div class="panel panel-default">
            <?php  foreach($category as $cat ): ?>
              <?php if(empty($cat->sub)): ?>
                <div class="panel panel-default">
                  <div class="panel-heading" id="mNav-Locator" role="tab">
                    <h4 class="panel-title"> <a href="<?= base_url() ?>shop/<?= url_title( $cat->title) ?>/<?= $cat->id ?>"> <?= $cat->title ?> </a> </h4>
                  </div>
                </div>
              <?php else: ?>
                <div class="panel-heading" id="mNav-shoes" role="tab">
                  <h4 class="panel-title"> <a aria-controls="collapseshoes" aria-expanded="true" class="collapsed" data-parent="#mobile-navigation" data-toggle="collapse" href="#<?= url_title($cat->title) ?>">  <?= $cat->title ?> <i class="fa fa-plus"></i></a> </h4>
                </div>
                <div aria-labelledby="collapseMens" class="panel-collapse collapse" id="<?= url_title($cat->title) ?>" role="tabpanel">
                  <div class="panel-body">
                    <ul role="menu">
                      <?php  foreach($cat->sub as $sub ): ?>
                        <li> <a class="iceOutLnk" href="<?= base_url() ?>shop/<?= url_title( $cat->title) ?>/<?= $cat->id ?>/<?= url_title( $sub->title) ?>/<?= $sub->id ?>"> <?= $sub->title ?> </a> </li>
                      <?php  endforeach; ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>
            <?php  endforeach; ?>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="mNav-About" role="tab">
                <h4 class="panel-title"> <a href="">About Florsheim</a> </h4>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="mNav-Locator" role="tab">
                <h4 class="panel-title"> <a href="">Store Locator</a> </h4>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" id="mNav-Contact" role="tab">
                <h4 class="panel-title"> <a href="">Contact Us</a> </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="collapse dropIt" id="dropSearch">
        <div class="container">
          <label class="col-sm-2 control-label">Search:</label>
          <div class="col-sm-12">
            <input class="form-control" id="main:txtSearchboxMobile" name="main:txtSearchboxMobile" onfocus="if (this.value == 'site search...')                                  this.value = '';" onkeypress="jsf.util.chain(this,event,'if (event.keyCode != 13) {                                  return false;                                }','mojarra.ab(this,event,\'keypress\',\'main:txtSearchboxMobile\',0)')" type="text" value="site search..." />
          </div>
          <div class="col-sm-2"><a class="form-control form-control-button" href="#" id="main:_t164" onclick="mojarra.ab(this,event,'action','main:txtSearchboxMobile',0);return false">Submit</a> </div>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="collapse dropIt" id="dropSignin">
        <div class="container">
          <label class="col-sm-2 control-label">Login:</label>
          <label class="col-sm-2 control-label forgot"> <a href=""> Forgot your password? </a> </label>
          <div class="col-sm-6">
            <input class="form-control input-email" id="main:txtEmailSignInMobile" name="main:txtEmailSignInMobile" onchange="cyEmailOnchange();" onfocus="this.style.background = '#fff';" type="text" />
          </div>
          <div class="col-sm-6">
            <input class="form-control input-password" id="main:pwdPasswordMobile" name="main:pwdPasswordMobile" onfocus="this.style.background = '#fff';" type="password" value="" />
          </div>
          <div class="col-sm-2"><a class="form-control form-control-button" href="#" id="main:btnLoginTopDrop" onclick="mojarra.jsfcljs(document.getElementById('main'),{'main:btnLoginTopDrop':'main:btnLoginTopDrop'},'');return false">Submit</a> </div>
        </div>
      </div>
    </div>
    <div class="panel" id="main:dlgMiniCartMobile">
      <div class="collapse dropIt" id="dropCheckout">
        <div class="container">
          <div class="row subtotal">
            <div class="col-xs-4"><span id="main:_t182">Subtotal:</span></div>
            <div class="col-xs-8 sub"><span id="main:_t184">$0.00</span> </div>
          </div>
          <div class=" checkoutBTN"><a href="">Checkout</a></div>
        </div>
      </div>
    </div>
  </div>