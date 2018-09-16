<?php
    require("../connection.php");
    if(!isset($_SESSION['user_data'])) {
        header("Location:../index.php");
    }
?>
<html lang = "en">
    <head>
        <?php require("frameworks.php"); ?>
    </head>
    <body>
    
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<a class="navbar-brand" href="#"> <span class = "fa fa-laptop"> </span> CS6 Tutorial </a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
    <li> <a href = "index.php"> <span class = "fa fa-book"> </span> Lessons </a> </li>
    <li> <a href = "exams.php"> <span class = "fa fa-pencil-alt"> </span> Exams </a> </li>
    <li> <a href = "results.php"> <span class = "fa fa-question"> </span> Results </a> </li>
    <li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li class = "active"> <a href = "settings.php"> <span class = "fa fa-cog"></span> Settings </a> </li>
    <li> <a href = "signout.php"> <span class = "fa fa-sign-out-alt"></span> Sign out </a> </li>
</ul>
</div>
</div>
</nav>
        <div class = "container">
            <?php
                if(isset($_GET['action'])) {
                    if($_GET['action'] == "username_changed") {
                        ?>
            <div class = "alert alert-success">
                <h3> <span class = 'fa fa-check'> </span> Username changed succesfully </h3>
            </div>
                        <?php
                    }
                }
                if(isset($_GET['action'])) {
                    if($_GET['action'] == "password_changed") {
                        ?>
            <div class = "alert alert-success">
                <h3> <span class = 'fa fa-check'> </span> Password changed succesfully </h3>
            </div>
                        <?php
                    }
                }
            ?>
        </div>
        <div class = "container">
            <div class = "col-xs-3">            
                <div class = "well">
                    <ul class = "list-group">
                        <li class = "list-group-item"> <a href = "settings.php?choice=username"> <span class = "fa fa-user"> </span> Change Username </a> </li>
                        <li class = "list-group-item"> <a href = "settings.php?choice=password"> <span class = "fa fa-lock"> </span> Change Password </a> </li>
                    </ul>
                </div>   
            </div>
            <div class = "col-xs-9">
                <div class = "well">
                    <table class = 'table'>
                        <tr>
                            <td class = "text-info info"> ID#: </td>
                            <td class = "success text-primary"> <?php echo $_SESSION['user_data']['id']; ?> </td>
                        </tr>
                        <tr>
                            <td class = "text-info info"> Firstname: </td>
                            <td class = "success text-primary"> <?php echo $_SESSION['user_data']['firstname']; ?> </td>
                        </tr>
                        <tr>
                            <td class = "text-info info"> Lastname: </td>
                            <td class = "success text-primary"> <?php echo $_SESSION['user_data']['lastname']; ?> </td>
                        </tr>
                        <tr>
                            <td class = "text-info info"> Username: </td>
                            <td class = "success text-primary"> <?php echo $_SESSION['user_data']['username']; ?> </td>
                        </tr>
                    </table>
                </div>
                <?php
                    if(!isset($_GET['choice'])) {
                ?>
                <div class = "alert alert-info">
                    <h3> <span class = "fa fa-arrow-left"> </span> Choose from the following options </h3>
                </div>
                <?php
                    }
                    else {
                        if($_GET['choice'] == "username") {
                            ?>
                <div class = "well">
                    <form method = "post" action = "">
                        <center>
                            <h3 class = "text-info"> Change Username </h3>
                        </center>
                            <form method = "post" action = "">
                                <div class = "form-group">
                                    <label> Input new username </label>
                                    <input type = "hidden" name = "id" value = "<?php echo $_SESSION['user_data']['id']; ?>">
                                    <input type = "text" class = 'form-control' name = "username" id = "username">
                                    <p id = "result"> </p>
                                    <center>
                                        <button type = "submit" disabled class = "btn btn-primary" name = "UpdateUsername" id = "Btn_Username"> Save Changes </button>
                                    </center>
                                    <script>
                                        $(document).ready(function() {
                                            $('#username').on('keyup', function() {
                                                var username = $('#username').val();
                                                var count = username.length;
                                                $.ajax({
                                                    url: "settings-ajax.php",
                                                    method: "post",
                                                    dataType: "text",
                                                    data: {username, username},
                                                    success: function(username_data) {
                                                        var username_result = $.trim(username_data);
                                                        if(count == 0) {
                                                            $('#result').html("<span class = 'fa fa-times'> </span> Field cannot be empty");
                                                            $('#result').attr("class" , "text-danger text-right");
                                                            $('#Btn_Username').attr("disabled", true);
                                                        }
                                                        else if(username_result == "1") {
                                                            $('#result').html("<span class = 'fa fa-times'> </span> Username already existing");
                                                            $('#result').attr("class" , "text-danger text-right");
                                                            $('#Btn_Username').attr("disabled", true);
                                                        }
                                                        else {
                                                            $('#result').html("<span class = 'fa fa-check'> </span> Username available");
                                                            $('#result').attr("class" , "text-success text-right");
                                                            $('#Btn_Username').attr("disabled", false);
                                                        }
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                            </form>
                    </form>
                </div>
                            <?php
                        }
                        else if($_GET['choice'] == "password") {
                            ?>
                <div class = 'well'>
                    <form method = "post" action = "">
                        <div class = "form-group">
                            <input type = "hidden" id = "oldpass" value = "<?php echo $_SESSION['user_data']['password']; ?>">
                            <input type = "hidden" name = "id" value = "<?php echo $_SESSION['user_data']['id']; ?>">
                            <label> Input old password </label>
                            <input type = "password" id = "check" class = 'form-control' required>
                        </div>
                        <div class = "form-group">
                            <label> New Password </label>
                            <input type = "password" class = "form-control" required id = "new" disabled>
                        </div>
                        <div class = "form-group">
                            <label> New Password </label>
                            <input type = "password" class = "form-control" required id = "checknew" disabled name = "password">
                        </div>
                        <button type = "submit" class = "btn btn-primary" name = "UpdatePassword" id = "Btn_Password" disabled> Save Changes </button>
                        <script>
                            $(document).ready(function() {
                                $('#check').on('keyup', function() {                                    
                                    var old = $('#oldpass').val();
                                    var check = $('#check').val();
                                    if(old == check) {
                                        $('#new').attr("disabled", false);
                                        $('#checknew').attr("disabled", false);
                                        $('#Btn_Password').attr("disabled", false);
                                    }
                                    else {
                                        $('#new').attr("disabled", true);
                                        $('#checknew').attr("disabled", true);
                                        $('#Btn_Password').attr("disabled", true);
                                    }
                                });
                            });
                        </script>
                    </form>
                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>  
    </body>
</html>
<?php
    if(isset($_POST['UpdateUsername'])) {
        $id = $_POST['id'];
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $query = mysqli_query($connect, "
            update student_table
            set student_username = '$username'
            where
            student_id = '$id';
        ");
        $_SESSION['user_data']['username'] = $username;
        echo "
            <script>
                window.open('settings.php?choice=username&action=username_changed','_self');
            </script>
        ";
    }
    if(isset($_POST['UpdatePassword'])) {
        $id = $_POST['id'];
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $query = mysqli_query($connect, "
            update student_table
            set
            student_password = '$password'
            where
            student_id = '$id';
        ");
        $_SESSION['user_data']['password'] = $password;
        echo "
            <script>
                window.open('settings.php?choice=password&action=password_changed','_self');
            </script>
        ";
    }
?>