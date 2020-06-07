<?php
include 'config.php';

$id = $_POST['id'];

$query = "DELETE FROM spravka WHERE id = ?";
$params = [$id];
$stmt = $dbconn->prepare($query);
$stmt->execute($params);
