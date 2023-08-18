<?php 
use wolf05\helper\tatiyeNet;
use wolf05\helper\Curl\init;

// $products_arr["paging"]=array();
$product = new init();
$products_arr['draw']        =$_POST['paging'];
$products_arr['recordsTotal']=123;
$products_arr['recordsFiltered']=$_POST['records'];
$products_arr["data"]=array();
$product->token      =$_POST['authorization'];
$product->status     =$_POST['data'];
$product->secret     =$_POST['appId'];
$product->where      =$_POST['where'];
$product->etc        =$_POST['etc'];
$product->paging     =$_POST['paging'];
$product->records    =$_POST['records'];
$product->created    =date('Y-m-d H:i:s');
$product->modified   =true;
$product->create();
if (!empty($product->modified)) {
  if (!empty($product->instance()['data'])) {
       foreach ($product->instance()['data'] as $key => $row){
       $json_arr=array(                                                 
         $row['NO'],        
         $row['id'],        
         $row['categori'],  
         $row['title'],     
         $row['date'],      
         $row['time'],      
       );
       array_push($products_arr["data"], $json_arr);
       }
       // $products_arr['paging']=$product->instance()['paging'];
       $json_arr=array_merge($products_arr); 
       echo json_encode($json_arr);
  }
}