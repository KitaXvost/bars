<?php
print'
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script type="text/javascript" src="../rest/jquery-1.3.2.min.js"></script>
<script>
    function close2(){
    document.getElementById("edit-task").style.visibility = "hidden";
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
</script>
</head>';
  $db = pg_connect("host=localhost port=5432 dbname=vue_spa user=andreipunt90 password=Ii2329925");
  $result = pg_query($db,"SELECT * FROM spravka");
  echo "<table>";
  while($row=pg_fetch_assoc($result)){echo "<tr>";
  echo "<td>". $row['family'] ." ". $row['name'] ." ". $row['middle_name'] ."</td>";
  echo "<td>". $row['type_category'] . "</td>";
  echo "</tr>";}echo "</table>
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

<div id='edit-task'></div>
";


print'
<style type="text/css">
#edit-task, #create-task{
color:white;
font-size:150%;
visibility:hidden;
position: fixed;
top: 30%;
left: 10%;
width:80%;
height:40%;
z-index: 99;
background-color: rgba(38,17,0,0.4);
padding: 20px;
}
    table {
        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #3A3A3A;
        border-collapse: collapse;
    }

    table th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #517994;
        background-color: #B2CFD8;
    }

    table tr:hover td {
        background-color: #DFEBF1;
    }

    table td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #517994;
        background-color: #ffffff;
    }
</style>
';
