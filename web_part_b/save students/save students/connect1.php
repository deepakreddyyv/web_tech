<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(!$conn) {
		die("Connection unsucessful".mysql_error());
	}
	mysql_select_db('student_db');
	$name = $_POST['uname'];
	$mobile_no = $_POST['unum'];
	$course = $_POST['ucourse'];
	$university = $_POST['uni'];

	$sql = "INSERT INTO students(student_name, mobile_no, course, university) VALUES('$name', '$mobile_no', '$course', '$university')";
	$res = mysql_query($sql, $conn);
	if($res) {
		echo "<h1>success</h1>";
	} else {
		die(mysql_error());
	}
?>