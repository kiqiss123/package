<?php                                                                                
  use wolf05\helper\tatiyeNet;                                                  
  $Text=tatiyeNet::Text();                                                      
  $db=new tatiyeNet();                                                          
  #|--------------------------------------------------------------------------  
  #| Initializes SEGMENT INSERT                                                 
  #|--------------------------------------------------------------------------  
  #| Develover Tatiye.Net 2023                                                  
  #| @Date  Kamis 22 Juni 2023, 03:33:25 AM                                     
  if($_POST["segment"] == "outside_data_send_insert") {                         
  $val=tatiyeNet::validation([                                                  
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),              
     "a2"=>tatiyeNet::val("text",$_POST["a2"]   ,"2|Wajib diisi"),              
  ]);                                                                           
  if (empty($val["error"])) {                                                   
     $data = array(                                                             
       "nama"    =>$_POST["a1"],                                                
       "title"    =>$_POST["a2"],                                               
       "time"     =>tatiyeNet::tm(),                                            
       "date"     =>tatiyeNet::dt("EN"),                                        
       "bulan"    =>tatiyeNet::dt("M"),                                         
       "tahun"    =>tatiyeNet::dt("Y"),                                         
       "user_id"  =>tatiyeNet::uidkey(),                                        
      );                                                                        
      $result=$db->que($data)->insert("demo");                                  
      $val["hasil"]    ="sukses";                                               
  } else {                                                                      
      $val["hasil"]    ="error";                                                
   };                                                                           
  #|--------------------------------------------------------------------------  
  #| Initializes  SEGMENT UPDATE                                                
  #|--------------------------------------------------------------------------  
  #| Develover Tatiye.Net 2023                                                  
  #| @Date  Kamis 22 Juni 2023, 03:33:25 AM                                     
  } elseif ($_POST["segment"] == "outside_data_send_update") {                  
    $val=tatiyeNet::validation([                                                
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),              
     "a2"=>tatiyeNet::val("text",$_POST["a2"]   ,"2|Wajib diisi"),              
   ]);                                                                          
  if (empty($val["error"])) {                                                   
     $data = array(                                                             
       "nama"    =>$_POST["a1"],                                                
       "title"    =>$_POST["a2"],                                               
       "time"     =>tatiyeNet::tm(),                                            
       "date"     =>tatiyeNet::dt("EN"),                                        
       "bulan"    =>tatiyeNet::dt("M"),                                         
       "tahun"    =>tatiyeNet::dt("Y"),                                         
      );                                                                        
      $result=$db->que($data)->update("demo","id =`1` AND user_id=1 ");         
      $val["hasil"]    ="sukses";                                               
  } else {                                                                      
      $val["hasil"]    ="error";                                                
   };                                                                           
  }                                                                             
   echo json_encode($val);                                                      
