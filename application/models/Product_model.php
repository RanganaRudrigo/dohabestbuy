<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 2/19/2016
 * Time: 4:07 PM
 */
class Product_model extends MY_Model
{
    var $table = "product";
    var $image = "product_image";
    var $op = "product_option";
    var $op_more = "option_more";
    var $pro_cat = "product_category";
    var $datasheet = "product_data_sheet";
    var $qty = "product_item_qty_update";
    var $pre = "PRO";
    var $new_arrivals = "new_arrivals";
    var $todaydeals = "todaydeals";
    var $buyonegetone = "buyonegetone";
    var $bundleoffer = "bundleoffer";
    var $belowhunderd = "belowhunderd";
    var $popular_product = "popular_product";

    function getALL(){
        return $this->db->from($this->table)
            ->select(" $this->table.id , $this->table.code , $this->table.title , $this->table.image , $this->table.price , CONCAT ( IFNULL(B.title,'') , CASE WHEN B.title IS NOT NULL THEN ' > ' ELSE '' END ,A.title) as category ",false)
            ->join("category A" ,"A.id = $this->table.category")
            ->join("category B" ,"A.category_id = B.id","LEFT")
            ->where("{$this->table}.status != ",2)
            ->get()->result();
    }

    function getAllForUpdate(){

        return $this->db->from($this->op)
            ->select(" $this->table.id , $this->table.code , $this->table.title , $this->table.image , $this->op.price , CONCAT ( IFNULL(B.title,'') , CASE WHEN B.title IS NOT NULL THEN ' > ' ELSE '' END ,A.title) as category ",false)
            ->select(" $this->op.qty",false)
            ->join($this->table, " $this->table.id = $this->op.product_id ")
            ->join("category A" ,"A.id = $this->table.category")
            ->join("category B" ,"A.category_id = B.id","LEFT")
            ->join("order_detail" ,"order_detail.product_id = $this->table.id " , "LEFT" )
            ->join("order" ,"order.id = order_detail.order_id  " ,'LEFT'  )
            ->join("$this->qty" ,"$this->qty.product_option_id = $this->op.product_option_id ", "LEFT" )
            ->join("$this->op_more C" ,"C.id = $this->op.color_id ", "LEFT" )
            ->join("$this->op_more S" ,"S.id = $this->op.size_id ", "LEFT" )
            ->select("C.title as color , S.title as size , $this->op.product_option_id" , false)
            ->where("{$this->table}.status ",1 )
            ->group_by("$this->op.product_option_id ")
            ->get()->result();

    }

    function option(){
        $this->db->update( $this->op , array( 'status' =>  0) , "product_id  = $this->id" );
        foreach($this->input->post('options') as $option ){
            $this->db->replace(
                $this->op ,
                array_merge( [
                    'product_option_id' => isset($option['product_option_id']) ? $option['product_option_id'] : 0 ,
                    'status' =>  1 ,
                    'product_id' => $this->id ,
                    "qty" => price($option['qty']) ,
                    "price" => price($option['price'])
            ] , $option['option'] )   ) ;
        }
        $this->db->delete( $this->op , array( 'status' =>  0 ) , "product_id  = $this->id" );
        return true;
    }

    function insertDataSheet(){

        $this->db->trans_begin();

        if( ! $this->cat )
             $this->load->model("category_model","cat");

        $cat = $this->cat->getBy( array('id'=> $this->input->post("form[category]") ) , 1 , "category_id");
        if($cat->category_id != 0 ) {
            $c[0] = array( "product_id" => $this->id , "cat_id" => $cat->category_id )  ;
            $c[1] = array( "product_id" => $this->id , "cat_id" =>  $this->input->post("form[category]")    )  ;
        }else{
            $c[0] = array( "product_id" => $this->id , "cat_id" => $this->input->post("form[category]")   )  ;
        }

        $this->db->where("product_id",$this->id);
        $this->db->delete( $this->pro_cat );
        $this->db->insert_batch($this->pro_cat,$c);


        $this->db->update( $this->datasheet , array( 'status' =>  1) , "product_id  = $this->id" );

        foreach($this->input->post('data') as $option ){

            $this->db->replace(
                $this->datasheet
                ,
                array(  'id' => $option['id'] ,'status' =>  0 ,'product_id' => $this->id , 'title' => $option['title'] , 'data' =>  $option['data']     )
            ) ;
        }
        $this->db->delete( $this->datasheet , array( 'status' =>  1) , "product_id  = $this->id" );

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            return FALSE ;
        }else{
            $this->db->trans_commit();
            return TRUE ;
        }
    }

    function getMoreOption($id){
        return $this->db->from($this->op)->where('product_id',$id)->get()->result();
    }

    function getMoreDataSheet($id){
        return $this->db->from($this->datasheet)->where('product_id',$id)->get()->result();
    }


    function insertHome($table,$data){
        $this->db->truncate($table);
        if(! empty($data))
            $this->db->insert_batch($table , $data);
    }

    function getHome($table){
        return $this->db->get($table)->result();
    }

    function getHomeWithDetails($table , $limit= 0){
        if($limit > 0 )
            $this->db->limit($limit);

        $product = $this->db->from($this->table)
            ->join($table , "$table.id = $this->table.id ")
            ->select("$this->table.id , title , image  , short ,  discount")
            ->where("$this->table.status",1)
            ->get()
            ->result();

        foreach ($product as &$pro ){
            $option = $this->db->from($this->op)->where("product_id",$pro->id)->select_min("price")->select("product_option_id")->get()->row();
            $pro->price = $option->price;
            $pro->product_option_id = $option->product_option_id ;
        }

        return $product ;
    }

    function getOption($id){


        $mainOption = $this->db->from('option')
            ->select("option.*")
            ->join("option_more" , "option_more.option_id = option.id")
            ->join("$this->op" , "$this->op.option_id = option_more.id")
            ->where("$this->op.product_id",$id)
            ->where('option_more.status',1)
            ->where('option.status',1)
            ->group_by("option.id")
            ->get()->result();

        $options = $this->db->from('option_more')
            ->select("option_more.* , option.id as main , $this->op.id , $this->op.price_prefix ,  $this->op.price")
            ->join("$this->op" , "$this->op.option_id = option_more.id")
            ->join("option" , "option_more.option_id = option.id")
            ->where("$this->op.product_id",$id)
            ->where('option_more.status',1)
            ->order_by("option_more.id")
            ->get()->result();


        foreach($mainOption as &$option ) {
            foreach($options as $op ){
                if($option->id == $op->main   ) {
                    $option->sub[] = $op;
                }
            }
        }

        return $mainOption ;

    }

    function getByAllDetail($id){
        return $this->db->from($this->table)
            ->select("$this->table.* , category.title as category , manufacturer.title as manufacture, company.title as company ")
            ->join("category" ,"category.id = $this->table.category")
            ->join("manufacturer" ,"manufacturer.id = $this->table.manufacture")
            ->join("company" ,"company.id = $this->table.company_id")
            ->where("$this->table.id",$id )
            ->get()->row();

    }

    function getProList($category , $field , $limit = true  ){

        $this->db->start_cache();

        $this->db->from($this->table);
        $this->db->select($field);
        $this->db->where("$this->table.status",1);
        $this->db->join($this->pro_cat , "$this->table.id = $this->pro_cat.product_id"); 
        $this->db->where("$this->pro_cat.cat_id" , $category ); 
        //$this->db->where(" select id from category where id = $this->pro_cat.cat_id and status=1" , null, false); 
		
        $filter = $this->input->get('filter') ;
        if( $this->input->get('filter') && ! empty($filter) ) {
            sort($filter);
            $this->db->join($this->op , "$this->table.id = $this->op.product_id" );
            foreach($filter as $f )
                $this->db->where("option_id", $f ) ;
        }

        $this->db->order_by("order_no,id");

        $this->db->stop_cache();
        $p['count'] =  $this->db->count_all_results();

        if($limit)
        if($this->input->get('limit')  != "all" ) {
            $d['limit']   = $this->input->get('limit') ?  $this->input->get('limit') : LIMIT ;
            $page = array(   $d['limit'] ,   $d['limit']  * ( ($this->input->get('page_id')? $this->input->get('page_id') : 1)  - 1 ) )  ;
            $this->db->limit($page[0] , $page[1]);
        }

        $p['products'] =  $this->db->get()->result(); 
        $this->db->flush_cache();

        foreach ($p['products'] as &$pro ){
            $option = $this->db->from($this->op)->where("product_id",$pro->id)->select_min("price")->select("product_option_id")->get()->row();
            $pro->price = $option->price;
            $pro->product_option_id = $option->product_option_id ;
        }

        return $p ;
    }

    function getProSearch($category , $field ){
        $this->db->start_cache();
        $this->db->from($this->table);
        $this->db->select($field);
        $this->db->where("$this->table.status",1);
        if($category) {
            $this->db->join($this->pro_cat , "$this->table.id = $this->pro_cat.product_id");
            $this->db->where("$this->pro_cat.cat_id" , $category );
        }
        $this->db->like("$this->table.title",$this->input->get('search_query'));
        $this->db->order_by("order_no,id");
        $this->db->stop_cache();
        $p['count'] =  $this->db->count_all_results();
        if($this->input->get('limit')  != "all" ) {
            $d['limit']   = $this->input->get('limit') ?  $this->input->get('limit') : LIMIT ;
            $page = array(   $d['limit'] ,   $d['limit']  * ( ($this->input->get('page_id')? $this->input->get('page_id') : 1)  - 1 ) )  ;
            $this->db->limit($page[0] , $page[1]);
        }
        $p['products'] =  $this->db->get()->result(); 
        $this->db->flush_cache();
        foreach ($p['products'] as &$pro ){
            $option = $this->db->from($this->op)->where("product_id",$pro->id)->select_min("price")->select("product_option_id")->get()->row();
            $pro->price = $option->price;
            $pro->product_option_id = $option->product_option_id ;
        }
        return $p ;
    }

    function getProCount($category ){

        $this->db->from($this->table);
        $this->db->where("$this->table.status",1);
        $this->db->join($this->pro_cat , "$this->table.id = $this->pro_cat.product_id");
        $this->db->where("$this->pro_cat.cat_id" , $category );
        $filter = $this->input->get('filter') ;
        if( $this->input->get('filter') && ! empty($filter) ) {
            sort($filter);
            $this->db->join($this->op , "$this->table.id = $this->op.product_id" );
            foreach($filter as $f )
                $this->db->where("option_id", $f ) ;
        }
        return   $this->db->count_all_results();

    }

    function getRelatedPro($category ,$id ,$field , $limit  ){

        $this->db->where("id!=",$id);
        $this->db->from($this->table);
        $this->db->select($field);
        $this->db->where("$this->table.status",1);
        $this->db->join($this->pro_cat , "$this->table.id = $this->pro_cat.product_id");
        $this->db->where("$this->pro_cat.cat_id" , $category );
        $this->db->limit($limit);
        $product = $this->db->get()->result();

        foreach ($product as &$pro ){
            $option = $this->db->from($this->op)->where("product_id",$pro->id)->select_min("price")->select("product_option_id")->get()->row();
            $pro->price = $option->price ;
            $pro->product_option_id = $option->product_option_id ;
        }

        return $product ;
    }

    function updateStock(){
        return $this->db->insert($this->qty ,
            array(
                "product_option_id" => $this->input->get("id") ,
                "qty" => $this->input->get("qty") ,
                "date" => date("Y-m-d h:m:s") ,
                "user_id" => $this->session->userdata('id')
            )
        ) ?  1 : 0 ;
    }

    function getStock($product_id){
       /*return $this->db->from("$this->table")
            ->join("order_detail" ,"order_detail.product_id = $this->table.id " , "LEFT" )
            ->join("order" ,"order.id = order_detail.order_id and order.status = 0 " , "LEFT"  )
            ->join("$this->qty" ,"$this->qty.product_id = $this->table.id ", "LEFT" )
            ->where("$this->table.id",$id)
            ->select("  (  IFNULL(SUM($this->qty.qty),0 )   -  ( CASE WHEN order.status = 0 THEN IFNULL(SUM(order_detail.qty),0 ) ELSE 0 END )   )  as qty ",false)->get()->row();*/
        $option['all'] = $this->db->from($this->op)
            ->join("$this->op_more C","$this->op.color_id = C.id","LEFT")
            ->join("$this->op_more S","$this->op.size_id = S.id","LEFT")
            ->select("$this->op.* , C.title as color , S.title as size")
            ->where("product_id",$product_id)
            ->get()->result();
        $option['color'] = $this->db->from($this->op)
            ->join("$this->op_more C","$this->op.color_id = C.id" )
            ->select("C.title as color ,  C.id as color_id    ")
            ->where("product_id",$product_id)
            ->group_by("C.id")
            ->get()->result();
        $option['size'] = $this->db->from($this->op)
            ->join("$this->op_more S","$this->op.size_id = S.id" )
            ->select("S.title as size ,  S.id as size_id    ")
            ->where("product_id",$product_id)
            ->group_by("S.id")
            ->get()->result();

        return $option;


    }

    function getOptionByProductOptionId($product_option_id){
        return $this->db->from($this->op)->where("product_option_id",$product_option_id)->get()->row();
    }
    
}

//- IFNULL(SUM(order_detail.qty),0 )