<?php                                                                                   
  use wolf05\helper\tatiyeNet;                                                     
  $Text=tatiyeNet::Text();                                                         
  $db=new tatiyeNet();                                                             
  #|--------------------------------------------------------------------------     
  #| Initializes SEGMENT INSERT                                                    
  #|--------------------------------------------------------------------------     
  #| Develover Tatiye.Net 2023                                                     
  #| @Date  Kamis 22 Juni 2023, 09:22:11 AM                                        
  if($_POST["segment"] == "HeaderGrid_insert") {                                   
  $val=tatiyeNet::validation([                                                     
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),                 
  ]);                                                                              
  if (empty($val["error"])) {                                                      
     $data = array(                                                                
       "myheader"    =>$_POST["a1"],                                               
       "time"     =>tatiyeNet::tm(),                                               
       "date"     =>tatiyeNet::dt("EN"),                                           
       "bulan"    =>tatiyeNet::dt("M"),                                            
       "tahun"    =>tatiyeNet::dt("Y"),                                            
       "user_id"  =>tatiyeNet::uidkey(),                                           
      );                                                                           
      $result=$db->que($data)->insert("query_uid_grid");                           
      $val["hasil"]    ="sukses";                                                  
  } else {                                                                         
      $val["hasil"]    ="error";                                                   
   };                                                                              
  #|--------------------------------------------------------------------------     
  #| Initializes  SEGMENT UPDATE                                                   
  #|--------------------------------------------------------------------------     
  #| Develover Tatiye.Net 2023                                                     
  #| @Date  Kamis 22 Juni 2023, 09:22:11 AM                                        
  } elseif ($_POST["segment"] == "HeaderGrid_update") {                            
    $val=tatiyeNet::validation([                                                   
     "a1"=>tatiyeNet::val("text",$_POST["a1"]   ,"2|Wajib diisi"),                 
   ]);                                                                             
  if (empty($val["error"])) {                                                      
     $data = array(                                                                
       "myheader"    =>$_POST["a1"],                                               
       "time"     =>tatiyeNet::tm(),                                               
       "date"     =>tatiyeNet::dt("EN"),                                           
       "bulan"    =>tatiyeNet::dt("M"),                                            
       "tahun"    =>tatiyeNet::dt("Y"),                                            
      );                                                                           
      $result=$db->que($data)->update("query_uid_grid","id =`1` AND user_id=1 ");  
      $val["hasil"]    ="sukses";                                                  
  } else {                                                                         
      $val["hasil"]    ="error";                                                   
   };                                                                              
  }                                                                                
   echo json_encode($val);                                                         
