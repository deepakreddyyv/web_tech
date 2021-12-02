<?php

    $id = $_POST['id'];
    $conn = new mysqli("localhost", "root", "", "student_db");

    if($conn->connect_error) {
        die("Connection error ".$conn->error);
    }
    $sql = "DELETE FROM students WHERE id = $id";

    if($conn->query($sql) === True) {
        echo "<h1>Record Deleted Successfully</h1>";
    } else {
        echo "Error deleting in record ".$conn->error;
    }  

    $conn->close();
?>