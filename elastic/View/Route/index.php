<div id="insideSendmyRute"></div>
<script type="text/javascript">

  $(document).ready(function(){
    $('#insideSendmyRute').tatiyeNetAppFromStorage({
             label        :false,
             storage      :{
               'tabel'   :'eyJ0b2tlbiI6MiwidWlkIjoiMSJ9',  
               'content' :'InsideSend',   //Outside,QuickSend,InsideSend
               'az'      :'ar',  
               'status'  :'dev',  //development
             },
             action      :{
                 // TYPE INPUT
                 'package'    :['select',   '6' ,'Package' ,'tabel' ,'package' ,'pacname','elements',''],
                 'tabel'      :['select',   '6' ,'Tabel'   ,'custom' ,['demo','notes','archive']],
                 'filename'   :['text',    '12' ,'File Name'],
                
              },
              container :{
                contentType :'Data',     //Data,upload,file
                footerType  :'Block',  //Standar,Block,Dialog,Standar-Inside
                stayleCalss :'btn btn-xs btn-primary bold',   
                titelCalss  :'Tambah Route',   
              }
     });
});


   /*
   |--------------------------------------------------------------------------
   | AND title 
   |--------------------------------------------------------------------------
   */
function insideSendmyRute(storage,validasi,za) {
    var row=insideValidasi(storage,validasi,za);
   if (row.hasil !=='error') {
           var myToken= setControllerRoute({
             filename:row.data.filename,
             package :row.data.package,
             tabel   :row.data.tabel,
           });
     }
}







</script>