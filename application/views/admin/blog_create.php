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
                                <legend><span>Create Blog  </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/blog"> blog </a>
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

                                    <div class="tab-content">
                                        <div id="prod_tab_general" class="tab-pane active">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="name">blog Name</label>
                                                        <input type="text" id="name" name="form[title]"
                                                               value="<?= $result->title ?>"
                                                               class="form-control" data-parsley-required="true">
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <label for="code">blog Code</label>
                                                        <input type="text" id="code" name="form[code]" disabled=""
                                                               value="<?= $result->code ?>"
                                                               class="form-control">
                                                        <small class="help-text"> It will auto generate after create
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix" ></div>
                                            <div class="col-lg-6" >
                                                <div class="fileinput-button btn btn-success sepH_b">
                                                    <i class="fa fa-plus"></i>
                                                    <span>Add files...</span>
                                                    <input id="default_image_upload" type="file" name="userfile"  >
                                                </div>
                                                <small> image size ( 770px * 386px ) </small>
                                                <ul  class="img-grid2 img-grid  clearfix" id="default_img_grid_upload" >
                                                    <?php if($result->image): ?>
                                                        <li   >
                                                            <div class="upload_img_single thumbnail">
                                                                <img src="<?= base_url() ?>uploads/thumbs/<?= $result->image ?>" class="thumbnail img-responsive" alt=""/>
                                                                <div class="upload_img_actions">
                                                                <span   class=" fa fa-times pull-right btn  btn-danger  "
                                                                        onclick="image_upload.remove($(this))"> </span> <input
                                                                        type="hidden" name="form[image]"
                                                                        value="<?= $result->image ?>"></div>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <div class="clearfix" ></div>


                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="short" class="req">blog Short Description (maximum text 150) </label>
                                                        <textarea name="form[short]" id="short" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->short ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group form-sep">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="description" class="req">blog Description</label>
                                                        <textarea name="form[description]" id="description" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->description ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group form-sep ">
                                                    <label for="map">Order No   </label>
                                                    <input type="text" name="form[order_no]" class="form-control" value="<?= $result->order_no ?>"  >
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
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

<!-- multiupload -->
<script src="<?= base_url() ?>assets/lib/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>


<script>
    $(function () {
        wysiwg.init();
        image_upload.init();
        image_upload.default_image();
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
                    url: '<?= base_url() ?>admin/blog/do_upload',
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
        } ,
        default_image : function(){
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
                url: '<?= base_url() ?>admin/blog/do_upload',
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



</script>


</body>


</html>
