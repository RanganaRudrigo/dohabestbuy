<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('admin/inc/head');  ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .todo_list_wrapper {
            background-color: transparent;
        }
        .todo_list_wrapper li {
            font-size: 12px !important;
            background-color: white;
            padding: 4px !important; ;
            border: none;
            -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
            margin: 2px ;
            float: left;
        }
        .todo_list_wrapper li:hover {
            background-color: #FFFF00;
        }
        .todo_star {
            border-right: 1px solid #ddd ;
            padding: 0 10px 0 5px;
        }
        /* Small devices (tablets, 768px and up) */
        @media (max-width: 767px) {
            .todo_list_wrapper li {
                width: 99% !important;
            }
        }



        /* Large devices (large desktops, 1200px and up) */
        @media (min-width: 768px) {
            .todo_list_wrapper li {
                width: 32% !important;
            }
        }
        #sortable2 {
            margin: 0;
            padding: 0;
        }
        #sortable2 li {
            width: 100% !important;
            list-style: none;
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
                <div class="col-lg-3"  >
                    <div class="panel panel-default" >
                        <div class="panel-body" >
                            <div class="row" >
                                <?= form_open('',['method'=>'get']) ?>
                                <div class="form-group" >
                                    <label for="manufacture">  Main Category </label>
                                    <select name="category_id" class="form-control" >
                                        <?php foreach($categories  as $category ):  ?>
                                            <option value="<?=$category->id?>"  <?= $category->id == $this->input->get('category_id') ? "selected" :"" ?>  > <?=$category->title ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group" >
                                    <span class="new_result_container" ></span>
                                </div>
                                <div class=" form-group" >
                                    <button class="btn btn-info pull-right " > Filter </button>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" >
                        <div class="panel-body" >
                            <div class="row" >
                                <div class=" form-group" >
                                    <label for="manufacture"> Search </label>
                                    <input type="search" id="search_list" class="form-control" >
                                </div>
                                <ul class="todo_list_wrapper todo_mix_list row connectedSortable" id="sortable2" >

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9" >
                    <div class="todo_section  " >
                        <ul class="todo_list_wrapper todo_mix_list row connectedSortable" id="sortable" >
                            <?php foreach($products['products'] as $k => $row): ?>
                                <li id="order_<?=$row->id ?>"   > <div class="todo_star" > <?=$k+1?>  </div> <div class="todo_title" title="<?=$row->title?>" >  <?= character_limiter($row->title,25) ?>  </div></li>
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
    <?php foreach($products['products'] as $k => $row):
        $d[] = [
            'label'=>$row->title ,
            'desc'=>"order_$row->id" ,
            'value'=> character_limiter($row->title,25)
        ];
    endforeach; ?>

    $(function() {
        $( "#sortable" ).sortable({
                opacity: 0.6,
                cursor: 'move',
                connectWith: ".connectedSortable",
                update: function () {
                    var order = $(this).sortable("serialize");
                    $.post(URL.current, order, function (theResponse) {
                        $('#sortable li').each(function (k,li) {
                            $(li).find('.todo_star').html(k+1);
                        });
                    });
                }
            }).disableSelection();
    });
    $(function () {
        $('#search_list').blur(function (e) {
            e.preventDefault();e.stopPropagation();
            console.log($(this).val());
        }).autocomplete({
            source: <?=json_encode($d)?> ,
            select : function (event, ui) {
                console.log(ui);
               $("#"+ui.item.desc).remove();
                var li = $("<li>").attr({
                    id : ui.item.desc
                });
                li.append(
                    $("<div>").attr({
                        class:'todo_star'
                    })
                );
                li.append(
                    $("<div>").attr({
                    class:'todo_title' ,
                    title : ui.item.label
                    }).html(ui.item.value)
                );
                $("#sortable2").append(li).sortable({
                    opacity: 0.6,
                    cursor: 'move',
                    connectWith: ".connectedSortable"
                }).disableSelection();
            }
        });
        $("select[name=category_id]").change(function (e) {
            e.preventDefault();
            var $this = $(this);
            $.ajax({
                url : "<?=base_url('admin/category/subMenu')?>",
                data : { category_id : $this.val() } ,
                dataType : "json" ,
                success : function(json){
                    if(json.length){
                        var sub_id = <?= (int)$this->input->get('sub_id'); ?> ;
                        var option = "<option value='0' > -------------------- </option>" ;
                        for(var i in json){
                            if($.isNumeric(i))
                                option += "<option value='"+ json[i].id +"'  "+ (sub_id == json[i].id ? "selected":"") +"   >"+ json[i].title +"</option>";
                        }
                        $(".new_result_container").html(
                            $("<select>").attr({
                                "class" : "form-control",
                                name : "sub_id",
                            }).append(option)
                        );
                    }else{
                        $(".new_result_container").html("");
                    }
                }
            })
        })
        <?php if($this->input->get('category_id')): ?>
        .val(<?=$this->input->get('category_id')?>).trigger('change')
        <?php endif; ?>;
    })
</script>


</body>

</html>
