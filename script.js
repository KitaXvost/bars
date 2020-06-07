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
  close2();
}
function trash_form(){
  var id = document.getElementById('row-id').innerHTML;

  $.ajax({
        url: "delete.php",
        type:     "POST",
        data: {id: id},
        });
  close4();
}
function radio(id){
document.getElementById("edit-button").style.visibility = "visible";
document.getElementById("trash-button").style.visibility = "visible";
  $.ajax({
      url: "select.php",
      type:     "POST",
      data: {id: id},
      success: function(data){
var obj = $.parseJSON(data);
document.getElementById('edit_name').value = obj.name;
 document.getElementById('edit-middle_name').value = obj.middle_name;
  document.getElementById('edit-family').value = obj.family_name;
   document.getElementById('edit-number').value = obj.n_reg_doc;
    document.getElementById('edit-power').innerHTML = obj.power;
     document.getElementById('edit-category').value = obj.category;
      document.getElementById('edit-type').value = obj.type_category;

document.getElementById('delete-row').innerHTML = obj.name+' '+obj.middle_name+' '+obj.family_name+'</br>'+obj.category;
document.getElementById('row-id').innerHTML = id;
      }
    });
}
function edit(){
  document.getElementById("edit_task").style.visibility = "visible";
}
function close2(){
document.getElementById("edit_task").style.visibility = "hidden";
  close3();
}
function create(){
	document.getElementById("create-task").style.visibility = "visible";
}
function close3(){
document.getElementById("create-task").style.visibility = "hidden";
}
function trash(){
	document.getElementById("delete_task").style.visibility = "visible";
}
function close4(){
document.getElementById("delete_task").style.visibility = "hidden";
}
