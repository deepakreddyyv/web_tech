<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $course = $_POST["course"];
    $mobile = $_POST['mnumber'];
    $university = $_POST["uni"];

    $conn = mysqli_connect("localhost", "root", "", "student_db");

    if(!$conn) {
        die("Connection error ".mysqli_connect_error());
    }
    $sql = "UPDATE students SET student_name = '$name', mobile_no = '$mobile', course = '$course', university = '$university' Where id = '$id'";

    if(mysqli_query($conn, $sql)) {
        echo "<h1>Record Updated</h1>";
    } else {
            echo "<h1>".$conn->error."</h1>";
    }

    $conn->close();
?>