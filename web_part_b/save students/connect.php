<?php
    $conn = mysqli_connect('localhost', 'root', '', 'student_db');

    if(!$conn) {
        echo "Connection unsucessful";
    } else {
      
        $name = $_POST['uname'];
        $mobile = $_POST['unum'];
        $course = $_POST['ucourse'];
        $university = $_POST['uni'];
        
        $sql = "INSERT INTO students (student_name, mobile_no, course, university)
        VALUES ('$name', '$mobile', '$course', '$university')";
        
        if ($conn->query($sql) === TRUE) {
          echo "<h1>New record created successfully</h1>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    }
?>