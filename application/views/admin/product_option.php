<!DOCTYPE html>
<html>
<head>
    <title>Option List <?= date("d-m-Y") ?> </title>
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
                        <div class="panel-heading">Color List
                            <div  class="site_nav" >
                                <a href="<?= base_url() ?>admin">Dashboard</a>
                                &raquo; Banner
                            </div>
                        </div>
                        <div class="panel-body table-responsive">

                            <form onsubmit="return row.add(this)"  id="form" >
                                <div class="alert  alert-dismissable fade in hidden " id="success" >
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>
                                    <span> Record Inserted Successfully          </span>
                                </div>

                            <div class="row" style="margin-bottom: 10px; border: 1px solid #ddd;padding: 10px;"  >
                                <div class="col-lg-5" >
                                    <label>
                                        Color
                                    </label>
                                    <input type="text" name="title" class="form-control" value="" >
                                    <input type="hidden" name="action"   value="add" >
                                </div>
                                <div class="col-lg-3" >
                                    <label> &nbsp; </label>
                                    <button class="btn btn-primary"  >Save</button>
                                </div>
                            </div>
                            </form>

                            <table   class=" table table-striped table-bordered  ">
                                <thead>
                                <tr>
                                    <th width="5" >#</th>
                                    <th  width="80" >Title</th>
                                    <th width="15" ></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($records as $k => $row): ?>
                                    <tr>
                                        <td><?= $k+1 ?></td>
                                        <td>
                                            <label class="title_link"  data-id="<?= $row->id ?>"  ><?= $row->title ?></label>
                                        </td>
                                        <td>  <a class=" btn btn-danger fa fa-times " onclick="row.remove($(this))" data-id="<?= $row->id ?>" > </a>
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

<script>
    row  = {
        add : function (self) {
            var data = $(self).serializeArray();
            this.ajaxCall(data,function(json){
                if(json.hasError){
                    $(".alert").addClass('alert-danger').removeClass('hidden').find('span').html(json.errors);
                    setTimeout(function () {
                        $(".alert").removeClass('alert-success').addClass('hidden').find('span').html("");
                    },3000);
                }else{
                    location.reload();
                }
            }) ;
            return false ;
        } ,
        remove: function(self){
            if(confirm("Are You Sure Do your can to delete this record ???  ")){
                var data = { id : self.data('id') , action : 'remove' } ;
                this.ajaxCall(data,function(json){
                    if(json.hasError){
                        $(".alert").addClass('alert-warning').removeClass('hidden').find('span').html('Try again later');
                        setTimeout(function () {
                            $(".alert").removeClass('alert-warning').addClass('hidden').find('span').html("");
                        },3000)
                    }else{
                        self.closest('tr').remove();
                    }

                }) ;
            }
        },
        update : function (self) {
            var data = { id : self.data('id') , action : 'update' , title : self.val() } ;
            this.ajaxCall(data,function(json){
                if(json.hasError){
                    $(".alert").addClass('alert-warning').removeClass('hidden').find('span').html(json.error);
                    setTimeout(function () {
                        $(".alert").removeClass('alert-warning').addClass('hidden').find('span').html("");
                    },3000)
                }else{
                    $(".alert").addClass('alert-success').removeClass('hidden').find('span').html(json.success);
                    setTimeout(function () {
                        $(".alert").removeClass('alert-warning').addClass('hidden').find('span').html("");
                    },3000)
                }
            }) ;
        },
        ajaxCall : function (data,callback) {
            $.ajax({
                url : "<?= base_url() ?>admin/product/product_option/",
                data : data ,
                dataType : "json",
                success : function(json){
                    callback( json );
                }
            });
        }
        
    }
    $(document).on("click", "label.title_link", function () {
        var txt = $(this).text();
        var self = $(this);
        $(this).replaceWith("<input class='title_link form-control ' id='text-edit'   />");
        $('#text-edit').focus().val(self.text()).data('id',self.data('id'));
    });

    $(document).on("blur", "input.title_link", function () {
        var txt = $(this).val(),  id = $(this).data('id')
        row.update($(this));
        $(this).replaceWith("<label class='title_link' data-id='"+id+"' >"+txt+"</label>");

    });
</script>

</body>

</html>