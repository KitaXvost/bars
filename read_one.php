<?php

$id = $_POST['id'];

include_once 'config/database.php';
include_once 'objects/client.php';

$database = new Database();
$db = $database->getConnection();


$client = new Client($db);


$client->id = $id;


$client->readOne();


$arr = array(
             'name' => $client->name,
      'middle_name' => $client->middle_name,
      'family_name' => $client->family_name,
        'n_reg_doc' => $client->n_reg_doc,
            'power' => $client->power,
         'category' => $client->category,
    'type_category' => $client->type_category
          );

echo json_encode($arr);
