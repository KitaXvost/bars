<?php
include 'config.php';

$id = $_POST['id'];

$data = $dbconn->query("SELECT * FROM spravka")->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $k => $v){
  if ($v['id'] == $id){
    $name = $v['name'];
    $middle_name = $v['middle_name'];
    $family_name = $v['family'];
    $n_reg_doc = $v['n_reg_doc'];
    $power = $v['category'];
    $category = $v['power'];
    $type_category = $v['type_category'];

    $arr = array('name' => $name,
          'middle_name' => $middle_name,
          'family_name' => $family_name,
            'n_reg_doc' => $n_reg_doc,
                'power' => $power,
             'category' => $category,
        'type_category' => $type_category
              );
    echo json_encode($arr);

}
}
