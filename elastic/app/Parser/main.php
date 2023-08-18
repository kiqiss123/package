 <?php 
 use wolf05\helper\tatiyeNet;
 $info = array(
       'framework2'   =>'WF08 Framework2',
       'deskripsi'  =>'Kami membuatnya sangat, sangat mudah untuk semua orang, agar dapat membuat aplikasi dan menampilkan apa pun yang mereka mau',
 );
 foreach($info as $page => $value) {
     $tatiyeNet->val($page, $value);
 }

