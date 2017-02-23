<nav id="side_nav">
    <ul>
        <li>
            <a href="#">
                <span class=" ion-android-folder "></span>
                <span class="nav_title">Category Type </span>
            </a>
            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Category Type Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/category/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/category">
                                Manage </a></li>
                        <li><a href="<?= base_url() ?>admin/category/rearrange">
                                Rearrange </a></li>
                    </ul>

                </div>
            </div>
        </li>
      <!--  <li>
            <a href="#">
                <span class="glyphicon glyphicon-th "></span>
                <span class="nav_title">Option Group </span>
            </a>
            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Option Group Manage</h4>
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>admin/option/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/option">
                                Manage </a></li>
                    </ul>
                </div>
            </div>
        </li> -->
        <li>
            <a href="#">
                <span class=" ion-bag "></span>
                <span class="nav_title"> Product </span>
            </a>

            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Product Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/product/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/product">
                                Manage </a></li>

                        <li><a href="<?= base_url() ?>admin/product/updatestock">
                                Update Stock </a></li>
                        <li>

                            <a href="<?= base_url() ?>admin/product/product_option">
                                <span class="badge badge-primary"></span>  Color Option
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/product/reviews">
                                Item Reviews </a></li>
                        <li><a href="<?= base_url() ?>admin/product/rearrange">
                                Item Rearrange </a></li>
                    </ul>

                </div>
            </div>
        </li>

        <li>
            <a href="<?= base_url() ?>admin/home/create">
                <span class=" ion-arrow-swap "></span>
                <span class="nav_title"> Home Page Product List </span>
            </a>
        </li>


        <li>
            <a href="#">
                <span class="fa fa-list"></span>
                <span class="nav_title"> Extra  </span>
            </a>
            <div class="sub_panel">
                <div class="side_inner">
                    <h4 class="panel_heading panel_heading_first">Blog </h4>
                    <ul>
                        <li>

                            <a href="<?= base_url()?>admin/blog/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/blog">
                                Manage </a></li>
                    </ul>
                    <h4 class="panel_heading panel_heading_first">Slider Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/slider/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/slider">
                                Manage </a></li>
                    </ul>
                    <h4 class="panel_heading panel_heading_first">Banner Manage</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/banner/create">
                                <span class="badge badge-primary"></span> Create New
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/banner">
                                Manage </a></li>
                    </ul>
                    <h4 class="panel_heading panel_heading_first">Delivery Location & Amount</h4>
                    <ul>
                        <li>

                            <a href="<?= base_url() ?>admin/zone/manage">
                                <span class="  badge-primary"></span>
                                Zone
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/city/manage">
                                City </a></li>
                    </ul>
                </div>
            </div>
        </li>





        <li>
            <a href="<?= base_url() ?>admin/home/subscribe">
                <span class="label label-danger"> </span>
                <span class="ion-ios7-download"></span>
                <span class="nav_title">Subscribe</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="glyphicon glyphicon-transfer "></span>
                <span class="nav_title"> Transaction  </span>
            </a>
            <div class="sub_panel">
                <div class="side_inner">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>admin/transaction">
                                <span class="badge badge-primary"></span> Order List
                            </a>
                        </li>
                        <li><a href="<?= base_url() ?>admin/transaction/deleted_records"> Deleted Transaction </a></li>
                        <li><a href="<?= base_url() ?>admin/transaction/cancel_records"> Canceled Transaction </a></li>
                    </ul>
                </div>
                </div>

        </li>
        <li>
            <a href="<?= base_url() ?>admin/home/password_reset">
                <span class="label label-danger"> </span>
                <span class="fa fa-refresh "></span>
                <span class="nav_title">password reset</span>
            </a>
        </li>

    </ul>
</nav>