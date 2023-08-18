<?php                                                                                       
  use wolf05\helper\tatiyeNet;                                                         
  $Text=tatiyeNet::Text();                                                             
  $db=new tatiyeNet();                                                                 
  #|--------------------------------------------------------------------------         
  #| Initializes SEGMENT INSERT                                                        
  #|--------------------------------------------------------------------------         
  #| Develover Tatiye.Net 2023                                                         
  #| @Date  Kamis 22 Juni 2023, 02:37:27 PM                                            
  if($_POST["segment"] == "myRute_insert") {                                           
  $val=tatiyeNet::validation([                                                         
     "ar1"=>tatiyeNet::val("text",$_POST["ar1"]   ,"2|Wajib diisi"),                   
     "ar2"=>tatiyeNet::val("text",$_POST["ar2"]   ,"2|Wajib diisi"),                   
  ]);                                                                                  
  if (empty($val["error"])) {                                                          
     $data = array(                                                                    
       "tabel"    =>$_POST["ar1"],                                                     
       "uid"    =>$_POST["ar2"],                                                         
       "user_id"  =>tatiyeNet::uidkey(),                                               
      );                                                                               
      $result=$db->que($data)->insert("query_uid_comments");                           
      $val["hasil"]    ="sukses";                                                      
  } else {                                                                             
      $val["hasil"]    ="error";                                                       
   };                                                                                  
  #|--------------------------------------------------------------------------         
  #| Initializes  SEGMENT UPDATE                                                       
  #|--------------------------------------------------------------------------         
  #| Develover Tatiye.Net 2023                                                         
  #| @Date  Kamis 22 Juni 2023, 02:37:27 PM                                            
  } elseif ($_POST["segment"] == "myRute_update") {                                    
    $val=tatiyeNet::validation([                                                       
     "ar1"=>tatiyeNet::val("text",$_POST["ar1"]   ,"2|Wajib diisi"),                   
     "ar2"=>tatiyeNet::val("text",$_POST["ar2"]   ,"2|Wajib diisi"),                   
   ]);                                                                                 
  if (empty($val["error"])) {                                                          
     $data = array(                                                                    
       "tabel"    =>$_POST["ar1"],                                                     
       "uid"    =>$_POST["ar2"],                                                       
       "time"     =>tatiyeNet::tm(),                                                   
       "date"     =>tatiyeNet::dt("EN"),                                               
       "bulan"    =>tatiyeNet::dt("M"),                                                
       "tahun"    =>tatiyeNet::dt("Y"),                                                
      );                                                                               
      $result=$db->que($data)->update("query_uid_comments","id =`1` AND user_id=1 ");  
      $val["hasil"]    ="sukses";                                                      
  } else {                                                                             
      $val["hasil"]    ="error";                                                       
   };                                                                                  
  }                                                                                    
   echo json_encode($val);                                                             
