<?php
    require("../connection.php");
    if(!isset($_SESSION['admin_data'])) {
        header("Location:index.php");
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
<text class="navbar-brand"> <span class = "fa fa-laptop"> </span> Administrator </text>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class = "active"> <a href = "homepage.php"> <span class = "fa fa-user"> </span> Teachers </a> </li>
<li> <a href = "students.php"> <span class = "fa fa-user-graduate"> </span> Student </a> </li>
<li> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
<li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
<!-- End Navbar-->
<!-- Data Table-->
<div class="container">
    <?php
        if(isset($_GET['message'])) {
            if($_GET['message'] == "account_deactivated") {
                ?>
    <div class = "alert alert-danger">
        <h3> <span class = "fa fa-check"> </span> Account deactivated </h3>
    </div>
                <?php
            }
            if($_GET['message'] == "account_reactivated") {
                ?>
    <div class = "alert alert-success">
        <h3> <span class = "fa fa-check"> </span> Account reactivated </h3>
    </div>
                <?php
            }
        }
    ?>
    <h3 class = "text-primary"> Teacher's Table </h3>
    <p> List of all the teachers undertaking CS6 Tutorial </p>
<table class="table table-striped table-bordered" id = "teacher_table">
<thead>
<tr>
<th> # </th>
<th> Full Name </th>
<th> Username </th>
<th> Session </th>
<th> Status </th>
<th> </th>
</tr>
</thead>
    <tbody>
        <?php
            $query = mysqli_query($connect, "
                select * from teacher_table;
            ");
        while($fetch = mysqli_fetch_array($query)) {
            $id = $fetch['teacher_id'];
            $username = $fetch['teacher_username'];
            $password = $fetch['teacher_password'];
            $firstname = $fetch['teacher_firstname'];
            $lastname = $fetch['teacher_lastname'];
            $status = $fetch['teacher_status'];
            $session = $fetch['teacher_session'];
        ?>
        <?php
            if($status == "Active") {
                ?>
        <tr class = "success text-success">
                <?php
            }   
            else {
                ?>
        <tr class = "danger text-danger">
                <?php
            }
        ?>
            <td> <?php echo $id; ?> </td>
            <td> <?php echo $firstname . " " . $lastname; ?> </td>
            <td> <?php echo $username; ?> </td>
            <td> <?php echo $session; ?> </td>
            <td> <?php echo $status; ?> </td>
            <td> 
            <?php
                if($status == "Active") {
                    ?>
                
                <div class="dropdown">
                <a class = "dropdown-toggle" type="button" data-toggle="dropdown" href = ""> Options
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li> <a href = "" data-toggle = "modal" data-target = "#deactivate<?php echo $id; ?>"> Deactivate Account </a> </li>
                </ul>
                </div>
                    <?php
                }
                else {
                    ?>
                    <div class="dropdown">
                    <a class = "dropdown-toggle" type="button" data-toggle="dropdown" href = ""> Options
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li> <a href = "" data-toggle = "modal" data-target = "#activate<?php echo $id; ?>"> Re-Activate Account </a> </li>
                    </ul>
                    </div>
                    <?php
                }
            ?>
            </td>
        </tr>
<div id="deactivate<?php echo $id; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<center>
<h3 class = "text-danger"> Are you sure you want to deactivate this account? </h3>
<form method = "post" action = "">
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<button type = "submit" class = "btn btn-primary" name = "deactivate"> Yes </button>
<button type = "button" data-dismiss = "modal" class = "btn btn-danger"> No </button>
</form>
</center>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
<div id="activate<?php echo $id; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<center>
<h3 class = "text-danger"> Are you sure you want to re-activate this account? </h3>
<form method = "post" action = "">
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<button type = "submit" class = "btn btn-primary" name = "activate"> Yes </button>
<button type = "button" data-dismiss = "modal" class = "btn btn-danger"> No </button>
</form>
</center>
</div>
<div class="modal-footer">
</div>
</div>
</div>
</div>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<script>
$(document).ready(function() {
$('#teacher_table').DataTable({
"stateSave": true 
});
});
</script>
<!-- End Data Table -->
    </body>
</html>
<?php
    if(isset($_POST['deactivate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update teacher_table
            set
            teacher_status = 'Deactivated',
            teacher_session = 'Session Cleared'
            where
            teacher_id = '$id';
        ");
        echo "
            <script>
                window.open('homepage.php?message=account_deactivated','_self');
            </script>
        ";
    }
    if(isset($_POST['activate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update teacher_table
            set
            teacher_status = 'Active',
            teacher_session = 'Session Cleared'
            where
            teacher_id = '$id';
        ");
        echo "
            <script>
                window.open('homepage.php?message=account_reactivated','_self');
            </script>
        ";
    }
?>