$( document ).ready(function() {
    $("#post").click(
		function(){
			var form = 'post_form';
			sendAjaxForm('result_form', form, 'create.php');
			return false;
		}
	);
	$("#edit_post").click(
		function(){
			var form = 'edit_form';
		sendAjaxForm('result_form', form, 'edit.php');
		return false;
	}
	);

});

function sendAjaxForm(result_form, form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+form).serialize(),
        success: function(response) {
        	result = $.parseJSON(response);
        	$('#result_form').html();
    	},
    	error: function(response) {
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}
function edit(){
  document.getElementById("edit-task").style.visibility = "visible";
}
function close2(){
document.getElementById("edit-task").style.visibility = "hidden";
}
function create(){
	document.getElementById("create-task").style.visibility = "visible";
}
function close3(){
document.getElementById("create-task").style.visibility = "hidden";
}
