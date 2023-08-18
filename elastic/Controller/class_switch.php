<?php                                                                                
  use wolf05\helper\tatiyeNet;                                                  
  $Text=tatiyeNet::Text();                                                      
  $db=new tatiyeNet();                                                          
  #|--------------------------------------------------------------------------  
  #| Initializes SEGMENT INSERT                                                 
  #|--------------------------------------------------------------------------  
  #| Develover Tatiye.Net 2023                                                  
  #| @Date  Kamis 22 Juni 2023, 04:05:30 AM                                     
  if($_POST["segment"] == "class_switch_insert") {                              
  $val=tatiyeNet::validation([                                                  
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),              
     "a2"=>tatiyeNet::val("text",$_POST["a2"]   ,"2|Wajib diisi"),              
     "a3"=>tatiyeNet::val("text",$_POST["a3"]   ,"2|Wajib diisi"),              
  ]);                                                                           
  if (empty($val["error"])) {                                                   
     $data = array(                                                             
       "deskripsi"    =>$_POST["a1"],                                           
       "nama"    =>$_POST["a2"],                                                
       "title"    =>$_POST["a3"],                                               
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
  #| @Date  Kamis 22 Juni 2023, 04:05:30 AM                                     
  } elseif ($_POST["segment"] == "class_switch_update") {                       
    $val=tatiyeNet::validation([                                                
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),              
     "a2"=>tatiyeNet::val("text",$_POST["a2"]   ,"2|Wajib diisi"),              
     "a3"=>tatiyeNet::val("text",$_POST["a3"]   ,"2|Wajib diisi"),              
   ]);                                                                          
  if (empty($val["error"])) {                                                   
     $data = array(                                                             
       "deskripsi"    =>$_POST["a1"],                                           
       "nama"    =>$_POST["a2"],                                                
       "title"    =>$_POST["a3"],                                               
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
