<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
-->
		<script type="text/javascript" src="../rest/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<div id='data_table'><table>
</table></div>
<div id='result_form'></div>

<div id='a'></div>
<div id='b'></div>

<p>
<span id="refresh-button" onclick='refresh();'>
<!--
<i class='fa fa-2x fa-refresh'></i>
-->
Обновить
</span>
<span id="create-button" onclick='create();'>
<!--
<i class='fa fa-2x fa-plus'></i>
-->
Добавить
</span>
<span id="edit-button" onclick='edit();'>
<!--
<i class='fa fa-2x fa-edit'></i>
-->
Редактировать
</span>
<span id="trash-button" onclick='trash();'>
<!--
<i class='fa fa-2x fa-trash'></i>
-->
Удалить
</span>
</p>

<div id="create-task">
<div align="left">Добавление</div>
<!--
<div style="position:absolute; top:10px; right:10px;" onclick="close3();"><i class="fa fa-1x fa-close"></i></div>
-->
<form method="post" id="post_form" action="">
<input name="name" type="text" size="30" required placeholder="Имя">
<input name="middle_name" type="text" size="30" required placeholder="Отчество">
<input name="family" type="text" size="30" required placeholder="Фамилия">

<input name="number" type="number" size="10" required placeholder="номер">
<p>
  <textarea name="power" rows="4" cols="35" required placeholder="Сила"></textarea>
      <input name="type" type="radio" onclick='select_type(type_category="P");'>р
      <input name="type" type="radio" onclick='select_type(type_category="T");'>т
      <input name="type" type="radio" onclick='select_type(type_category="B");'>в
    <input id="create-category" name="category" type="text" size="20" disabled placeholder="Категория">
</p>

<p><input type="button" value="Отмена" onclick="close3();">
   <input type="submit" id="post" value="Отправить">
</p>
</form>
</div>

<div id="edit_task">
<div align="left">Исправление</div>
<!--
<div style="position:absolute; top:10px; right:10px;" onclick="close2();"><i class="fa fa-1x fa-close"></i></div>
-->
<form method="post" id="edit_form" action="">
<input id="edit-id" name="edit-id">
<input id="edit_name" name="edit-name" type="text" size="30" required placeholder="Имя">
<input id="edit-middle_name" name="edit-middle_name" type="text" size="30" required placeholder="Отчество">
<input id="edit-family" name="edit-family" type="text" size="30" required placeholder="Фамилия">

<input id="edit-number" name="edit-number" type="number" size="10" required placeholder="номер">
<p><textarea id="edit-power" name="edit-power" rows="4" cols="35" required placeholder="Сила"></textarea>
<input id="edit-category" name="edit-category" type="text" size="20" disabled placeholder="Категория">
<input id="edit-type" name="edit-type" type="text" size="10" required placeholder="Тип">
</p>

<p><input type="button" value="Отмена" onclick="close2();">
   <input type="submit" id="edit_post" value="Отправить">
</p>
</form>
</div>

<div id="delete_task">
  <div align="left">Подтвердите удаление записи</div>
<!--
  <div style="position:absolute; top:10px; right:10px;" onclick="close4();"><i class="fa fa-1x fa-close"></i></div>
-->
<div id="delete-row"></div>
<div id="row-id"></div>
<p><input type="button" value="Отмена" onclick="close4();">
   <input type="button" value="Удалить" onclick="trash_form();">
</p>
</div>
