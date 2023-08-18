<?php 
 use wolf05\helper\tatiyeNet;
 use wolf05\helper\Curl\init;
 $products_arr["data"]=array();
 $products_arr["paging"]=array();
 $product = new init();
 $product->token      =$_POST['authorization'];
 $product->status     =$_POST['data'];
 $product->secret     =$_POST['appId'];
 $product->variabel   =$_POST['variabel'];
 $product->where      =$_POST['where'];
 $product->syntax     =$_POST['syntax'];
 $product->created    =date('Y-m-d H:i:s');
 $product->modified   =true;
 $product->create();

  if (!empty($product->modified)) {
      foreach ($product->instance()['data'] as $key => $row) {
		$json_arr=array(                                                   
		  'NO'          =>$row['NO'],         
		  'id'          =>$row['id'],         
		  'ulr_id'      =>$row['ulr_id'],     
		  'categori'    =>$row['categori'],   
		  'title'       =>$row['title'],      
		  'deskripsi'   =>$row['deskripsi'],  
		  'detail'      =>$row['detail'],     
		  'nama_file'   =>$row['nama_file'],  
		  'date'        =>$row['date'],       
		  'view'        =>$row['view'],       
		  'time'        =>$row['time'],       
		  'tahun'       =>$row['tahun'],      
		  'bulan'       =>$row['bulan'],      
		  'images'      =>$row['images'],     
		  'meta'        =>$row['meta'],       
		  'tanggal'     =>$row['tanggal'],    
		  'vistor'      =>$row['vistor'],     
		  'count'       =>$row['count'],      
		);
		array_push($products_arr["data"], $json_arr);
      }
      $products_arr['paging']=$product->instance()['paging'];
      $json_arr=array_merge($products_arr); 
      echo json_encode($json_arr);

  } 
		     
	
