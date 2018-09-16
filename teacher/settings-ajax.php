<?php
    require("../connection.php");
    if(isset($_POST['username'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $query = mysqli_query($connect, "
            select * from teacher_table
            where
            teacher_username = '$username';
        ");
        $row = mysqli_num_rows($query);
        if($row > 0) {
            echo "1";
        }
        else {
            echo "0";
        }
    }
?>