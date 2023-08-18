<?php 
 use wolf05\helper\tatiyeNet;
?>


<div id="myTable"></div>
<script type="text/javascript">
    /*
    |--------------------------------------------------------------------------
    | Initializes From 
    |--------------------------------------------------------------------------
    | Develover Tatiye.Net 2020
    | @Date 
    */
        $(document).ready(function () {
            var Byid='myTable';
           // Menu Arsip Right Click
              $('#'+Byid).appContextMenu({
                 "attrId"     :"#arsip",
                 "keyContent" :'dataTables',
                 "keyInsert"  :"demo_MTU0",
                 "keyDelete"  :'demo_MTM4',
                 "inspect"    :'',
                 "styletop"   :10,
           });
                   // AND Menu Arsip Right Click

           // FROM OPTION
           $('#fromAction_'+Byid).tatiyeNetAppFromAction({
                    label        :false,
                    content     :'datatables',
                    action      :{
                        'title'       :['text',    '6','Judul'],
                        'categori'    :['select',  '3' ,'Categori','query_uid_indikator' ,'name','name','tabel-CATEGORY'],
                        'date'        :['date',    '3' ,'Tanggal'],
                     },
            });
           // AND FROM OPTION

           // TABEL TOKEN DAN TABEL HEAD
           var row=$('#'+Byid).appSelectv1DataTables({
                 "appId"     :"eyJ0YWJlbCI6IjM4X2RhdGFUYWJsZXMiLCJ1aWQiOiIxIn0",
                 "tableHead" :['No','Categori','Judul','Tanggal','Time'],
                 "fileName"  :'demo',
           });
           // AND TABEL TOKEN DAN TABEL HEAD

            var myDataTable=$('#'+Byid).DataTable({
                "processing": true,
                //"serverSide": true,
               "dom": 'B<"clear">lfrtip',
               "buttons": [           

                 {   
                     extend: 'pdfHtml5',
                     filename: row.fileName,
                      orientation: 'landscape',
                      pageSize: 'LEGAL',
                     footer: true, 
                     exportOptions: {
                         modifier: {
                             page: 'current'
                         },
                         
                     }
                 },
                 {   
                     extend: 'csvHtml5',
                     filename: row.fileName,
                     footer: true, 
                     exportOptions: {
                         modifier: {
                             page: 'current'
                         }
                     }
                 },
                 {   
                     extend: 'excelHtml5',
                     filename: row.fileName,
                     footer: true, 
                     exportOptions: {
                         modifier: {
                             page: 'current'
                         }
                     }
                 },
                 {   
                     extend: 'print',
                     filename: row.fileName,
                     footer: true, 
                     exportOptions: {
                         modifier: {
                             page: 'current'
                         }
                     }
                    },
                                 {
                   'text': '<span class="tdText"><i class="picons-143"></i> <span id="tText">Refresh</span></span>',
                    action: function ( e, dt, node, config ) {
                      $('#myTable').DataTable().ajax.reload( null, false);
                    }
                  
                },                
            ],  
               //PENGATURAN MENU Right Click
               "fnCreatedRow": function( nRow, aData, iDataIndex ) {
                   $(nRow).attr('id', 'arsip');
                   $(nRow).attr('data-uid', aData[5]);
                   $(nRow).attr('data-header', aData[6]);
                   $(nRow).attr('data-token', row.appid);
                 },
                   // DISINI SISIP SCRIP TAMBAHAN
                "ajax": {
                    "url":row.autoload,
                    "type": 'PUT',
                    "data":{
                        "etc"      :'',
                        "where"    :"",
                        "paging"   :"2",
                        "records"  :"10"
                    }
                },
                    "columnDefs" : [
                     // { 'visible': false, 'targets': [5] },
                     // { 'visible': false, 'targets': [6] },
                      // DISINI SISIP SCRIP TAMBAHAN
                    ],
                   
                    // END SCRIP
                   "language": {
                         "searchPlaceholder": 'Search...',
                         "sSearch": '',
                         "lengthMenu": '_MENU_ ',
                    },


            });
     
           $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
           // GET From Action
            var columnRoleoption ={
                 '#title_a1'           :['keyup','2'],
                 '#categori_a2'        :['change','1'],
                 '#datepickermd3'      :['change','3'],
             };  
            $.each(columnRoleoption,function(index,row){
                  $(document).on(row[0], index, function(){
                       myDataTable
                       .columns(row[1])
                       .search(this.value)
                       .draw();
                   });
              });
            // AND GET From Action
        });


    /*
    |--------------------------------------------------------------------------
    | AND From 
    |--------------------------------------------------------------------------
    */
    /*
    |--------------------------------------------------------------------------
    | Initializes Update Data 
    |--------------------------------------------------------------------------
    | Develover Tatiye.Net 2022
    | @Date  Jum 02 Jun 2023 04:37:47  WITA
    */
    $(document).on('blur', '.update', function(){
     var id = $(this).data("id");
     var column_name = $(this).data("column");
     var value = $(this).text();
     if (column_name =='categori') {
     } else if (column_name =='date') {
     } else {
        var formData ='id='+id+'&column='+column_name+'&value='+value;
        var sendir='demo/View/send';
        mySendCustom('editTabel',sendir,formData);
     }
    });


   /* and class Update Data */
   

</script>
