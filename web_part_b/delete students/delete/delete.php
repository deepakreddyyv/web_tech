<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(!$conn) {
		die(mysql_error());
	}
	mysql_select_db('student_db');
	$id = $_POST['id'];
	
	$sql = "DELETE from students WHERE id = $id";
	$res = mysql_query($sql, $conn);
	if(!$res) {
		die(mysql_error());
	}
	echo "<h1>Deleted</h1>";
	mysql_close($conn);
?>