<?php
	$conn = mysql_connect('localhost', 'root', '');
	if(!$conn){
		die(mysql_error());
	}
	mysql_select_db('student_db');
	$id = $_POST['id'];
	$sql = "select * from students WHERE id = $id";
	$res = mysql_query($sql, $conn);
	if(!$res){
		die(mysql_error());
	}
	echo "<table border=1><tr><th>id</th><th>name</th><th>mobile_number</th><th>course</th><th>university</th></tr>";
	if($row = mysql_fetch_array($res, MYSQL_ASSOC)) {
		echo "<tr><td>".$row['id']."</td><td>".$row['student_name']."</td><td>".$row['mobile_no']."</td><td>".$row['course']."</td><td>".$row['university']."</td></tr>";
	}
	echo "<table>";
	mysql_close($conn);
?>