<?php
print'
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script type="text/javascript" src="../rest/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
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
<div id='create-task'></div>
";
