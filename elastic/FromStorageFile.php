<?php 
use wolf05\helper\tatiyeNet;
?>
<div class="container">
   <div class="row">
     <div class="col-md-7" id="action121"></div>
   </div>
</div>

<script type="text/javascript">
    // FROM CASTOM
  $(document).ready(function(){
    $('#action121').tatiyeNetAppFromStorage({
             label        :true,
             storage      :{
               'tabel'   :'eyJ0b2tlbiI6MiwidWlkIjoiMSJ91',  
               'content' :'Outside',   //Outside,QuickSend 
               'az'      :'a',  
               'status'  :'dev',  //development
             },
             action      :{
                 // TYPE INPUT
                 'upload'     :['images',  '12' ,'Images'],
                 'nama'       :['text',    '6' ,'Judul'],
                 'title'      :['date',    '6' ,'Calender','yy/mm/dd'],
              },
              container :{
                contentType :'upload',   //Data,upload
                footerType  :'Standar',  //Standar,Block,Dialog,Standar-Inside
                stayleCalss :'btn btn-xs btn-primary',   
                titelCalss  :'Simpan',    
              }
     });
});
   // FROM CASTOM 
</script>

