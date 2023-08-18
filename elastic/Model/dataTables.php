<?php 
use wolf05\helper\tatiyeNet;
use wolf05\helper\Curl\init;
$products_arr["data"]=array();
// $products_arr["paging"]=array();
$product = new init();
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
$myId=tatiyeNet::encode64($row['id']);
 
$selectOption=tatiyeNet::intersect([
  'categori'=>[$row['id'],$row['categori']],
])->selectOption();

$contenteditable=tatiyeNet::intersect([
  'title'=>[$row['id'],$row['title']],
  'time'=>[$row['id'],$row['time']],
])->contenteditable();

$datepicer=tatiyeNet::intersect([
  'date'=>[$row['id'],$row['date']],
])->datepicer();

  $sub_array = array();
  $sub_array[] = $row['NO'];
  $sub_array[] =$selectOption['categori'];
  $sub_array[] =$contenteditable['title'];
  $sub_array[] =$datepicer['date'];
  $sub_array[] =$contenteditable['time'];
  $sub_array[] =$myId;
  $sub_array[] =$row["title"];
 
array_push($products_arr["data"], $sub_array);
}
$merge=array(
  'draw'            =>$product->instance()['draw'],
  'recordsTotal'    =>$product->instance()['recordsTotal'],
  'recordsFiltered' =>$product->instance()['recordsFiltered'],
);
$json_arr=array_merge($merge,$products_arr); 
echo json_encode($json_arr);
}
?>
