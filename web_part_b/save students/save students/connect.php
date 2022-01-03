<?php
    $conn = mysql_connect('localhost', 'root', '');

    if(!$conn) {
        echo "Connection unsucessful";
    } else {
      
        $name = $_POST['uname'];
        $mobile = $_POST['unum'];
        $course = $_POST['ucourse'];
        $university = $_POST['uni'];
        
        $sql = "INSERT INTO students (student_name, mobile_no, course, university)
        VALUES ('$name', '$mobile', '$course', '$university')";

	mysql_select_db('student_db');
	
        $res = mysql_query($sql, $conn);
	if(!res) {
	    die(mysql_error());
	}
	echo "success\n";
	mysql_close($conn);

    }
?>