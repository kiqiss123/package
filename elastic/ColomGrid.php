<h3>Colom Grid</h3>
<ul><li>tatiyeNetAppGridSystem.js</li></ul>
<pre><code class="language-js">$(document).ready(function () {
            /*
            |--------------------------------------------------------------------------
            | Initializes appGridSystem 
            |--------------------------------------------------------------------------
            | Develover Tatiye.Net 2022
            | @Date  Sel 06 Jun 2023 10:07:11  WITA
            */
            $('#content').appGridSystem({
                  "package"    :'demo',
                  "autoload"   :'default', //active ,default
                  "body"       :{
                     "header"  :'#fff0',
                     "boder"   :'rgba(72, 94, 144, 0.16)',  //rgba(72, 94, 144, 0.16)
                     "body"    :'#fff0',
                     "setting"  :'none', //none,hidden
                  },
                  "grid"       :{
                     'classRow'   :'container-fluid',
                     'scrollbar'  :'auto',
                     'colom'      :'col-md-4',
                     'header'     :[
                           'Demo header 1',
                           'Demo header 2',
                           'Demo header 3',
                     ],
                     'outsideKey'     :[
                           'exsampel/GridSystem/data/header',
                           'exsampel/GridSystem/data/header',
                           'exsampel/GridSystem/data/header',
                     ],

                  },

            });
            /* and class appGridSystem */
       });
  });</code>
</pre>