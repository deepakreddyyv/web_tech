<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(!$conn) {
		die("conection unsuccesful".mysql_error());
	} 
	mysql_select_db('student_db');
	$id = $_POST['id'];
	$name = $_POST['uname'];
	$mobile_no = $_POST['unum'];
	$course = $_POST['course'];
	$university = $_POST['uni'];

	$sql = "UPDATE students SET student_name = '$name', mobile_no = '$mobile_no', course = '$course', university = '$university' WHERE id = $id";
	$res = mysql_query($sql, $conn);
	if(!$res) {
		die(mysql_error());
	} else {
		echo "updated";
	}
?>
	