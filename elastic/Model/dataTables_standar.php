<?php 
use wolf05\helper\tatiyeNet;
use wolf05\helper\Curl\init;
$product = new init();
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
foreach ($product->instance()['data'] as $key => $row){
$json_arr=array(                                                 
  $row['NO'],        
  $row['categori'],  
  $row['title'],     
  $row['date'],      
  $row['time'],      
  $row['id'],        
);
array_push($products_arr["data"], $json_arr);
}
// $products_arr['paging']=$product->instance()['paging'];
$json_arr=array_merge($products_arr); 
echo json_encode($json_arr);
}