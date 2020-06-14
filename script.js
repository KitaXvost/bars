$(document).ready(function() {
	refresh();
});

//отправка данных из формы
function post_form() {
	$("#form_category").prop('disabled', false);
	$("#form_power").prop('disabled', false);
	if(($("#form_caption").html()) == 'Добавление') {
		var url = 'create_client.php';
	}
	if(($("#form_caption").html()) == 'Редактирование') {
		var url = 'update_client.php';
	}
	$.ajax({
		url: url,
		type: "POST",
		dataType: "json",
		data: $('#post_form').serialize(),
		success: function(response) {
			result = $.parseJSON(response);
		},
	});
	$("#result_form").fadeIn(300);
	$("#result_form").text('Данные отправлены').delay(2500).fadeOut(300);
	close2();
}

//выбор типа категории внутри формы
function select_type(type_category) {
	if(type_category == 'P') {
		$("#form_category").val('пирокинет');
		$("#form_power").html('способность вызывать огонь или значительное повышение температуры на расстоянии силой мысли');
	}
	if(type_category == 'T') {
		$("#form_category").val('телепат');
		$("#form_power").html('способен передавать и читать чужие мысли на расстоянии');
	}
	if(type_category == 'B') {
		$("#form_category").val('биоморф');
		$("#form_power").html('способность образного конструирования с помощью биологических форм');
	}
}

//удаление записи таблицы
function trash_form() {
	var id = document.getElementById('row-id').innerHTML;
	$.ajax({
		url: "delete_client.php",
		type: "POST",
		data: {
			id: id
		},
	});
	$("#result_form").fadeIn(300);
	$("#result_form").text('Запись удалена').delay(2500).fadeOut(300);
	close4();
}

//подготовка формы до её открытия
//при выборе строк таблицы
function radio(id) {
	$("#edit-button").fadeIn(100);
	$("#trash-button").fadeIn(100);
	$.ajax({
		url: "read_one.php",
		type: "POST",
		data: {
			id: id
		},
		success: function(data) {
			var obj = $.parseJSON(data);
			$("#form_name").val(obj.name);
			$("#form_middle_name").val(obj.middle_name);
			$("#form_family").val(obj.family_name);
			$("#form_number").val(obj.n_reg_doc);
			$('input[name="form_type"][value=' + obj.type_category + ']').trigger('click');
			$('#delete-row').html(obj.name + ' ' + obj.middle_name + ' ' + obj.family_name + '</br>' + obj.category);
			$("#row-id").html(id);
			$("#form_id").val(id);
		}
	});
}

//обновление таблицы
//возврат кнопок управления
//к начальному виду
function refresh(data_table) {
	$.ajax({
		url: "read_all.php",
		success: function(data) {
			$('#data_table').html(data);
		}
	});
	$("#edit-button").fadeOut(100);
	$("#trash-button").fadeOut(100);
	$("#create-button").fadeIn(100);
	return;
}

//подставляем заголовок формы
//меняем надпись на кнопке
//открываем форму редактирования
//скрываем кнопки управления таблицей
function edit(caption) {
   $("#form_category").prop('disabled', true);
	$("#form_power").prop('disabled', true);
	$("#form_caption").text(caption);
	$("#post").val('Исправить');
	$("#form_task").fadeIn(500);
	hide_btns();
}

//закрытие формы с анимацией
function close2() {
	refresh();
	$("#form_task").fadeOut(500);
}

//очищение формы
//подставляем заголовок формы
//меняем надпись на кнопке
//открываем форму
//скрываем кнопки управления таблицей
function create(caption) {
	$("#form_category").prop('disabled', true);
	$("#form_power").prop('disabled', true);
	$('#post_form').trigger('reset');
	$('#form_power').html('');
	$("#form_caption").text(caption);
	$("#post").val('Добавить');
	$("#form_task").fadeIn(500);
	hide_btns();
}

//открытие формы удаления
function trash() {
	$("#delete_task").fadeIn(500);
	hide_btns();
}

//закрытие формы удаление с анимацией
function close4() {
	refresh();
	$("#delete_task").fadeOut(500);
}

//скрытие кнопок управления таблицей
function hide_btns() {
	$("#create-button").fadeOut(100);
	$("#edit-button").fadeOut(100);
	$("#trash-button").fadeOut(100);
	$(".wrap").attr("disabled", true);
}
