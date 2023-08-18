<?php 
 use wolf05\helper\tatiyeNet;
        $property=array(
            // ASSEST JAVASCRIP/CSS
            'assets'=>[
               'status'=>true,
               'autoload'=>[
                  'helper/Assets/prism.css',
                  'helper/Assets/clipboard.min.js',
                  'helper/Assets/clipboard.code.js',
                  'helper/Assets/prism.js',
                  'helper/Assets/script.js',
               ]
            ],    
            // ASSEST MENU
            'myLink'=>[
               'Beranda'  =>'home',
               'Exsampel' =>'demo/data/header',
               'Modul'    =>'update',
               'Loder'    =>'Loder',
            ],
             // ASSEST CONTENT
            'myContent'=>[
               'images'    =>tatiyeNet::URL(tatiyeNet::images('wf250.svg')),
               'title' =>'Selamat datang di WFJS Framework',
               'framework' =>'WFJS Framework',
               'deskripsi' =>'Kami membuatnya sangat mudah untuk semua orang, agar dapat membuat aplikasi dan menampilkan apa pun yang mereka mau',
            ],
            // ASSEST ROUTE
            'tabel'=>[
               'mydocs'    =>'docs',
            ],

       );
?>
