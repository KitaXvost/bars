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
      echo "<tr>
            <td>". $row['family'] ." ". $row['name'] ." ". $row['middle_name'] ."</td>
            <td>". $row['type_category'] . "</td>
            </tr>";

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
}
echo "</table>";

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
<div id="edit-task">
<div align="left">Исправление</div>
<div style="position:absolute; top:10px; right:10px;" onclick="close2();"><i class="fa fa-1x fa-close"></i></div>

<form method="post" id="edit_form" action="">
<input name="edit-name" type="text" size="30" required placeholder="Имя">
<input name="edit-middle_name" type="text" size="30" required placeholder="Отчество">
<input name="edit-family" type="text" size="30" required placeholder="Фамилия">

<input name="edit-number" type="number" size="10" required placeholder="номер">
<input name="edit-power"type="text" size="30" required placeholder="Сила">
<input name="edit-category" type="text" size="30" required placeholder="Категория">
<input name="edit-type" type="text" size="10" required placeholder="Тип">


<p><input type="button" value="Отмена">
   <input type="submit" id="edit_post" value="Отправить">
</p>
</form>
</div>

<div id="create-task">
<div align="left">Добавление</div>
<div style="position:absolute; top:10px; right:10px;" onclick="close3();"><i class="fa fa-1x fa-close"></i></div>

<form method="post" id="post_form" action="">
<input name="name" type="text" size="30" required placeholder="Имя">
<input name="middle_name" type="text" size="30" required placeholder="Отчество">
<input name="family" type="text" size="30" required placeholder="Фамилия">

<input name="number" type="number" size="10" required placeholder="номер">
<input name="power"type="text" size="30" required placeholder="Сила">
<input name="category" type="text" size="30" required placeholder="Категория">
<input name="type" type="text" size="10" required placeholder="Тип">


<p><input type="button" value="Отмена">
   <input type="submit" id="post" value="Отправить">
</p>
</form>
</div>
';
