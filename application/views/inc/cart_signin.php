<section id="columns" class="columns-container">
    <div class="container">
        <div class="row">

            <!-- Center -->
            <section id="center_column" class="col-md-12">


                <!-- Steps -->
                <ul class="step clearfix" id="order_step">
                    <li class="col-md-2-4 col-xs-12   first">
                        <span><em>01.</em> Summary</span>
                    </li>
                    <li class="col-md-2-4 col-xs-12 step_current second">
                        <span><em>02.</em> Sign in</span>
                    </li>
                    <li class="col-md-2-4 col-xs-12 step_todo third">
                        <span><em>03.</em> Address</span>
                    </li>
                    <li class="col-md-2-4 col-xs-12 step_todo four">
                        <span><em>04.</em> Shipping</span>
                    </li>
                    <li id="step_end" class="col-md-2-4 col-xs-12 step_todo last">
                        <span><em>05.</em> Payment</span>
                    </li>
                </ul>
                <!-- /Steps -->


                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">



                        <form action="<?= base_url() ?>user/register?ajax=true" method="post" id="create-account_form" class="box panel panel-default">
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
                        <form action="<?= base_url() ?>user/signin?back=<?= current_url() ?>" method="post" id="login_form" class="box panel panel-default">
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
                                <p class="lost_password form-group"><a href="" title="Recover your forgotten password" rel="nofollow">Forgot your password?</a></p>
                                <p class="submit">
                                    <input type="hidden" class="hidden" name="back" value="" />
                                    <button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-outline button-medium"> <span> <i class="fa fa-lock left"></i> Sign in </span> </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="clear"></div>
                <div class="cart_navigation_extra">
                    <div id="HOOK_SHOPPING_CART_EXTRA"></div>
                </div>


            </section>
        </div>
    </div>
</section>