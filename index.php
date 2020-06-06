<?php
include 'config.php';
print'
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script type="text/javascript" src="../rest/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>';

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
            <td><input name='id' type='radio' onclick='radio(id=".$id.");'></td>
            </tr>";

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
}
echo "</table>
<div id='result_form'></div>
";

print "
<p style='color:grey;'>
<span onclick='refresh();'>
<i class='fa fa-2x fa-refresh'></i>
</span>
<span onclick='create();'>
<i class='fa fa-2x fa-plus'></i>
</span>
<span onclick='edit();'>
<i class='fa fa-2x fa-edit'></i>
</span>
<span onclick='trash();'>
<i class='fa fa-2x fa-trash'></i>
</span>
</p>
";
print '
<div id="edit_task"></div>

<div id="create-task">
<div align="left">Добавление</div>
<div style="position:absolute; top:10px; right:10px;" onclick="close3();"><i class="fa fa-1x fa-close"></i></div>

<form method="post" id="post_form" action="">
<input name="name" type="text" size="30" required placeholder="Имя">
<input name="middle_name" type="text" size="30" required placeholder="Отчество">
<input name="family" type="text" size="30" required placeholder="Фамилия">

<input name="number" type="number" size="10" required placeholder="номер">
<p><textarea name="power" rows="4" cols="35" required placeholder="Сила"></textarea>
<input name="category" type="text" size="30" required placeholder="Категория">
<input name="type" type="text" size="10" required placeholder="Тип">
</p>

<p><input type="button" value="Отмена">
   <input type="submit" id="post" value="Отправить">
</p>
</form>
</div>
';
