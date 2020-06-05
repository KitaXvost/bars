function create(){
	document.getElementById("create-task").style.visibility = "visible";
		$.ajax({
			url: "create.php", // путь к php-обработчику
			type: "POST", // метод передачи данных
			//data: {token:token}, // данные, которые передаем на сервер
			//success: function(data){
			//				$("#create-task").html(data);
			//}
		});
}
function edit(){
  document.getElementById("edit-task").style.visibility = "visible";
    $.ajax({
      url: "edit.php", // путь к php-обработчику
      type: "POST", // метод передачи данных
      //data: {id:id, url:url, token:token}, // данные, которые передаем на сервер
      success: function(data){
              $("#edit-task").html(data);
      }
    });
}
$( document ).ready(function() {
    $("#post").click(
		function(){
			sendAjaxForm('result_form', 'post_form', 'create.php');
			return false;
		}
	);
});

function sendAjaxForm(result_form, post_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+post_form).serialize(),
        success: function(response) {
        	result = $.parseJSON(response);
        	$('#result_form').html();
    	},
    	error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}
function close2(){
document.getElementById("edit-task").style.visibility = "hidden";
}
function close3(){
document.getElementById("create-task").style.visibility = "hidden";
}
