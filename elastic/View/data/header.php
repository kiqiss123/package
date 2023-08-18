<div id="action1"></div>
<script type="text/javascript">
    // FROM CASTOM
  $(document).ready(function(){
    $('#action1').tatiyeNetAppFromStorage({
             label        :true,
             storage      :{
               'tabel'   :'eyJ0YWJlbCI6ImRlbW8iLCJrZXkiOiJUYWJlbC0yIiwiYXoiOiJiLmlkIiwidWlkIjoiMSJ9',  
               'content' :'Outside',  
               'key'     :'outside_data_send',  
               'az'      :'a',  
               'status'  :'dev',  //development
             },
             action      :{
                 // TYPE INPUT
                 'nama'       :['text',    '7' ,'Judul'],
                 'title'      :['date',    '5' ,'Calender','yy/mm/dd'],  
              },
              container :{
                contentType :'Data',     //Data,upload,file
                footerType  :'Dialog',   //Standar,Block
                stayleCalss :'btn btn-xs btn-primary',   
                titelCalss  :'Simpan',   
              }
     });
});
   // FROM CASTOM 
</script>