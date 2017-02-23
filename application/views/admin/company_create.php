<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/inc/head') ?>
    <style>
        .img-grid li {
            width: auto;
        }
    </style>
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/magnific-popup/magnific-popup.css">
</head>
<body class="side_nav_hover" >
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
                                <legend><span>Create Company   </span>

                                    <div class="site_nav">
                                        <a href="<?= base_url() ?>admin">Dashboard</a>
                                        &raquo;<a href="<?= base_url() ?>admin/company"> Company </a>
                                        &raquo; create
                                    </div>
                                </legend>

                            </fieldset>

                            <?php
                            $error= isset($error)? $error : $this->session->flashdata('error');
                            $valid= $this->session->flashdata('valid');

                            if(isset($valid)) $error = $valid;

                            if(isset($error)){
                                ?>
                                <div class="alert <?=isset($valid)?  'alert-success' : 'alert-danger'?> alert-dismissable fade in ">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?=$error?>
                                </div>
                                <?php
                            }

                            ?>

                            <form data-parsley-validate method="post">

                                <div class="row">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="name">Company Name</label>
                                                <input type="text" id="name" name="form[title]"
                                                       value="<?= $result->title ?>"
                                                       class="form-control" data-parsley-required="true">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="code">Company Code</label>
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
                                        <small> image size ( 220px * 80px ) </small>
                                        <ul  class="img-grid2 img-grid  clearfix" id="default_img_grid_upload" >
                                            <?php if($result->image): ?>
                                                <li   >
                                                    <div class="upload_img_single thumbnail">
                                                        <img src="<?= base_url() ?>uploads/thumbs/<?= $result->image ?>" class="thumbnail img-responsive" alt=""/>
                                                        <div class="upload_img_actions">
                                                            <a style="color: white" href="<?= base_url() ?>uploads/thumbs/<?= $result->image ?>" class="fa fa-search-plus pull-right btn  btn-success" >
                                                            </a>
                                                                <span   class=" fa fa-times pull-right btn  btn-danger  "
                                                                        onclick="image_upload.remove($(this))"> </span> <input
                                                                type="hidden" name="form[image]"
                                                                value="<?= $result->image ?>"></div>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6" >
                                        <label for="feature">Status</label>
                                        <select  class="form-control" name="form[status]"  id="status"  >
                                            <option value="1" <?= $result->status == 1 ? 'selected' : '' ?>  >YES</option>
                                            <option value="0" <?= is_object($result) && $result->status == 0 ? 'selected' : '' ?>  >NO</option>
                                        </select>
                                        <label > &nbsp; </label>
                                        <label for="code">URl For Your Company</label>
                                        <input type="text"  disabled=""
                                               value="<?= url_title($result->title) ?>"
                                               class="form-control">
                                        <small class="help-text"> It will auto generate after create
                                        </small>
                                    </div>

                                    <!--<div class="col-sm-4">
                                        <label>Most Popular </label>
                                        <div class="form-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="form[popular]" value="1" <?= $result->popular == 1 ? "checked":""  ?> >
                                                Yes
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="form[popular]"  value="0"  <?= $result->popular == 0 || empty($result->popular)   ? "checked":""  ?> >
                                                No
                                            </label>
                                        </div>
                                    </div>-->
                                    <div class="clearfix" ></div>


                                    <div class="form-group form-sep">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="des" class="req "> Profile </label>
                                                        <textarea name="form[profile]" id="description" cols="30"
                                                                  rows="4"
                                                                  class="form-control"><?= $result->profile ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="country-list form-control"  name="form[country]" data-id="<?= $result->country ?>" > </select>

                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control"  name="form[city]" value="<?= $result->city ?>" >
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control"   name="form[address]" value="<?= $result->address ?>"  >
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="tel" class="form-control"   name="form[phone]" value="<?= $result->phone ?>" >
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control"  name="form[email]" value="<?= $result->email ?>"  >
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="url" class="form-control"  name="form[website]" value="<?= $result->website ?>" >
                                                </div><!-- /.form-group -->
                                            </div><!-- /.col-* -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="employees"> Order No </label>
                                                    <input type="number" min="0" id="employees" name="form[order_no]" value="<?= $result->order_no ?>" class="form-control"  >
                                                </div>
                                            </div>
                                            <!--<div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="employees"> No Of Employees </label>
                                                    <input type="number" id="employees" name="form[employees]" value="<?/*= $result->employees */?>" class="form-control"  >
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row"  >
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="employees"> Username </label>
                                                    <input type="text"  data-parsley-required="true" id="employees" name="form[username]" value="<?= $result->username ?>" class="form-control"  >
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="employees"> Password </label>
                                                    <input type="text"  data-parsley-required="true" id="employees" name="form[password]" value="<?= $this->encrypt->decrypt($result->password ) ?>" class="form-control"  >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
<!-- parsley.js validation -->
<script src="<?= base_url() ?>assets/lib/Parsley.js/dist/parsley.min.js"></script>
<!-- form validation functions -->
<script src="<?= base_url() ?>assets/js/apps/tisa_validation.js"></script>

<!-- wysiwg editor -->
<script src="<?= base_url() ?>assets/lib/ckeditor/ckeditor.js"></script>
<script src="<?= base_url() ?>assets/lib/ckeditor/adapters/jquery.js"></script>



<!-- multiupload -->
<script src="<?= base_url() ?>assets/lib/jQuery-UI/jquery.ui.widget.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/extras/load-image.min.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
<script src="<?= base_url() ?>assets/lib/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>

<!-- magnific popup -->
<script src="<?= base_url() ?>assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>

<script src="<?= base_url() ?>assets/js/country.js"></script>

<script>
    $(function () {
        wysiwg.init();
        image_upload.default_image();
        tisa_image_lightbox.init();
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
                url: '<?= base_url() ?>admin/company/do_upload',
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
                        var upload_image_actions = $('<div class="upload_img_actions">').wrapInner('<span class=" fa fa-times pull-right btn  btn-danger  " onclick="image_upload.remove($(this))" > </span> <input type="hidden" name="form[image]" value="' + file.name + '" > ');
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
                            $(data.context.children()[index]).find('.upload_img_actions').append('<div class="alert alert-success">Upload success <br/><input type="hidden" name="form[image]" value="' + file.name + '" > </div>');
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

    // image lightbox
    tisa_image_lightbox  = {
        init: function() {
            if ($(' #default_img_grid_upload li a').length) {
                $(' #default_img_grid_upload li a').magnificPopup({
                    type: 'image',
                    gallery:{
                        enabled:true,
                        arrowMarkup: '<i title="%title%" class="glyphicon glyphicon-chevron-%dir% mfp-nav mfp-nav"></i>'
                    },
                    removalDelay: 500, //delay removal by X to allow out-animation
                    callbacks: {
                        beforeOpen: function() {
                            // just a hack that adds mfp-anim class to markup
                            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                            this.st.mainClass = 'mfp-zoom-in';
                        }
                    },
                    closeOnContentClick: true,
                    midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
                });
            }
        }
    }

</script>


</body>

</html>
