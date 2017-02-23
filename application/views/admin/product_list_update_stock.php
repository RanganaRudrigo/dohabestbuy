<!DOCTYPE html>
<html>
<head>
    <title>product List <?= date("d-m-Y") ?> </title>
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
                        <div class="panel-heading">product List
                            <div  class="site_nav" >
                                <a href="<?= base_url() ?>admin">Dashboard</a>
                                &raquo; product
                            </div>
                        </div>
                        <div class="panel-body">


                            <div class="clearfix" style="margin: 10px" ></div>

                            <table id="dt_tableTools" class=" table table-striped table-bordered ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Color</th>
                                    <!-- <th>Size</th>  -->
                                    <th>Price</th>
                                    <th>Ava Qty</th>
                                    <th> Update Qty </th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($records as $k => $row): ?>
                                    <tr>
                                        <td><?= $k+1 ?></td>
                                        <td> <?= $row->code ?> </td>
                                        <td> <img style="width: 75px" src="<?=base_url()?>uploads/thumbs/<?= $row->image ?>"> </td>
                                        <td>  <?= $row->category ?> <br/>  <?= $row->title ?> </td>
                                        <td>  <?= strlen($row->color) == 0 ? "default" : $row->color ?>   </td>
                                         <!--<td>  <?= strlen($row->size) == 0 ? "default" : $row->size ?>   </td>-->
                                        <td class="text-right" >  <?= number_format( $row->price , 2) ?> </td>
                                        <td class="text-right" id="<?= $row->product_option_id ?>" data-value="<?= $row->qty ?>" >  <?= $row->qty ?> </td>
                                        <td>  <input type="number" step="1" class="form-control" id="qty_<?=$row->product_option_id?>" >  </td>
                                        <td class="text-right" >
                                             <a title="update" class=" btn btn-info " onclick="row.update($(this))" data-id="<?= $row->product_option_id ?>" > update </a>
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
<script src="<?= base_url() ?>assets/js/apps/tisa_editable_elements.js"></script>
<script>
    row  = {
        update: function(self){
            self.append("<i class='fa fa-spin fa-refresh' ></i>")
            var qty = parseInt($("#qty_"+self.data('id')).val()) ;
            if( $.isNumeric(qty) ) {
                $.ajax({
                    url : "<?= base_url() ?>admin/product/updatestock",
                    data : { id : self.data('id') , qty : qty } ,
                    dataType : "json",
                    success : function(json){
                        self.find("i").remove();
                        if(json['result']) {
                            var field = $("#"+self.data('id')) ;
                            field.html(field.data('value') + qty).data('value' , field.data('value') + qty ) ;
                            $("#qty_"+self.data('id')).val("")
                        }else{
                            alert("Please Try Again !!!...")
                        }
                    }
                });
            }else{
                alert("Please Update Quantity Field Before Update")
            }

        }
    }
</script>

</body>

</html>