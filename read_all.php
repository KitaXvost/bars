<?php

include_once 'config/database.php';
include_once 'objects/client.php';

$database = new Database();
$db = $database->getConnection();


$client = new Client($db);


$client->readAll();
