<!DOCTYPE >
<html  >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php $this->load->view('admin/inc/head') ?>

    <!-- main stylesheet -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css">


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
                                <legend><span>Create category  </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/category<?= $this->input->get('category_id') ? "?category_id={$this->input->get('category_id')}" : ""?>"> category </a>
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

                            <div class="row" >
                                <div class="col-lg-offset-9 col-lg-3" style="margin-bottom: 5px" >
                                    <a class="btn btn-primary fa fa-plus pull-right" href="<?= base_url("admin/zone/manage") ?>" > Create New  </a>
                                </div>
                                <form data-parsley-validate method="post">
                                    <div class="col-lg-6" >

                                        <label for="name"> Zone Name</label>
                                        <input type="text" id="name" name="form[Zone]"
                                               value="<?= $result->Zone ?>"
                                               class="form-control" data-parsley-required="true">
                                        <?= form_error("form[Zone]") ?>
                                        <div class="form-sep">
                                            <button class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-6" >
                                    <table style="font-size: 12px" id="dt_tableTools" class="table table-bordered" >
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Zone </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($zones as $k => $zone): ?>
                                                <tr>
                                                    <td><?= $k+1 ?></td>
                                                    <td> <?= $zone->Zone ?> </td>
                                                    <td>
                                                        <a class="btn btn-warning fa fa-edit" href="<?= base_url("admin/zone/manage/$zone->ZoneId") ?>" ></a>
                                                        <a class="btn btn-danger fa fa-times" onclick="return DeleteConfirm()" href="<?= base_url("admin/zone/delete/$zone->ZoneId") ?>"  ></a>
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

<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?= base_url() ?>assets/lib/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<!-- datatables functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_datatables.js"></script>

</body>


</html>
