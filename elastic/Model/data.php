<?php 
$data = array(
array(
'id' => '1',
'name' => 'Bandung'
),
array(
'id' => '2',
'name' => 'Jakarta'
),
array(
'id' => '3',
'name' => 'Surabaya'
),
);
if(!empty($_GET['search'])) {
$key = array_search($_GET['search'], array_column($data, 'name'),true);
$id = $data[$key]['id'];
$name = $data[$key]['name'];
$result = array(
'id' => $id,
'name' => $name,
'status' => 'success'
);
} else {
foreach($data as $d) {
$result['city'][] = array(
'id' => $d['id'],
'name' => $d['name'],
);
}
$result['status'][] = 'success';
}
http_response_code(200);
echo json_encode($result);