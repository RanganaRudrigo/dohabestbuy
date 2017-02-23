<!DOCTYPE html>
<html>
<head>
   <?php $this->load->view('admin/inc/head');  ?>
    </head>
    <body class="side_nav_hover" >
   <?php $this->load->view('admin/inc/header');   ?>
       <!-- main content -->
        <div id="main_wrapper">
            <div class="page_content">
                <div class="container-fluid">

                </div>
            </div>      
        </div>

        <!-- side navigation -->
        <?php $this->load->view('admin/inc/nav');   ?>


        <!-- jQuery -->
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <!-- easing -->
        <script src="<?=base_url()?>assets/js/jquery.easing.1.3.min.js"></script>
        <!-- bootstrap js plugins -->
        <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- top dropdown navigation -->
        <script src="<?=base_url()?>assets/js/tinynav.js"></script>
        <!-- perfect scrollbar -->
        <script src="<?=base_url()?>assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
        
        <!-- common functions -->
        <script src="<?=base_url()?>assets/js/tisa_common.js"></script>
        

        
    <!-- page specific plugins -->

        <!-- nvd3 charts -->
        <script src="<?=base_url()?>assets/lib/d3/d3.min.js"></script>
        <script src="<?=base_url()?>assets/lib/novus-nvd3/nv.d3.min.js"></script>
        <!-- flot charts-->
        <script src="<?=base_url()?>assets/lib/flot/jquery.flot.min.js"></script>
        <script src="<?=base_url()?>assets/lib/flot/jquery.flot.pie.min.js"></script>
        <script src="<?=base_url()?>assets/lib/flot/jquery.flot.resize.min.js"></script>
        <script src="<?=base_url()?>assets/lib/flot/jquery.flot.tooltip.min.js"></script>
        <!-- clndr -->
        <script src="<?=base_url()?>assets/lib/underscore-js/underscore-min.js"></script>
        <script src="<?=base_url()?>assets/lib/CLNDR/src/clndr.js"></script>
        <!-- easy pie chart -->
        <script src="<?=base_url()?>assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- owl carousel -->
        <script src="<?=base_url()?>assets/lib/owl-carousel/owl.carousel.min.js"></script>
        
        <!-- dashboard functions -->
        <script src="<?=base_url()?>assets/js/apps/tisa_dashboard.js"></script>
        
    </body>

</html>
