<!DOCTYPE >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

        #room_list .panel {
            border: 1px solid #d0d0d0;
        }

        #room_list .col-lg-4 {
            margin: 0 0 10px 0;
        }

        #prod_tab_data .col-lg-6 {
            margin-bottom: 10px;
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
                                <legend><span>Create Product  </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/product"> Product </a>
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

                                <div class="tabbable ">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#prod_tab_general"  class="tab-default">General</a></li>
                                        <li><a data-toggle="tab" href="#prod_tab_data" class="tab-default">Data</a></li>
                                        <li><a data-toggle="tab" href="#prod_tab_room" class="tab-default">Option</a>  </li>
                                        <li><a data-toggle="tab" href="#prod_tab_images" class="tab-default">Images</a>  </li>
                                        <li><a data-toggle="tab" href="#prod_tab_seo" class="tab-default"> Seo </a>  </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="prod_tab_general" class="tab-pane active">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="name">Product Name</label>
                                                        <input type="text" id="name" name="form[title]"
                                                               value="<?= $result->title ?>"
                                                               class="form-control" data-parsley-required="true">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="code">Product Code</label>
                                                        <input type="text" id="code" name="form[code]" disabled=""
                                                               value="<?= $result->code ?>"
                                                               class="form-control">
                                                        <small class="help-text"> It will auto generate after create
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-6">
                                                <div class="fileinput-button btn btn-success sepH_b">
                                                    <i class="fa fa-plus"></i>
                                                    <span>Add files...</span>
                                                    <input id="default_image_upload" type="file" name="userfile">
                                                </div>
                                                <small> image size ( 450px * 450px )</small>
                                                <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                                                    <?php if ($result->image): ?>
                                                        <li>
                                                            <div class="upload_img_single thumbnail">
                                                                <img
                                                                    src="<?= base_url() ?>uploads/thumbs/<?= $result->image ?>"
                                                                    class="thumbnail img-responsive" alt=""/>

                                                                <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                    <input
                                                                        type="hidden" name="form[image]"
                                                                        value="<?= $result->image ?>"></div>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>


                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="short" class="req">products Short Description
                                                            (maximum text 150) </label>
                                                        <textarea name="form[short]" id="short" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->short ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="description" class="req">product Description</label>
                                                        <textarea name="form[description]" id="description" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->description ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <div class="row">
                                                    <!--<div class="col-lg-3">
                                                        <label for="manufacture"> Manufacture</label>
                                                        <select id="manufacture"  name="form[manufacture]" class="form-control" >
                                                            <option></option>
                                                            <?php /*foreach($manu as $m ): */ ?>
                                                                <option value="<?/*=$m->id*/?>"  <?/*= $m->id == $result->manufacture ? "selected" :"" */?>  > <?/*=$m->title*/?> </option>
                                                            <?php /*endforeach; */?>
                                                        </select>
                                                    </div>-->


                                                </div>
                                            </div>
                                            <div class="form-group  ">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="map">Order No </label>
                                                        <input type="text" name="form[order_no]" class="form-control"
                                                               value="<?= $result->order_no ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="prod_tab_data" class="tab-pane">

                                            <div class="row" >
                                                <div class="col-lg-3">
                                                    <label for="category"> Category </label>
                                                    <input type="text" id="category" data-parsley-required="true" name="form[category]" class="form-control"   value="<?=$result->category ?>">
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="category"> Discount </label>
                                                        <div class="input-group">
                                                            <input type="text"   name="form[discount]" class="form-control price"   value="<?=$result->discount ?>" data-max-value="100" >
                                                            <span class="input-group-addon">%</span>
                                                        </div>
                                                    </div>
                                                </div>
<!-- 
                                                <div class="col-lg-3">
                                                    <label for="category"> Reorder Quantity </label>
                                                    <input type="text"   data-parsley-required="true" data-parsley-type="integer"  name="form[reorder_qty]" class="form-control"  value="<?=$result->reorder_qty ?>">
                                                </div> -->
                                            </div>
                                           <!-- <div class="row" style="margin-top:10px;" >
                                                <div class="col-lg-3"  >
                                                    <label class=" checkbox-inline ">
                                                        <input type="hidden" name="form[clearance]" value="0" >
                                                        <input type="checkbox"  <?= $result->clearance ? "checked" :"" ?>   onclick="$('#clearance_discount').attr('disabled', !$(this).prop('checked') )"   name="form[clearance]"   value="1"> Clearance
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row" >
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="category"> Clearance Discount </label>
                                                        <div class="input-group">
                                                            <input type="text" <?=  $result->clearance ?"":"disabled" ?>  id="clearance_discount"  name="form[clearance_discount]" class="form-control price" data-max-value="<?=$result->price ?>"  value="<?=$result->clearance_discount ?>">
                                                            <span class="input-group-addon">/=</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->


                                            <div class="row">
                                                <table class="table table-responsive table-bordered" >
                                                    <thead>
                                                        <tr> <th> Title </th>  <th>Data</th> <td></td> </tr>
                                                    </thead>
                                                    <tbody id="data_sheet_holder" >
													<?php $co = count($datasheet) > 10 ? count($datasheet) : 10; ?> 
														<?php for($k=0;$k < $co  ; $k++ ): ?>
														<?php $data = isset($datasheet[$k]) ? $datasheet[$k] : new stdClass(); ?>
                                                        <?php // foreach( $datasheet as $k => $data ): ?>
                                                            <tr>
                                                                <td>
                                                                    <input type="hidden" name="data[<?=$k?>][id]" value="<?=$data->id?>" />
                                                                    <input type="text" name="data[<?=$k?>][title]" class="form-control" value="<?=$data->title?>" >
                                                                </td>
                                                                <td>
                                                                    <input type="text" name="data[<?=$k?>][data]" class="form-control"  value="<?=$data->data?>" >
                                                                </td>
                                                                <td>
                                                                    <a onclick="admin_table_data_sheet.row_remove(this)" class="fa fa-times btn btn-danger" >  </a>
                                                                </td>
                                                            </tr>
                                                        <?php //endforeach; ?>
                                                        <?php endfor; ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="2" ></td>
                                                        <td  > <a class="btn btn-info" onclick="admin_table_data_sheet.row_add()" >Add Data</a> </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>



                                        </div>
                                        <div id="prod_tab_images" class="tab-pane">
                                            <div class="fileinput-button btn btn-success sepH_b">
                                                <i class="fa fa-plus"></i>
                                                <span>Add files...</span>
                                                <input id="image_upload" type="file" name="userfile" multiple>
                                            </div>
                                            <small> image size ( 450px * 450px )</small>
                                            <ul class="img-grid clearfix" id="img_grid_upload">
                                                <?php foreach ($images as $img): ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img
                                                                src="<?= base_url() ?>uploads/thumbs/<?= $img->image ?>"
                                                                class="thumbnail img-responsive" alt=""/>

                                                            <div class="upload_img_actions">
                                                                <span class=" fa fa-times pull-right btn  btn-danger  "
                                                                      onclick="image_upload.remove($(this))"> </span>
                                                                <input
                                                                    type="hidden" name="image[]"
                                                                    value="<?= $img->image ?>"></div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div id="prod_tab_room" class="tab-pane">
                                            <div id="room_list" class="row">

                                                <?php foreach ($options as $k => $r): ?>
                                                    <div class=" col-lg-12 panel panel-primary "  >
                                                        <input type="hidden" name="options[<?=$k?>][product_option_id]" value="<?= $r->product_option_id ?>" />
                                                        <input type="hidden" name="options[<?=$k?>][qty]" value="<?= $r->qty ?>" />
                                                        <?php foreach ($option_list as $op): ?>
                                                            <?php $option_title = url_title(strtolower($op->title))."_id" ; ?>
                                                            <div class="col-lg-3">
                                                                <label><?= $op->title ?></label>
                                                                <select class="form-control" name="options[<?=$k?>][option][<?= $option_title ?>]">
                                                                    <option value="0"> default </option>
                                                                    <?php foreach ($op->options as $ops): ?>
                                                                        <option value="<?= $ops->id ?>" <?= $r->$option_title == $ops->id ? "selected" : "" ?> <?= $ops->id ?> > <?= $ops->title ?> </option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        <?php endforeach; ?>
                                                        <div class="col-lg-3">
                                                            <label> Amount </label>
                                                            <input type="text" name="options[<?= $k ?>][price]"
                                                                   value="<?= $r->price ?>" class="form-control price">
                                                        </div>
                                                        <label> &nbsp; </label>
                                                        <a href="#" onclick="admin_table.row_remove(this)"
                                                           class="btn btn-sm btn-default tr_remove">Remove</a>
                                                    </div>

                                                <?php endforeach; ?>
                                            </div>
                                            <a style="margin-top:10px " href="#"
                                               class="btn btn-sm btn-primary  pull-right"
                                               onclick="admin_table.row_add()">Add Option</a>

                                        </div>
                                        <div id="prod_tab_seo" class="tab-pane" >
                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="short" class="req"> Meta Key </label>
                                                        <textarea name="form[meta_key]" id="short" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->meta_key ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="short" class="req"> Meta Description  </label>
                                                        <textarea name="form[meta_des]" id="short" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->meta_des ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

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

<!-- multiupload -->
<script src="<?= base_url() ?>assets/lib/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>

<!-- masked inputs -->
<script src="<?= base_url() ?>assets/lib/jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>

<!-- multiselect, tagging -->
<script src="<?= base_url() ?>assets/lib/select2/select2.min.js"></script>

<!-- date range picker -->
<script src="<?= base_url() ?>assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    $(function () {
        wysiwg.init();
        image_upload.init();
        image_upload.default_image();
        maskedInputs.init();
        enhanced_select.init();
        enhanced_select.feature('#manufacture');
        date_range.discount_picker();
    });
    // wysiwg editor
    wysiwg = {
        init: function () {
            if ($('#description').length) {
                $('textarea#description').ckeditor();
            }
        }
    }
    // image upload
    image_upload = {
        init: function () {
            if ($('#image_upload').length) {
                var uploadButton = $('<button/>')
                    .addClass('btn btn-success btn-block')
                    .prop('disabled', true)
                    .text('Processing...')
                    .on('click', function (e) {
                        var $this = $(this),
                            data = $this.data();
                        $this
                            .off('click')
                            .text('Abort')
                            .on('click', function () {
                                $this.remove();
                                data.abort();
                            });
                        data.submit().always(function () {
                            $this.remove();
                        });
                        e.preventDefault();
                    });

                $('#image_upload').fileupload({
                    url: '<?= base_url() ?>admin/product/do_upload',
                    dataType: 'json',
                    autoUpload: false,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5000000, // 5 MB
                    disableImageResize: /Android(?!.*Chrome)|Opera/
                        .test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: true
                })
                    .on('fileuploadsubmit', function (e, data) {
                        var input = $('#image_upload');
                        data.formData = {
                            files: input.data(data)
                        };
                        if (!data.formData.files) {
                            input.focus();
                            return false;
                        }
                    })
                    .on('fileuploadadd', function (e, data) {
                        data.context = $('<li/>').appendTo('#img_grid_upload');
                        if (!$('#upload_progress').length) {
                            $('body').append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>');
                        }
                        $.each(data.files, function (index, file) {
                            var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  ');
                            var node = $('<div class="upload_img_single thumbnail" />').append(upload_image_actions);
                            if (!index) {
                                upload_image_actions.append(uploadButton.clone(true).data(data));
                            }
                            node.appendTo(data.context);
                        });
                    })
                    .on('fileuploadprocessalways', function (e, data) {
                        var index = data.index,
                            file = data.files[index],
                            node = $(data.context.children()[index]);
                        if (file.preview) {
                            node.prepend(file.preview);
                        }
                        if (file.error) {
                            node.find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                        }
                        if (index + 1 === data.files.length) {
                            data.context.find('button').text('Upload').prop('disabled', !!data.files.error);
                        }
                    })
                    .on('fileuploadprogressall', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        if (progress == 100) {
                            setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                        }
                    })
                    .on('fileuploaddone', function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if (file.url) {
                                $(data.context.children()[index]).find('.upload_img_actions').append('<div class="alert alert-success">Upload success <br/><a class="alert-link" target="_blank" href=' + file.url + '>show  image</a> <input type="hidden" name="image[]" value="' + file.name + '" > </div>');
                            } else if (file.error) {
                                $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                            }
                        });
                    })
                    .on('fileuploadfail', function (e, data) {
                        $('#upload_progress').addClass('show_progress');
                        $.each(data.files, function (index, file) {
                            $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text('File upload failed.'));
                        });
                        setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                    }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled')
                ;
            }
        },
        remove: function (self) {
            if (confirm("Do you want to remove this file ")) {
                self.closest('li').remove();
            }
        },
        default_image: function () {
            var uploadButton = $('<button/>')
                .addClass('btn btn-success btn-block')
                .prop('disabled', true)
                .text('Processing...')
                .on('click', function (e) {
                    var $this = $(this),
                        data = $this.data();
                    $this
                        .off('click')
                        .text('Abort')
                        .on('click', function () {
                            $this.remove();
                            data.abort();
                        });
                    data.submit().always(function () {
                        $this.remove();
                    });
                    e.preventDefault();
                });

            $('#default_image_upload').fileupload({
                url: '<?= base_url() ?>admin/product/do_upload',
                dataType: 'json',
                autoUpload: false,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5000000, // 5 MB
                disableImageResize: /Android(?!.*Chrome)|Opera/
                    .test(window.navigator.userAgent),
                previewMaxWidth: 220,
                previewMaxHeight: 220,
                previewCrop: true
            })
                .on('fileuploadsubmit', function (e, data) {
                    var input = $('#default_image_upload');
                    data.formData = {
                        files: input.data(data)
                    };
                    if (!data.formData.files) {
                        input.focus();
                        return false;
                    }
                })
                .on('fileuploadadd', function (e, data) {
                    $('#default_img_grid_upload').html(" ");
                    data.context = $('<li/>').appendTo('#default_img_grid_upload');
                    if (!$('#upload_progress').length) {
                        $('body').append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>');
                    }
                    $.each(data.files, function (index, file) {
                        var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span>  ');
                        var node = $('<div class="upload_img_single thumbnail" />').append(upload_image_actions);
                        if (!index) {
                            upload_image_actions.append(uploadButton.clone(true).data(data));
                        }
                        node.appendTo(data.context);
                    });
                })
                .on('fileuploadprocessalways', function (e, data) {
                    var index = data.index,
                        file = data.files[index],
                        node = $(data.context.children()[index]);
                    if (file.preview) {
                        node.prepend(file.preview);
                    }
                    if (file.error) {
                        node.find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                    }
                    if (index + 1 === data.files.length) {
                        data.context.find('button').text('Upload').prop('disabled', !!data.files.error);
                    }
                })
                .on('fileuploadprogressall', function (e, data) {
                    $('#upload_progress').addClass('show_progress');
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    if (progress == 100) {
                        setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                    }
                })
                .on('fileuploaddone', function (e, data) {
                    $.each(data.result.files, function (index, file) {
                        if (file.url) {
                            $(data.context.children()[index]).find('.upload_img_actions').append('<div class="alert alert-success">Upload success <br/><input type="hidden" name="form[image]" value="' + file.name + '" > <a class="alert-link" target="_blank" href=' + file.url + '>show  image</a></div>');
                        } else if (file.error) {
                            $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text(file.error));
                        }
                    });
                })
                .on('fileuploadfail', function (e, data) {
                    $('#upload_progress').addClass('show_progress');
                    $.each(data.files, function (index, file) {
                        $(data.context.children()[index]).find('.upload_img_actions').append($('<div class="alert alert-danger"/>').text('File upload failed.'));
                    });
                    setTimeout("$('#upload_progress').removeClass('show_progress')", 500);
                }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled')
            ;

        }
    }
    //* masked inputs
    maskedInputs = {
        val: null,
        init: function () {
            if ($('.price').length) {
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
            }
        }
    }
    enhanced_select = {
        init: function () {

            $("#category").select2({
                ajax: {
                    url: "<?= base_url() ?>admin/category/autocomplete",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            str : params
                        };
                    },
                    results: function (data) {
                        var myResults = [];
                        $.each(data, function (index, item) {
                            myResults.push({
                                'id': item.id,
                                'text': item.text
                            });
                        });
                        return {
                            results: myResults
                        };
                    },
                    cache: true
                },
                <?php if($result->id > 0  ): ?>
                initSelection: function(element, callback) {
                    callback({id: <?= $cat->id ?>, text: ' <?= html_escape($cat->text) ?>' });
                },
                <?php endif; ?>
                escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                minimumInputLength: 1

            })

        },
        feature: function (id) {
            $(id).select2({
                allowClear: true,
                placeholder: "Select..."
            });
        }
    }
    var tr_id = <?= count($options) -1 ?>;
    // add table row
    admin_table = {
        self: this,
        row_add: function () {
            tr_id++;
            var $cloned_tr = $('#clone_room').clone(true);
            $cloned_tr.attr({
                id: 'discount_row_' + tr_id
            }).removeAttr('style');
            $cloned_tr.find("select,input").each(function (v, k) {
                if (typeof $(k).attr('name') != 'undefined') {
                    $(k).attr({
                        name: $(k).attr('name').replace('$', tr_id)
                    });
                }

            });
            $cloned_tr.find('select').attr({
                id: 'feature_' + tr_id
            }).removeClass('feature');
            $('#room_list').append($cloned_tr);
            maskedInputs.init();
        },
        row_remove: function (self) {
            $(self).closest('.panel').remove();
        }
    }
    var tr_id_data_sheet = <?=count($datasheet)?>;
    admin_table_data_sheet = {
        self: this,
        row_add: function () {
            tr_id_data_sheet++;
            var $cloned_tr = $('#data_sheet_tr').clone(true);
            $cloned_tr.attr({
                id: 'discount_row_' + tr_id_data_sheet
            }).removeAttr('style');
            $cloned_tr.find("input").each(function (v, k) {
                if (typeof $(k).attr('name') != 'undefined') {
                    $(k).attr({
                        name: $(k).attr('name').replace('$', tr_id_data_sheet)
                    });
                }

            });
            $('#data_sheet_holder').append($cloned_tr);
        },
        row_remove: function (self) {
            $(self).closest('tr').remove();
        }
    }

    date_range = {
        discount_picker: function () {
            if ($('.discound_date_range').length) {
                $('.discound_date_range').daterangepicker({
                    ranges: {
                        'Next 7 Days': [moment().add('days', 1), moment().add('days', 7)],
                        'Next 14 Days': [moment().add('days', 1), moment().add('days', 14)],
                        'Next Month': [moment().add('month', 1).startOf('month'), moment().add('month', 1).endOf('month')]
                    },
                    opens: 'left',
                    format: 'YYYY-MM-DD'
                });
            }
        }
    }

</script>

<div id="clone_room" class=" col-lg-12 panel panel-primary " style="display: none">
    <?php foreach ($option_list as $op): ?>
        <div class="col-lg-3">
            <label><?= $op->title ?></label>
            <select class="form-control" name="options[$][option][<?= url_title(strtolower($op->title)) ?>_id]">
                <option value="0"> default </option>
                <?php foreach ($op->options as $ops): ?>
                    <option value="<?= $ops->id ?>"> <?= $ops->title ?> </option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php endforeach; ?>
    <div class="col-lg-3">
        <label> Amount </label>
        <input type="text" name="options[$][price]" class="form-control price">
    </div>
    <label> &nbsp; </label>
    <a href="#" onclick="admin_table.row_remove(this)" class="btn btn-sm btn-default tr_remove pull-right ">Remove</a>
</div>

<table style="display: none" >
    <tr id="data_sheet_tr" >
        <td>
            <input type="text" name="data[$][title]" class="form-control" >
        </td>
        <td>
            <input type="text" name="data[$][data]" class="form-control" >
        </td>
        <td>
            <a onclick="admin_table_data_sheet.row_remove(this)" class="fa fa-times btn btn-danger" >  </a>
        </td>
    </tr>
</table>

</body>


</html>
