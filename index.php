<!DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<script type="text/javascript" src="../rest/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<div id='data_table'>
	<table> </table>
</div>
<div id='result_form'></div>
<p> <span id="refresh-button" onclick='refresh();'>Обновить</span> <span id="create-button" onclick='create(caption="Добавление");'>Добавить</span> <span id="edit-button" onclick='edit(caption="Редактирование");'>Редактировать</span> <span id="trash-button" onclick='trash();'>Удалить</span> </p>
<div id="form_task">
	<div id="form_caption"></div>
	<form method="POST" id="post_form" action="javascript:void(null);" onsubmit="post_form()">
		<input id="form_id" name="form_id" type="hidden">
		<input id="form_name" name="form_name" type="text" size="30" required placeholder="Имя">
		<input id="form_middle_name" name="form_middle_name" type="text" size="30" required placeholder="Отчество">
		<input id="form_family" name="form_family" type="text" size="30" required placeholder="Фамилия">
		<input id="form_number" name="form_number" type="number" size="10" required placeholder="номер">
		<p>
			<div id="rad-btn">
				<input name="form_type" type="radio" value="P" onclick='select_type(type_category="P");' required>р</br>
				<input name="form_type" type="radio" value="T" onclick='select_type(type_category="T");'>т</br>
				<input name="form_type" type="radio" value="B" onclick='select_type(type_category="B");'>в </div>
			<div id="rad-label">
				<input id="form_category" name="form_category" type="text" size="20" placeholder="категория не выбрана"> </br>
				<textarea id="form_power" name="form_power" rows="2" cols="70" placeholder="описание силы"></textarea>
			</div>
		</p>
		<input type="button" value="Отмена" onclick="close2();">
		<input type="submit" id="post" value="Отправить"> </form>
</div>
<div id="delete_task">
	<div>Подтвердите удаление записи</div>
	<div id="delete-row"></div>
	<div id="row-id"></div>
	<p>
		<input type="button" value="Отмена" onclick="close4();">
		<input type="button" value="Удалить" onclick="trash_form();"> </p>
</div>
<footer> Исходный код <a href="https://github.com/KitaXvost/bars">GitHub</a> </footer>

</html>
