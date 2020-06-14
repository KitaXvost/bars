<?php
include_once 'config/database.php';
include_once 'objects/client.php';

$database = new Database();
$db = $database->getConnection();

$client = new Client($db);

$client->id = $_POST['form_id'];

if ($_POST)
{

    $client->name = $_POST['form_name'];
    $client->family = $_POST['form_family'];
    $client->middle_name = $_POST['form_middle_name'];
    $client->n_reg_doc = $_POST['form_number'];
    $client->type_category = $_POST['form_type'];
    $client->category = $_POST['form_category'];
    $client->power = $_POST['form_power'];

    if ($client->update())
    {
        echo "Client was updated";
    }

    else
    {
        echo "Unable to update client";

    }
}
