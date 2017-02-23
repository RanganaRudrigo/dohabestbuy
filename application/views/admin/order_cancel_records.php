<!DOCTYPE html>
<html>
<head>
    <title>Transaction List <?= date("d-m-Y") ?> </title>
    <?php $this->load->view('admin/inc/head') ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css">

    <!-- editable elements -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/x-editable/inputs-ext/address/address.css">

</head>
<body class="side_nav_hover"  >
<!-- top bar -->
<?php $this->load->view('admin/inc/header') ?>
<!-- main content -->
<div id="main_wrapper">
    <div class="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Transaction List
                            <div  class="site_nav" >
                                <a href="<?= base_url() ?>admin">Dashboard</a>
                                &raquo; Transaction
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="clearfix" style="margin: 10px" ></div>
                            <table id="dt_tableTools" class=" table table-striped table-bordered ">
                                <thead>
                                <tr>
                                    <th style="display: none"  >#</th>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Reference No</th>
                                    <th>Transaction No</th>
                                    <th>Customer Name</th>
                                    <th>Total </th>
                                    <th>Payment Type </th>
                                    <th>Delivey </th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($orders as $k => $row): ?>
                                    <tr>
                                        <td style="display: none" ><?= $k+1 ?></td>
                                        <td><?= $row->id ?></td>
                                        <td> <?= date("d/m/Y", strtotime($row->date) ) ?> </td>
                                        <td>  <?= $row->receipt_no ?> </td>
                                        <td>  <?= $row->transaction_no ?> </td>
                                        <td>  <?= $row->firstname ?> <?= $row->lastname ?> </td>
                                        <td class="text-right" >  <?= number_format( $row->total , 2) ?> </td>
                                        <td>  <?= $row->payment == 1 ? "<span class='badge badge-success' >Credit Cart</span> " :"<span class='badge badge-warning' >cash on delivery</span>" ?> </td>
                                        <td id="order_deliver_<?= $row->id ?>" >  <?= $row->delivery == 1 ? "<span class='badge badge-success' >Delivered</span> " :"<span class='badge badge-danger' >not yet</span>" ?> </td>
                                        <td class="text-right" >
                                            <a class=" btn btn-warning   fa fa-pencil-square-o" onclick="row.openModel(<?=$row->id?>)"      > View </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- side navigation -->
<?php $this->load->view('admin/inc/nav') ?>

<!-- right slidebar -->
<div id="slidebar">
    <div id="slidebar_content">

    </div>
</div>
</div>
<?php $this->load->view('admin/inc/foot') ?>
<!-- datatables -->
<script src="<?= base_url() ?>assets/lib/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<!-- datatables functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_datatables.js"></script>

<!-- mock ajax -->
<script src="<?= base_url() ?>assets/js/jquery.mockjax.js"></script>
<!-- editable elements -->
<script src="<?= base_url() ?>assets/lib/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script src="<?= base_url() ?>assets/lib/x-editable/inputs-ext/address/address.js"></script>
<script src="<?= base_url() ?>assets/lib/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
<script src="<?= base_url() ?>assets/lib/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
<!-- multiselect, tagging -->
<!-- editable elements functions -->

<script>
    row  = {
        openModel: function(order_id){
            $.ajax({
                url : "<?=base_url()?>admin/transaction/detail/"+order_id ,
                success : function (mge){
                    var header = "<div class='modal-header' > Order Detail </div> ";
                    var footer = " <div class='modal-footer' >" +
                        " <button class='btn btn-success fa fa-check' data-id='"+ order_id +"' > Rollback Cancel </button> " +
                        " <button class='btn btn-primary fa fa-print' > Print </button> " +
                        "</div>";
                    var myModal = $("#myModal");
                    myModal.find(".modal-content").html(header+mge+footer);
                    myModal.modal('show');
                }
            });
        }
    }
</script>

<script>
    $(function() {
        $("body")
            .on("click",'.fa-times',function(){
                var id = $(this).data('id') ;
                if(confirm("Are You Sure Do your can to delete this record ???  ")){
                    $.ajax({
                        url : "<?=base_url()?>admin/transaction/remove/"+id ,
                        dataType :"json" ,
                        success : function(json){
                            if(json['error'])
                                alert(json['error']);
                            else {
                                alert(json['success']);
                                location.reload();
                            }
                        }
                    });
                }
            })
            .on("click",'.fa-print',function(){
                var data = $('.modal-content').find(".modal-body").html() ;
                var mywindow = window.open('', 'Order Print', 'width=600,height=400');
                mywindow.document.write('<html><head><title> dohabestbuy order invoice </title>');
                mywindow.document.write('<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" type="text/css" />');
                mywindow.document.write('<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.min.css" type="text/css" />');
                mywindow.document.write('</head><body >');
                mywindow.document.write(data);
                mywindow.document.write('</body></html>');
                setTimeout(function(){
                    mywindow.document.close(); // necessary for IE >= 10
                    mywindow.focus(); // necessary for IE >= 10

                    mywindow.print();
                    mywindow.close();
                } ,  1000 );
            })
            .on("click",'.fa-check',function(){
                var self = $(this) ;
                var id = self.data('id') ;
                $("#myModal").modal("hide");
                $.ajax({
                    url : "<?=base_url()?>admin/transaction/roll_back_delete/"+id ,
                    dataType :"json" ,
                    success : function(json){
                        if(json['error'])
                            alert(json['error']);
                        else {
                            alert(json['success']);
                            location.reload();
                        }
                    }
                });
            });
    });

</script>
</body>

</html>