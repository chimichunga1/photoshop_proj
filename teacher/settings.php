<?php
    require("../connection.php");
    if(!isset($_SESSION['user_data'])) {
        header("Location:../index.php?message=no_credential");
    }
?>
<html lang = "en">
    <head>
        <?php require("frameworks.php"); ?>
    </head>
    <body>
        <!--Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<text class="navbar-brand"> <span class = "fa fa-user-alt"> </span> Teacher Portal </text>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li> <a href = "index.php"> <span class = "fa fa-user"> </span> Students </a> </li>
<li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
<li> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class = "active"><a href="settings.php"><span class="fa fa-cogs"></span> Settings </a></li>
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
        <!-- End Navbar-->
    </body>
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
            <?php
            if(isset($_GET['message'])) {
                if($_GET['message'] == "username_changed") {
                    ?>
            <div class = "alert alert-success">
                <h3> <span class = "fa fa-check"></span> Username changed succesfully </h3>
            </div>
                    <?php
                }
            }
                if(!isset($_GET['choice'])) {
                    ?>
            
            <div class = "alert alert-info">
                <h3 class = "text-info"> <span class = 'fa fa-arrow-left'> </span> Choose from the following options </h3>
            </div>
                    <?php
                }
            else {
                if($_GET['choice'] == "username") {
                    ?>
            <div class = "well">
                <form method = "post" action = "">
                    <input type = "hidden" name = "id" value = "<?php echo $_SESSION['user_data']['id']; ?>">
                    <div class = "form-group">
                        <label class = "text-info"> Input new username </label>
                        <input type = "text" class = "form-control" id = "username" required name = "username">
                    </div>
                    <p id = "username_result"> </p>
                    <center>
                        <button type = "submit" disabled id = "Btn_ChangeUsername" class = "btn btn-primary" name = "ChangeUsername"> Change Username </button>
                    </center>
                </form>
            </div>
                    <?php
                }
                else {
                 ?>
            <div class = "well">
                <form method = "post" action = "">
                    <div class = "form-group">
                        <label class = "text-primary"> Input old password </label>
                        <input type = "password" id = "check" class = "form-control" required>
                    </div>
                    <input type = "hidden" name = "old" value = "<?php echo $_SESSION['user_data']['password']; ?>">
                    <div class = "form-group">
                        <label class = "text-primary"> New Password </label>
                        <input type = "password" class = 'form-control' required disabled id = "a1">
                    </div>
                    <div class = "form-group">
                        <label class = "text-primary"> Confirm Password </label>
                        <input type = "password" class = 'form-control' required disabled id = "a2">
                    </div>
                    <center>
                        <button type = "submit" class = "btn btn-primary" disabled name = "ChangePassword" id = "Btn_Password"> Save Changes </button>
                    </center>
                </form>
            </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</html>
<script>
    $(document).ready(function() {
        $('#username').on('keyup', function() {
            var username = $('#username').val();
            $.ajax({
                url: "settings-ajax.php",
                method: "post",
                data: {username: username},
                dataType: "text",
                success:function(username_data) {
                    var username_result = $.trim(username_data);
                    if(username.length == 0) {
                        $('#username_result').html(" <span class = 'fa fa-times'> </span>  Field cannot be empty");
                        $('#username_result').attr('class',"text-danger");
                        $('#Btn_ChangeUsername').attr("disabled", true);
                    }
                    else if(username_result == "1") {
                        $('#username_result').html(" <span class = 'fa fa-times'> </span>  Username already existing");
                        $('#username_result').attr('class',"text-danger");
                        $('#Btn_ChangeUsername').attr("disabled", true);
                        
                    }
                    else {
                        $('#username_result').html(" <span class = 'fa fa-check'> </span>  Username available");
                        $('#username_result').attr('class',"text-success");
                        $('#Btn_ChangeUsername').attr("disabled", false);
                    }
                }
            });
        });
        $('#check').on('keyup', function() {
            var a1 = $('#old').val(); 
            var a2 = $('#check').val();
            if(a2.length == 0) {
                $('#a1').attr("disabled", true);
                $('#a2').attr("disabled", true);
            }
            else {
                
            }
        });
    });
</script>
<?php
    if(isset($_POST['ChangeUsername'])) {
        $id = $_POST['id'];
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $query = mysqli_query($connect, "
            update teacher_table
            set
            teacher_username = '$username'
            where
            teacher_id = '$id';
        ");
        $_SESSION['user_data']['username'] = $username;
        echo "
            <script>
                window.open('settings.php?choice=username&message=username_changed','_self');
            </script>
        ";
    }
?>