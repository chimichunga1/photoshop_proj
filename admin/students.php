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
<li> <a href = "homepage.php"> <span class = "fa fa-user"> </span> Teachers </a> </li>
<li class = "active"> <a href = "students.php"> <span class = "fa fa-user-graduate"> </span> Student </a> </li>
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

<div class="container">
    <?php
        if(isset($_GET['message'])) {
            if($_GET['message'] == "deactivated") {
                ?>
    <div class = "alert alert-danger">
        <h3> <span class = "fa fa-ban"> </span> Account Deactivated </h3>
    </div>
                <?php
            }
            if($_GET['message'] == "activated") {
                ?>
    <div class = "alert alert-success">
        <h3> <span class = "fa fa-check"> </span> Account Re-activated </h3>
    </div>
                <?php
            }
        }
    ?>
<h3 class = "text-primary"> Student Table </h3>
<p> List of all students who are taking the CS6 Tutorial: </p>            
<table class="table table-bordered" id = "student_table">
<thead>
<tr>
<th> # </th>
<th> Firstname </th>
<th> Lastname </th>
<th> Username </th>
<th> Status </th>
<th> Session </th>
<th> Options </th>
</tr>
</thead>
    <tbody>
        <?php
            $query = mysqli_query($connect, "
                select * from student_table;
            ");
            while($fetch = mysqli_fetch_array($query)) {
                $id = $fetch['student_id'];
                $firstname = $fetch['student_firstname'];
                $lastname = $fetch['student_lastname'];
                $username = $fetch['student_username'];
                $status = $fetch['student_status'];
                $session = $fetch['student_session'];
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
            <td> <?php echo $firstname; ?> </td>
            <td> <?php echo $lastname; ?> </td>
            <td> <?php echo $username; ?> </td>
            <td> <?php echo $status; ?> </td>
            <td> <?php echo $session; ?> </td>
            <td>
<div class="dropdown">
<a class=" dropdown-toggle"  data-toggle="dropdown" href = ""> Menu 
<span class="caret"></span></a>
<ul class="dropdown-menu">
<?php
if($status == "Active") {
?>
<li> <a href = "" data-toggle = "modal" data-target = "#deactivate<?php echo $id; ?>"> Deactivate </a> </li>
<?php
}   
else {
?>
<li> <a href = "" data-toggle = "modal" data-target = "#activate<?php echo $id; ?>"> Activate </a> </li>
<?php
}
?>
</ul>
</div>   
            </td>
        </tr>
<div id="deactivate<?php echo $id; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body text-center">
<form method = "post" action = "">
<h3 class = "text-danger"> Are you sure you want to deactivate this account? </h3>
    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<button type = "submit" class = "btn btn-primary" name = "deactivate"> Yes </button>
<button type = "button" class = "btn btn-danger" data-dismiss = "modal"> No </button>
</form>
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
<div class="modal-body text-center">
<form method = "post" action = "">
<h3 class = "text-primary"> Are you sure you want to activate this account? </h3>
    <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<button type = "submit" class = "btn btn-primary" name = "activate"> Yes </button>
<button type = "button" class = "btn btn-danger" data-dismiss = "modal"> No </button>
</form>
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
<tbody>
</tbody>
</table>
</div>
        <script>
            $(document).ready(function(){
                $('#student_table').DataTable({
                    stateSave: true 
                });
            });
        </script>
        
    </body>
</html>
<?php
    if(isset($_POST['deactivate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update student_table
            set
            student_status = 'Deactivated',
            student_session = 'Session Cleared'
            WHERE
            student_id = '$id';
        ");
        echo "
            <script>
                window.open('students.php?message=deactivated','_self');
            </script>
            
        ";
    }
    if(isset($_POST['activate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update student_table
            set
            student_status = 'Active',
            student_session = 'Session Cleared'
            WHERE
            student_id = '$id';
        ");
        echo "
            <script>
                window.open('students.php?message=activated','_self');
            </script>
            
        ";
    }
?>