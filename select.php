<?php
include 'config.php';

$id = $_POST['id'];

$data = $dbconn->query("SELECT * FROM spravka")->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $k => $v){
  if ($v['id'] == $id){

print '

<div align="left">Исправление</div>
<div style="position:absolute; top:10px; right:10px;" onclick="close2();"><i class="fa fa-1x fa-close"></i></div>

<form method="post" id="edit_form" action="">
<input name="edit-name" type="text" value='.$v["name"].' size="30" required placeholder="Имя">
<input name="edit-middle_name" type="text" value='.$v["middle_name"].' size="30" required placeholder="Отчество">
<input name="edit-family" type="text" value='.$v["family"].' size="30" required placeholder="Фамилия">

<input name="edit-number" type="number" value='.$v["n_reg_doc"].' size="10" required placeholder="номер">
<p><textarea name="edit-power" rows="4" cols="35" required placeholder="Сила">'.$v["power"].'</textarea>
<input name="edit-category" type="text" value='.$v["category"].' size="30" required placeholder="Категория">
<input name="edit-type" type="text" value='.$v["type_category"].' size="10" required placeholder="Тип">
</p>

<p><input type="button" value="Отмена">
   <input type="submit" id="edit_post" value="Отправить">
</p>
</form>
';
}
}
