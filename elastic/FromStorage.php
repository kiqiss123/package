<h3>From Storage</h3>
<ul>
   <li>tatiyeNetAppFrom.js</li>
   <li>tatiyeNetAppFromStorage.js</li>
</ul>
<div id="action2"></div>
<script type="text/javascript">
    // FROM CASTOM
  $(document).ready(function(){
    $('#action2').tatiyeNetAppFromStorage({
             label        :true,
             storage      :{
               'tabel'   :'eyJ0b2tlbiI6MiwidWlkIjoiMSJ91',  
               'content' :'Outside',   //Outside,QuickSend 
               'az'      :'a',  
               'status'  :'end',  //development
             },
             action      :{
                 // TYPE INPUT
                 'nama'       :['text',    '6' ,'Judul'],
                 'title'      :['text',    '6' ,'Calender','yy/mm/dd'],
                 'deskripsi'  :['select',  '3' ,'Categori' ,'custom' ,['Firefox','Chrome','Safari']],
                
              },
              container :{
                contentType :'Data',     //Data,upload,file
                footerType  :'Standar',  //Standar,Block,Dialog,Standar-Inside
                stayleCalss :'btn btn-xs btn-primary',   
                titelCalss  :'Simpan',   
              }
     });
});
   // FROM CASTOM 
</script>