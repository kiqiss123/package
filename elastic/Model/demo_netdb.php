<?php 
use wolf05\helper\tatiyeNet;
use wolf05\helper\Curl\init;
$oauth = json_decode(file_get_contents("php://input"));
$db=new tatiyeNet();
 $products_arr["data"]=array();
$variable=$db->netDb()->redColumnSelect($oauth->tabel);
 // foreach ($variable as $key => $value) {
 //    	$json_arr[]=$value;
 // 	    array_push($products_arr["data"], $json_arr);
 // }

echo json_encode($variable);
