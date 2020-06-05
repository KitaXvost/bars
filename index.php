<?php
include 'config.php';
print'
<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script type="text/javascript" src="../rest/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>';

try {
    $sql = 'Select * FROM spravka';
    echo "<table>";
    foreach ($dbconn->query($sql) as $row) {
      echo "<tr>
            <td>". $row['family'] ." ". $row['name'] ." ". $row['middle_name'] ."</td>
            <td>". $row['type_category'] . "</td>
            </tr>";

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br />";
}
echo "</table>";

print "
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
