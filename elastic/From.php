<h3>From (Input/Switch Box)</h3>
<ul>
   <li>tatiyeNetAppFrom.js</li>
</ul>
<div id="action1"></div>

<script type="text/javascript">
    // FROM CASTOM
  $(document).ready(function(){
    $('#action1').tatiyeNetAppFrom({
             label        :true,
             storage      :{
               'tabel' :'Token Tabel',  
               'key'    :'112',  
               'az'    :'do',  
             },
             action      :{
                 // TYPE INPUT
                 'nama'       :['text',    '3' ,'Judul'],
                 'password'   :['password','3' ,'Password'],
                 'search'     :['search',  '3' ,'Search'],
                 'calnder'    :['date',    '3' ,'Calender','yy/mm/dd'],
                 'upload'     :['file',    '6' ,'Upload'],
                 'email'      :['email',   '3' ,'Email'],
                 'nohp'       :['Hp',      '3' ,'No HP'],
                  // TYPE SELECT 
                 'custom'     :['select',  '3' ,'Categori' ,'custom' ,['Firefox','Chrome','Safari']],
                 'tabel'      :['select',  '3' ,'My tabel' ,'tabel' ,'query_uid_indikator' ,'name','name','tabel-CATEGORY'],
                 'Limit'      :['select',  '2' ,'Jumlah'   ,'limit',10],
                 'Tahun'      :['select',  '2' ,'Tahun'    ,'tahun',2021],
                 'Bulan'      :['select',  '2' ,'Bulan'    ,'bulan'],
                  // KODE WILAYAH
                 'Provinsi'   :['select',  '3' ,'Nama Provinsi' ,'Provinsi'  ,''],
                 'Kabupaten'  :['select',  '3' ,'Nama Kabupaten','Kabupaten' ,''],
                 'Kecamatan'  :['select',  '3' ,'Nama Kecamatan','Kecamatan' ,''],
                 'Desa'       :['select',  '3' ,'Nama Desa'     ,'Desa'      ,''],
                 // Switch Box
                 'custom'    :['switch',  '2' ,'Categori' ,'custom' ,['Firefox','Chrome','Safari'],'',true],
                 'tabel'     :['switch',  '3' ,'My tabel' ,'tabel' ,'query_uid_indikator' ,'name','name','tabel-CATEGORY',true],
                 'Limit'      :['switch',  '2' ,'Jumlah'   ,'limit',13,true],
                 'Tahun'      :['switch',  '2' ,'Tahun'    ,'tahun',2021,true],
                 'Bulan'      :['switch',  '2' ,'Bulan'    ,'bulan',true],

              }

     });

});

   // FROM CASTOM


</script>
