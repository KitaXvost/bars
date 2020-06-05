function create(){
	document.getElementById("create-task").style.visibility = "visible";
		$.ajax({
			url: "create.php", // путь к php-обработчику
			type: "POST", // метод передачи данных
			//data: {token:token}, // данные, которые передаем на сервер
			success: function(data){
							$("#create-task").html(data);
			}
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
function close2(){
document.getElementById("edit-task").style.visibility = "hidden";
}
function close3(){
document.getElementById("create-task").style.visibility = "hidden";
}
