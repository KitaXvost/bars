<?php
include 'config.php';

    $name = $_POST['edit-name'];
    $family = $_POST['edit-family'];
    $middle_name = $_POST['edit-middle_name'];
    $n_reg_doc = $_POST['edit-number'];
    $power = $_POST['edit-power'];
    $category = $_POST['edit-category'];
    $type_category = $_POST['edit-type'];

$id = 4;

$query = "UPDATE spravka SET name = :name, family = :family, middle_name = :middle_name, n_reg_doc = :n_reg_doc, power = :power, category = :category, type_category = :type_category
             WHERE id = :id";
$params = [
        ':id'            => $id,
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
