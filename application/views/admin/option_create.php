<!DOCTYPE >
<html  >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $this->load->view('admin/inc/head') ?>
    <!-- bootstrap switches -->
    <link href="<?= base_url() ?>assets/lib/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.css"
          rel="stylesheet">
    <!-- multiselect, tagging -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/select2/select2.css">
    <!-- main stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" media="screen">

    <!-- date range picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">

    <style>
        .img-grid2 li {
            width: 50%;
        }
        .panel-primary {
            border-color: #428bca !important; ;
        }
        #room_list .panel {
            border:  1px solid #d0d0d0;
        }
        #room_list .col-lg-4 {
            margin: 0 0 10px 0 ;
        }
    </style>

</head>
<body class="side_nav_hover">
<!-- top bar -->
<?php $this->load->view('admin/inc/header') ?>
<!-- main content -->
<div id="main_wrapper">
    <div class="page_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <fieldset>
                                <legend><span>Create option  </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/option<?= $this->input->get('option_id') ? "?option_id={$this->input->get('option_id')}" : ""?>"> option </a>
                                        &raquo; create
                                    </div>
                                </legend>

                            </fieldset>

                            <?php
                            $error = isset($error) ? $error : $this->session->flashdata('error');
                            $valid = $this->session->flashdata('valid');

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

                            <form data-parsley-validate method="post">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name">Option Group</label>
                                            <input type="text" id="name" name="form[title]"
                                                   value="<?= $result->title ?>"
                                                   class="form-control" data-parsley-required="true">
                                        </div>

                                        <div class="col-lg-6">
                                            <label for="code">Option Code</label>
                                            <input type="text" id="code" name="form[code]" disabled=""
                                                   value="<?= $result->code ?>"
                                                   class="form-control">
                                            <small class="help-text"> It will auto generate after create
                                            </small>
                                        </div>
                                    </div>
                                    <!-- <div class="row" >
                                        <div class="col-lg-6">
                                            <label for="code">Option Type </label>
                                            <select class="form-control" name="form[type]" data-parsley-required="true" >
                                                <option> --- select option type --- </option>
                                                <option value="radio" <?=  $result->type == "radio" ? "selected" : "" ?>   > Radio Button  </option>
                                                <option value="select" <?=  $result->type == "select" ? "selected" : "" ?> > Select Tag  </option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="clearfix" ></div>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Option </th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($options as $k =>$op ): ?>
                                        <tr id="discount_row_<?=$k?>">
                                            <td>
                                                <input type="hidden"  name="option[id][]"  class="form-control" value="<?=$op->id?>">
                                                <input type="text"  name="option[title][]"  class="form-control" value="<?=$op->title?>">
                                            </td>
                                            <td><a href="#"  onclick="tisa_table.row_remove(this)"  class="btn btn-sm btn-default tr_remove">Remove</a></td>
                                        </tr>
                                    <?php endforeach; ?>


                                    <tr id="tr_add">
                                        <td colspan=""></td>
                                        <td><a href="#" class="btn btn-sm btn-primary"  onclick="tisa_table.row_add()" >Add Option Value</a></td>
                                    </tr>
                                    <tr id="tr_clone" style="display:none">

                                        <td><input type="text"   class="form-control" value=""></td>

                                        <td><a href="#" onclick="tisa_table.row_remove(this)"  class="btn btn-sm btn-default tr_remove">Remove</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix" ></div>

                                <div class="form-sep">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
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
<!-- wysiwg editor -->
<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/lib/ckeditor/adapters/jquery.js"></script>


<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<!-- form validation functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_validation.js"></script>
 

<script>
    $(function () {
        wysiwg.init();

    });
    // wysiwg editor
    wysiwg = {
        init: function () {
            if ($('#description').length) {
                $('textarea#description').ckeditor();
            }
        }
    }

    // add table row
    tisa_table = {
        $tr_id : 0,
        row_add: function() {
            this.$tr_id++;
            var $cloned_tr = $('#tr_clone').clone(true),
                random_id = Math.random().toString(36).substr(2, 9);

            $cloned_tr.attr({
                id: 'option_row_' + this.$tr_id
            }).removeAttr('style').find('input[type=text]').attr({
                id: "option_group_" + random_id,
                name: "option[title][]"
            });
            $cloned_tr.insertBefore($('#tr_add'));
        },
        row_remove: function(self) {
            $(self).closest('tr').remove();
        }
    }



</script>


</body>


</html>
