<?php
if ($_POST)
{

    include_once 'config/database.php';
    include_once 'objects/client.php';

    $database = new Database();
    $db = $database->getConnection();

    $client = new Client($db);

    $client->id = $_POST['id'];

    // удаление клиента из БД
    if ($client->delete())
    {
        echo "Клиент удален";
    }
    else
    {
        echo "Невозможно удалить клиента";
    }
}
?>
