<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/inc/head');  ?>
    <style>
        .todo_list_wrapper {
            background-color: transparent;
        }
        .todo_list_wrapper li {
            margin: 5px;
            background-color: white;
            padding: 5px;
            border: none;
            -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            margin-bottom: 0;
        }
        .todo_star {
            border-right: 1px solid #ddd ;
            padding: 0 10px 0 5px;
        }

    </style>

</head>
<body class="side_nav_hover" >
<?php $this->load->view('admin/inc/header');   ?>
<!-- main content -->
<div id="main_wrapper">
    <div class="page_content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12" >
                    <div class="todo_section  " >
                        <ul class="todo_list_wrapper todo_mix_list" id="sortable" >
                            <?php foreach($records as $k => $row): ?>
                                <li id="order_<?=$row->id ?>" > <div class="todo_star" > <?=$k+1?>  </div> <h5 class="todo_title" >  <?= $row->title ?>  </h5></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- side navigation -->
<?php $this->load->view('admin/inc/nav');   ?>


<!-- jQuery -->
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<!-- easing -->
<script src="<?=base_url()?>assets/js/jquery.easing.1.3.min.js"></script>
<!-- bootstrap js plugins -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- top dropdown navigation -->
<script src="<?=base_url()?>assets/js/tinynav.js"></script>
<!-- perfect scrollbar -->
<script src="<?=base_url()?>assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>

<!-- common functions -->
<script src="<?=base_url()?>assets/js/tisa_common.js"></script>

<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#sortable" ).sortable(
            {opacity: 0.6, cursor: 'move',
                update: function () {
                    var order = $(this).sortable("serialize");
                    $.post(URL.current, order, function (theResponse) {
                       $('#sortable li').each(function (k,li) {
                           $(li).find('.todo_star').html(k+1);
                       });
                    });
                }
            }

        ).disableSelection();
    });
</script>


</body>

</html>
