<?php
require("connection.php");
if(isset($_SESSION['user_data'])) {
    if($_SESSION['user_data']['user_type'] == "Teacher") {
        header("location:teacher/index.php");
    }
    else {
        header("location:student/index.php");
    }
    $c = mysqli_query($connect, "
        select * from teacher_table
        where teacher_id = '".$_SESSION['user_data']['id']."';
    ");
    while($d = mysqli_fetch_array($c)) {
        $e = $fetch['teacher_session'];
    }
    if($e == "Session Cleared") {
        session_unset();
        session_destroy();
        header("Location:../index.php?message=change");
    }
}
?>
<html lang="en">

<head>
    <?php require("frameworks.php"); ?>
    <style>
        body {
            background-image: url(Images/BG.jpg);
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#">Photoshop CS6</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"> <span class = "fa fa-home"> </span> Main Page </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="" data-toggle="modal" data-target="#signin"> <span class = "fa fa-sign-in-alt"></span> Sign in </a> </li>
                    <li> <a href="" data-toggle="modal" data-target="#create"> <span class = "fa fa-pencil-alt"></span> Create Account </a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
        if(isset($_GET['message'])) {
            if($_GET['message'] == "success") {
    ?>
    <div class = "container">
        <div class = "alert alert-success">
            <h3> <span class = "fa fa-check"> </span> Account creation success </h3>
        </div>
    </div>
    <?php
            }
            if($_GET['message'] == "logout") {
    ?>
    <div class = "container">
        <div class = "alert alert-success">
            <h3> <span class = "fa fa-check"> </span> Logout successfully </h3>
        </div>
    </div>
    <?php
            }
            if($_GET['message'] == "wrong_credentials") {
    ?>
    <div class = "container">
        <div class = "alert alert-danger">
            <h3> <span class = "fa fa-times"> </span> Wrong username or password </h3>
        </div>
    </div>
    <?php
            }
        }
    ?>
    <!--End Navbar-->
    <div class = "container">
        <div class = "col-xs-4">
            <div class = "well">
                <img src = "Images/Photoshop.png" class = "img-responsive">
            </div>
        </div>
        <div class = "col-xs-8">
            <div class = "well">
                <h1 class = 'text-info'> <img src = "Images/RTU.png" class = "" style = "width: 15%;"> Adobe Photoshop CS6 Tutorial </h1>
                <hr>
                <p>
                Adobe Photoshop CS6 
is a powerful graphic editing program that allows you to create and manipulate images for print, the web, and other media. Photoshop is almost limitless in the ability to manipulate and edit images, but don't let that scare you! We have created this guide to help you learn and take advantage of the many feature of this program.

                </p>
            </div>
        </div>
    </div>
    <!--Modal Signin-->
    <div id="signin" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Enter your credentials </h4>
                </div>
                <div class="modal-body">
                    <!--Signin Form-->
                    <form method="post" action="">
                        <div class="form-group">
                            <label> <span class = "fa fa-question"> </span> User Type </label>
                            <select class="form-control" required name = "type">
                                <option value = ""></option>
                                <option value = "Student">Student</option>
                                <option value = "Teacher">Teacher</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> <span class = "fa fa-user"> </span> Username </label>
                            <input type="text" class="form-control" required name = "username">
                        </div>
                        <div class="form-group">
                            <label> <span class = "fa fa-lock"> </span> Password </label>
                            <input type="password" class="form-control" required name = "password">
                        </div>
                        <center>
                            <button type="submit" class="btn btn-default" name = "sign_in"> Sign in </button>
                        </center>
                    </form>
                    <!--End Signin Form-->
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Signin-->
    <!--Modal Signup-->
    <div id="create" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Fill up the information </h4>
                </div>
                <div class="modal-body">
                    <!--Signup Form-->
                    <form method="post" action="">
                        <div class = "form-group">                        
                            <label> User Type </label>
                            <select class = "form-control" required name = "user_type" id = "usertype">
                                <option value = ""></option>
                                <option value = "Student">Student</option>
                                <option value = "Teacher">Teacher</option>
                            </select>
                        </div>
                        <div class = "form-group">
                            <label> First name </label>
                            <input type = "text" class = "form-control" required name = "user_firstname">
                        </div>
                        <div class = "form-group">
                            <label> Last name </label>
                            <input type = "text" class = "form-control" required name = "user_lastname">
                        </div>
                        <div class = "form-group">
                            <label> Username </label>
                            <input type = "text" class = "form-control" required id = "username" name = "user_username">
                            <p id = "result"> </p>
                            <script>
                                $(document).ready(function() {
                                    $('#username').on('keyup', function() {
                                        var username = $('#username').val();
                                        var usertype = $('#usertype').val();
                                        $.ajax({
                                            url: "index-ajax.php",
                                            method: "post",
                                            dataType: "text",
                                            data: {username: username, usertype: usertype},
                                            success:function(username_data) {
                                                var username_result = $.trim(username_data);
                                                if(username.length == 0) {
                                                    $('#password1').attr("disabled", true);
                                                    $('#password2').attr("disabled", true);
                                                    $('#result').html("<span class = 'fa fa-times'> </span> Field cannot be empty");
                                                    $('#result').attr("class", "text-danger text-right");
                                                }
                                                else if(username_result == "1") {
                                                    $('#password1').attr("disabled", true);
                                                    $('#password2').attr("disabled", true);
                                                    $('#result').html("<span class = 'fa fa-times'> </span> Username not available");
                                                    $('#result').attr("class", "text-danger text-right");
                                                }
                                                else {
                                                    $('#password1').attr("disabled", false);
                                                    $('#password2').attr("disabled", false);
                                                    $('#result').html("<span class = 'fa fa-check'> </span> Username available");
                                                    $('#result').attr("class", "text-success text-right");
                                                }
                                            }
                                        });
                                    });
                                });
                            </script>
                        </div>
                        <div class = "form-group">
                            <label> Password </label>
                            <input type = "password" class = "form-control" required disabled id = "password1">
                        </div>
                        <div class = "form-group">
                            <label> Confirm Password </label>
                            <input type = "password" class = "form-control" required disabled id = "password2"  name = "user_password">
                        </div>
                        <center>
                            <button type = "submit" class = "btn btn-default" name = "create_account"> Create account </button>
                        </center>
                    </form>
                    <!--End Signup Form-->
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Signup-->
</body>

</html>
<?php
    if(isset($_POST['create_account'])) {
        $username = mysqli_real_escape_string($connect, $_POST['user_username']);
        $password = mysqli_real_escape_string($connect, $_POST['user_password']);
        $firstname = mysqli_real_escape_string($connect, $_POST['user_firstname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['user_lastname']);
        $type = mysqli_real_escape_string($connect, $_POST['user_type']);

        if($type == "Teacher") {
            $query = mysqli_query($connect, "
                insert into teacher_table
                (
                    teacher_id,
                    teacher_firstname,
                    teacher_lastname,
                    teacher_username,
                    teacher_password,
                    teacher_status,
                    teacher_session
                )
                values
                (
                    '',
                    '$firstname',
                    '$lastname',
                    '$username',
                    '$password',
                    'Active',
                    'Session Active'
                );
            ");
        }
        else {
            $query = mysqli_query($connect, "
                insert into student_table
                (
                    student_id,
                    student_firstname,
                    student_lastname,
                    student_username,
                    student_password,
                    student_status,
                    student_session
                )
                values
                (
                    '',
                    '$firstname',
                    '$lastname',
                    '$username',
                    '$password',
                    'Active',
                    'Session Active'
                );
            ");
            
        }
        if($query) {
            echo "
                <script>
                    window.open('index.php?message=success','_self');
                </script>
            ";
        }
        else {
            echo "
                <script>
                    window.open('index.php?message=error','_self');
                </script>
            ";
            
        }
    }
    if(isset($_POST['sign_in'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $type = mysqli_real_escape_string($connect, $_POST['type']);
        if($type == "Teacher") {
            $query = mysqli_query($connect, "
                select * from teacher_table
                where
                teacher_username = '$username'
                and
                teacher_password = '$password'
                and
                teacher_status = 'Active';
            ");
        }
        else {
            $query = mysqli_query($connect, "
                select * from student_table
                where
                student_username = '$username'
                and
                student_password = '$password'
                and
                student_status = 'Active';
            ");
            
        }
        $row = mysqli_num_rows($query);
        if($row > 0) {
            if($type == "Teacher") {
                while($fetch = mysqli_fetch_array($query)) {
                    $_SESSION['user_data'] = array(
                        "id" => $fetch['teacher_id'],
                        "firstname" => $fetch['teacher_firstname'],
                        "lastname" => $fetch['teacher_lastname'],
                        "username" => $fetch['teacher_username'],
                        "password" => $fetch['teacher_password'],
                        "status" => $fetch['teacher_status']
                    );
                    $update = mysqli_query($connect, "
                        update teacher_table
                        set
                        teacher_session = 'Session Active'
                        where teacher_id = '".$_SESSION['user_data']['id']."';
                    ");
                    echo "
                        <script>
                            window.open('teacher/index.php?message=success','_self');
                        </script>
                    ";
                }
            }
            else {
                while($fetch = mysqli_fetch_array($query)) {
                    $_SESSION['user_data'] = array(
                        "id" => $fetch['student_id'],
                        "firstname" => $fetch['student_firstname'],
                        "lastname" => $fetch['student_lastname'],
                        "username" => $fetch['student_username'],
                        "password" => $fetch['student_password'],
                        "status" => $fetch['student_status']
                    );
                    $update = mysqli_query($connect, "
                        update student_table
                        set
                        student_session = 'Session Active'
                        where student_id = '".$_SESSION['user_data']['id']."';
                    ");
                    echo "
                        <script>
                            window.open('student/index.php?message=success','_self');
                        </script>
                    ";
                }
            }
        }
        else {
            echo "
                <script>
                    window.open('index.php?message=wrong_credentials','_self');
                </script>
            ";
        }
    }
?>
