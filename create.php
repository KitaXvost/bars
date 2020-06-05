<?php
include 'config.php';

    $name = $_POST['name'];
    $family = $_POST['family'];
    $middle_name = $_POST['middle_name'];
    $n_reg_doc = $_POST['number'];
    $power = $_POST['power'];
    $category = $_POST['category'];
    $type_category = $_POST['type'];

$query = "INSERT INTO spravka (name, family, middle_name, n_reg_doc, power, category, type_category)
          VALUES (:name, :family, :middle_name, :n_reg_doc, :power, :category, :type_category)";
$params = [
    ':name'          => $name,
    ':family'        => $family,
    ':middle_name'   => $middle_name,
    ':n_reg_doc'     => $n_reg_doc,
    ':power'         => $power,
    ':category'      => $category,
    ':type_category' => $type_category,
];
$stmt = $dbconn->prepare($query);
$stmt->execute($params);
