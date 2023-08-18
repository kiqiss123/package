 <?php 
 use wolf05\helper\tatiyeNet;
 $info = array(
       'framework'   =>'WF08 Framework',
       'deskripsi'   =>'Kami membuatnya sangat, sangat mudah untuk semua orang, agar dapat membuat aplikasi dan menampilkan apa pun yang mereka mau',
 );
 foreach($info as $page => $value) {
     $tatiyeNet->val($page, $value);
 }

//  $stmt=tatiyeNet::Qb('query')->pqdb_id(67)->SQLI("","ORDER BY count DESC   LIMIT 6"); 
//  while($row=$stmt->fetch_assoc()){  
//  $tatiyeNet->assign_block_vars('home', array(
//      'TITEL'  =>$row['title'],
//      'COUNT'  =>$row['count'],
//      'LINK'   =>tatiyeNet::URL('posts/'.$row['ulr_id']),
//      'IMG'    =>tatiyeNet::img('65x43/foto/'.$row['images']),
//  ));
// }
