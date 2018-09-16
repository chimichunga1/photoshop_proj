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
<li> <a href = "students.php"> <span class = "fa fa-user-graduate"> </span> Student </a> </li>
<li> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
<li class = "active"> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
        <!-- End Navbar-->
        <div class = "container">
        <?php
            if(isset($_GET['message'])) {
                if($_GET['message'] == "deactivated") {
                    ?>
            <div class = "alert alert-danger">
                <h3> <span class = "fa fa-check"> </span> Section Deactivated </h3>
            </div>
                    <?php
                }
                else if($_GET['message'] == "activated") {
                    ?>
            <div class = "alert alert-success">
                <h3> <span class = "fa fa-check"> </span> Section Reactivated </h3>
            </div>
                    <?php
                }
            }    
        ?>
<h3 class = "text-primary"> Section Table </h3>
<p> List of all sections related to CS6 Tutorial: </p>
<table class="table table-bordered table-responsive" id = "section_table">
<thead>
<tr>
<th> # </th>
<th> Code </th>
<th> Description </th>
<th> Members </th>
<th> Adviser </th>
<th> Status </th>
<th> Options </th>
</tr>
</thead>
<tbody>
    <?php
    $query = mysqli_query($connect, "
        select * from section_table
        inner join teacher_table
        on
        section_table.teacher_id = teacher_table.teacher_id;
    ");
    while($fetch = mysqli_fetch_array($query)) {
        $id = $fetch['section_id'];
        $code = $fetch['section_code'];
        $name = $fetch['section_name'];
        $count = $fetch['section_count'];
        $availability = $fetch['section_availability'];
        $teacher_name = $fetch['teacher_firstname'] . " " . $fetch['teacher_lastname'];
    ?>
    <?php
        if($availability == "Available") {
            ?>
    <tr class = "info text-primary">
            <?php
        }  
        else {
            ?>
    <tr class = "danger text-danger">
            <?php
        }
    ?>
        <td> <?php echo $id; ?> </td>
        <td> <?php echo $code; ?> </td>
        <td> <?php echo $name; ?> </td>
        <td> <?php echo $count; ?> </td>
        <td> <?php echo $teacher_name; ?> </td>
        <td> <?php echo $availability; ?> </td>
        <td> 
<div class="dropdown">
<a class="dropdown-toggle" href = "" data-toggle="dropdown"> Menu
<span class="caret"></span></a>
<ul class="dropdown-menu">
    <?php
        if($availability == "Deactivated") {
            ?>
<li> <a href = "" data-toggle = "modal" data-target = "#activate<?php echo $id; ?>"> Activate </a> </li>
            <?php
        }   
        else {
            ?>
<li> <a href = "" data-toggle = "modal" data-target = "#deactivate<?php echo $id; ?>"> Deactivate </a> </li>
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
<div class="modal-body">
    <form method = "post" action = "">
        <center>
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
            <h3 class = "text-danger"> Are you sure you want to deactivate this section? </h3>
            <button type = "submit" class = "btn btn-primary" name = "deactivate"> Yes </button>
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> No </button>
        </center>
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
<div class="modal-body">
    <form method = "post" action = "">
        <center>
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
            <h3 class = "text-danger"> Are you sure you want to reactivate this section? </h3>
            <button type = "submit" class = "btn btn-primary" name = "activate"> Yes </button>
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> No </button>
        </center>
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
</table>       
            <script>
                $(document).ready(function() {
                    $('#section_table').DataTable({
                        stateSave: true 
                    });
                });
            </script>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['deactivate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update section_table
            set section_availability = 'Deactivated'
            where
            section_id = '$id';
        ");
        echo "
            <script>
                window.open('sections.php?message=deactivated','_self');
            </script>
        ";
    }
    else if(isset($_POST['activate'])) {
        $id = $_POST['id'];
        $query = mysqli_query($connect, "
            update section_table
            set section_availability = 'Available'
            where
            section_id = '$id';
        ");
        echo "
            <script>
                window.open('sections.php?message=activated','_self');
            </script>
        ";
    }
?>