<?php
    require("connection.php");
    if(isset($_POST['username'])) {
        $usertype = mysqli_real_escape_string($connect, $_POST['usertype']);
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        if($usertype == "Student") {
            $query = mysqli_query($connect, "select * from student_table where student_username = '$username'");
        }
        else if($usertype == "Teacher") {
            $query = mysqli_query($connect, "select * from teacher_table where teacher_username = '$username'");
        }
        $row = mysqli_num_rows($query);
        if($row > 0) {
            echo "1";
        }
        else {
            echo "0";
        }
    }
?>