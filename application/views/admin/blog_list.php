<!DOCTYPE html>
<html>
<head>
    <title>Slider List <?= date("d-m-Y") ?> </title>
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
                        <div class="panel-heading">Blog List
                            <div  class="site_nav" >
                                <a href="<?= base_url() ?>admin">Dashboard</a>
                                &raquo; Blog
                            </div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table id="dt_tableTools" class=" table table-striped table-bordered  ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Create Date</th>
                                    <th>Create By</th>
                                    <th width="20" ></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($records as $k => $row): ?>
                                    <tr>
                                        <td><?= $k+1 ?></td>
                                        <td> <img src="<?= base_url()."uploads/thumbs/".$row->image ?>" width="200" > </td>
                                        <td><?= $row->title ?></td>
                                        <td><?= $row->create_date ?></td>
                                        <td><?= $row->user ?></td>
                                        <td>
                                            <a class=" btn btn-warning ion-compose " href="<?= current_url() ?>/manage/<?= $row->id ?>"  > </a>
                                            <a class=" btn btn-danger fa fa-times " onclick="row.remove($(this))" data-id="<?= $row->id ?>" > </a>
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
        remove: function(self){
            if(confirm("Are You Sure Do your can to delete this record ???  ")){
                $.ajax({
                    url : "<?= base_url() ?>admin/blog/remove",
                    data : { id : self.data('id') } ,
                    success : function(){
                        self.closest('tr').remove();
                    }
                });
            }
        }
    }
</script>

</body>

</html>