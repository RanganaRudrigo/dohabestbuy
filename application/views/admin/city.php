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
                                    <a class="btn btn-primary fa fa-plus pull-right" href="<?= base_url("admin/city/manage") ?>" > Create New  </a>
                                </div>
                                <form data-parsley-validate method="post">
                                    <div class="col-lg-6" >

                                        <div class="form-group" >
                                            <label for="name"> Zone </label>
                                            <select  name="form[ZoneId]" class="form-control"  data-parsley-required="true" data-parsley-trigger="change" >
                                                <option value="" > --------------- </option>
                                                <?php foreach ($zones as $zone): ?>
                                                    <option value="<?= $zone->ZoneId ?>" <?= $result->ZoneId == $zone->ZoneId ?"selected":"" ?> > <?= $zone->Zone ?> </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <label for="name"> City Name</label>
                                            <input type="text" id="name" name="form[City]"
                                                   value="<?= $result->City ?>"
                                                   class="form-control" data-parsley-required="true">
                                        </div>
                                        <div class="form-group" >
                                            <label for="name"> Delivery Amount</label>
                                            <input type="text" id="name" name="form[DeliveryAmount]"
                                                   value="<?= $result->DeliveryAmount ?>"
                                                   class="form-control price" data-parsley-required="true">
                                        </div>

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
                                            <th> City </th>
                                            <th> DeliveryAmount </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($cities as $k => $city): ?>
                                            <tr  >
                                                <td> <?= $k+1 ?></td>
                                                <td> <?= $city->Zone ?> </td>
                                                <td> <?= $city->City ?> </td>
                                                <td class="text-right" > <?= curreny($city->DeliveryAmount) ?> </td>
                                                <td>
                                                    <a class="btn btn-warning fa fa-edit" href="<?= base_url("admin/city/manage/$city->CityId") ?>" ></a>
                                                    <a class="btn btn-danger fa fa-times" onclick="return DeleteConfirm()" href="<?= base_url("admin/city/delete/$city->CityId") ?>"  ></a>
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
<!-- masked inputs -->
<script src="<?= base_url() ?>assets/lib/jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>


<script>
    $(".price").inputmask("decimal", {
        radixPoint: ".",
        groupSeparator: ",",
        digits: 2,
        autoGroup: true
    }).on('keydown', function (e) {
        this.val = $(this).val();
    }).on('keyup', function () {
        v = $(this).val().replace(",", "");
        if ($(this).data('max-value') < v)
            $(this).val($(this).data('max-value'));
    });
</script>
</body>


</html>
