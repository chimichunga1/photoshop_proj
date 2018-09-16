<?php
    require("../connection.php");
    if(isset($_SESSION['admin_data'])) {
        header("Location:homepage.php");
    }
?>
<html lang = "en">
    <head>
        <?php require("frameworks.php"); ?>
    </head>
    <body>
        <div class = "container">
            <div class = "col-xs-3"></div>
            <div class = "col-xs-6">
                <?php
                    if(isset($_GET['error'])) {
                        if($_GET['error'] == "credentials") {
                            ?>
                <div class = "alert alert-danger">
                    <center>
                        <h3> <span class = "fa fa-times"> </span> Wrong username or password </h3>
                    </center>
                </div>
                            <?php
                        }
                        else {
                            ?>
                <div class = "alert alert-danger">
                    <center>
                        <h3> <span class = "fa fa-times"> </span> Unknown error has occured </h3>
                    </center>
                </div>
                            <?php
                        }
                    }
                ?>
                <div class = "jumbotron">
                    <center>
                        <h3 class = "text-primary"> Administrator Login </h3>
                    </center>
                    <form method = "post" action = "">
                        <div class = "form-group">
                            <label> <span class = "fa fa-user"> </span> Username </label>
                            <input type = "text" class = "form-control" required name = "username">
                        </div>
                        <div class = "form-group">
                            <label> <span class = "fa fa-lock"> </span> Password </label>
                            <input type = "password" class = "form-control" required name = "password">
                        </div>
                        <center>
                            <button type = "submit" class = "btn btn-primary" name = "signin"> Sign in </button>
                        </center>
                    </form>
                </div>
            </div>
            <div class = "col-xs-3"></div>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['signin'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $query = mysqli_query($connect, "
            select * from admin_table
            where
            admin_username = '$username'
            and
            admin_password = '$password';
            
        ");
        $row = mysqli_num_rows($query);
        if($row > 0) {
            while($fetch = mysqli_fetch_array($query)) {
                $data_1 = $fetch['admin_id'];
                $data_2 = $fetch['admin_firstname'];
                $data_3 = $fetch['admin_lastname'];
            }
            $_SESSION['admin_data'] = array(
                "id" => $data_1,
                "username" => $data_2,
                "password" => $data_3
            );
            header("Location:homepage.php");
        }
        else {
            echo "
                <script>
                    window.open('index.php?error=credentials','_self');
                </script>
            ";
        }
    }
?>