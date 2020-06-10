<?php
include 'config.php';

try {
    $sql = 'Select * FROM spravka';
    echo "<table>";
    foreach ($dbconn->query($sql) as $row) {
      $name = $row['name'];
      $family = $row['family'];
      $middle_name = $row['middle_name'];
      $n_reg_doc = $row['n_reg_doc'];
      $power = $row['power'];
      $category = $row['category'];
      $type_category = $row['type_category'];
      $id = $row['id'];

      echo "<tr>
            <td>". $family ." ". $name ." ". $middle_name ."</td>
            <td>". $type_category . "</td>
            <td><input name='id' class='wrap' type='radio' onclick='radio(id=".$id.");'></td>
            </tr>";

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
}
echo'
<html>
</table>
';
