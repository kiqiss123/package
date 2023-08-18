<?php 
use wolf05\helper\tatiyeNet;
?>
<div id="setEtc"></div>
<div id="actionRouteDemo"></div>
<script type="text/javascript">
 $(document).ready(function () {
            /*
            |--------------------------------------------------------------------------
            | Initializes appGridSystem 
            |--------------------------------------------------------------------------
            | Develover Tatiye.Net 2022
            | @Date  Sel 06 Jun 2023 10:07:11  WITA
            */
            $('#setEtc').appGridSystem({
                  "package"    :'elastic',
                  "autoload"   :'default', //active ,default
                  "body"       :{
                     "header"  :'#fff0',
                     "boder"   :'rgba(72, 94, 144, 0.16)',  //rgba(72, 94, 144, 0.16)
                     "body"    :'#fff0',
                     "setting"  :'none', //none,hidden
                  },
                  "grid"       :{
                     'classRow'   :'container-fluid',
                     'scrollbar'  :'300px',
                     'colom'      :'col-md-4',
                     'header'     :[
                           
                           'My Tabel',
                           'Route',
                           'From Storage',
                     ],
                     'outsideKey'     :[
                           'elastic/Mytabel/index',
                           'elastic/Route/index',
                           'elastic/FromStorage/index',
                     ],

                  },

            });
            /* and class appGridSystem */
       });


    // FROM CASTOM



   /*
   |--------------------------------------------------------------------------
   | Initializes title 
   |--------------------------------------------------------------------------
   | Develover Tatiye.Net 2020
   | @Date 
   */



</script>
<div id="action2"></div>
<div id="nugi"></div>
 
<ul>
    <li>Menampilkan data</li>
    <li>Membuat Api Rute File </li>
    <pre><code class="language-js">var myToken= setControllerRoute({
  filename:'HeaderGrid',
  package :'demo',
  tabel   :'query_uid_comments'
})</code></pre>

 
    <li>Menampilkan token Api Rute File JS </li>
<pre><code class="language-js">var row= getControllerRoute('eyJ0b2tlbiI6MSwidWlkIjoiMSJ9');
$("#nugi").html(row.route);
</code></pre>
    <li>Menampilkan token Api Rute File PHP</li>
<pre><code class="language-js">$row= tatiyeNet::getControllerRoute('eyJ0b2tlbiI6MSwidWlkIjoiMSJ9');
echo $row['route'];
</code></pre>
<li>Loder Entri</li>
<pre><code class="language-js">setLoderEntri('eyJ0b2tlbiI6MSwidWlkIjoiMSJ9');</code></pre>
</ul>
