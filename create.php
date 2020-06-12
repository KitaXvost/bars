<?php
include 'config.php';

    $name = $_POST['form_name'];
    $family = $_POST['form_family'];
    $middle_name = $_POST['form_middle_name'];
    $n_reg_doc = $_POST['form_number'];
    $type_category = $_POST['form_type'];
    $category = $_POST['form_category'];
    $power = $_POST['form_power'];
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
