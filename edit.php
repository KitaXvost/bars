<?php
include 'config.php';

    $name = $_POST['form_name'];
    $family = $_POST['form_family'];
    $middle_name = $_POST['form_middle_name'];
    $n_reg_doc = $_POST['form_number'];
    $type_category = $_POST['form_type'];
    $category = $_POST['form_category'];
    $power = $_POST['form_power'];
    $id = $_POST['form_id'];;

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
