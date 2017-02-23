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
                <span class="navigation-pipe">&gt;</span> Authentication
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
                    <h1 class="page-heading">Authentication</h1>

                    <!-- Steps -->

                    <!-- /Steps -->

                    <?php
                    $notification = $this->session->flashdata('notification');
                    $error = $notification['error'];
                    $valid = $notification['success'];

                    if (isset($valid)) $error = $valid;

                    if (isset($error)) {
                        ?>
                        <div
                            class="alert <?= isset($valid) ? 'alert-success' : 'alert-danger' ?> alert-dismissable fade in ">
                            <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                            <?= $error ?>
                        </div>
                        <?php
                    }


                    ?>

                    <!---->
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <form action="" method="post" id="create-account_form" class="box panel panel-default">
                                <h3 class="panel-heading">Create an account</h3>
                                <div class="form_content panel-body clearfix">
                                    <p>Please enter your email address to create an account.</p>
                                    <div class="alert alert-danger" id="create_account_error" style="display:none"></div>
                                    <div class="form-group">
                                        <label for="email_create">Email address</label>
                                        <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="" />
                                    </div>
                                    <div class="submit">
                                        <input type="hidden" class="hidden" name="back" value="" />
                                        <button class="btn btn-outline button button-medium exclusive" type="submit" id="SubmitCreate" name="SubmitCreate"> <span> <i class="fa fa-user left"></i> Create an account </span> </button>
                                        <input type="hidden" class="hidden" name="SubmitCreate" value="Create an account" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <form action="" method="post" id="login_form" class="box panel panel-default">
                                <h3 class="panel-heading">Already registered?</h3>
                                <div class="form_content panel-body clearfix">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="passwd">Password</label>
                                        <input class="is_required  account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="password" value="" />
                                    </div>
                                    <p class="lost_password form-group"><a href="<?= base_url() ?>user/forget_password" title="Recover your forgotten password" rel="nofollow">Forgot your password?</a></p>
                                    <p class="submit">
                                        <input type="hidden" class="hidden" name="back" value="" />
                                        <button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-outline button-medium"> <span> <i class="fa fa-lock left"></i> Sign in </span> </button>
                                    </p>
                                </div>
                            </form>
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