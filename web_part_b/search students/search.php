<?php
    $conn = new mysqli("localhost", "root", "", "student_db");

    if($conn->connect_error) {
        die("connection failed ".$conn->connect_error);
    } else {

        $id = $_POST["id"];
        $sql = "SELECT * FROM students Where id = $id";
        $res = $conn->query($sql);

        echo "<table border = 1>
            <tr> 
                <th>id</th>
                <th>name</th>
                <th>mobile number</th>
                <th>course</th>
                <th>university</th>
            </tr>";

        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            echo "<tr>
                <td> $row[id] </td>
                <td> $row[student_name] </td>
                <td> $row[mobile_no] </td>
                <td> $row[course] </td>
                <td> $row[university] </td>
            </tr>";
        }

        echo "</table>";
            
        


        // if($res->num_rows > 0) {
        //     while($row = $res->fetch_assoc()) {
        //         echo "id : ".$row["id"]." Name : ".$row["student_name"]." Mobile Number : ".$row["mobile_no"]." course : ".$row["course"]." University : ".$row["university"]."<br>";
        //     }
        // } else {
        //     echo "0 results";
        // }
    }
?>