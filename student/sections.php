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
    <li class = "active"> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li> <a href = "settings.php"> <span class = "fa fa-cog"></span> Settings </a> </li>
    <li> <a href = "signout.php"> <span class = "fa fa-sign-out-alt"></span> Sign out </a> </li>
</ul>
</div>
</div>
</nav>
        
<div class="container">
    <?php
        if(isset($_GET['message'])) {
            if($_GET['message'] == "approval_pending") {
                ?>
    <div class = "alert alert-warning">
        <h3> <span class = "fa fa-exclamation"> </span> Waiting for the approval of the teacher </h3>
    </div>
                <?php
            }
        }
    ?>
    <h3 class = "text-primary"> List of sections </h3>
<table class="table table-bordered" id = "section_table">
<thead>
<tr class = "info">
    <th> # </th>
    <th> Code </th>
    <th> Description </th>
    <th> Students </th>
    <th> Status </th>
    <th> Adviser </th>
    <th> Options </th>
</tr>
</thead>
    <tbody>
        <?php
            $query = mysqli_query($connect, "
                select * from section_table
                inner join teacher_table
                on section_table.teacher_id = teacher_table.teacher_id;
            ");
            while($fetch = mysqli_fetch_array($query)) {
                $id = $fetch['section_id'];
                $code = $fetch['section_code'];
                $name = $fetch['section_name'];
                $count = $fetch['section_count'];
                $availability = $fetch['section_availability'];
                $firstname = $fetch['teacher_firstname'];
                $lastname = $fetch['teacher_lastname'];
            ?>
            <?php
                if($availability == "Available") {
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
            <td> <?php echo $code; ?> </td>
            <td> <?php echo $name; ?> </td>
            <td> <?php echo $count; ?> </td>
            <td> <?php echo $availability; ?> </td>
            <td> <?php echo $firstname . " " . $lastname; ?> </td>
            <td> 
                <?php
                    if($availability != "Available") {
                        ?>
                <span class = "fa fa-times"> </span> Not Available
                        <?php
                    }
                    else {
                        $query2 = mysqli_query($connect, "
                            select * from section_info_table
                            where
                            section_id = '$id';
                        ");
                        $row2 = mysqli_num_rows($query2);
                        if($row2 == 0) {
                            ?>
                <a href = "" data-toggle = "modal" data-target = "#join<?php echo $id; ?>"> <span class = "fa fa-sign-in-alt"> </span> Join Section </a>
                            <?php
                        }
                        else {
                            
                            while($fetch2 = mysqli_fetch_array($query2)) {
                                $section_confirm_status = $fetch2['section_confirm_status'];
                            }
                            if($section_confirm_status == "Pending") {
                                ?>
                    <span class = "fa fa-question"> </span> Waiting of approval
                                <?php
                            }
                            else {
                                ?>
                    <span class = "fa fa-check"> </span> Member

                                <?php
                            }
                            
                        }
                    }
                ?>
            
            </td>
        </tr>
        <div class = "modal fade" role = "dialog" id = "join<?php echo $id; ?>">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button class = "close" data-dismiss = "modal"> <span class = "fa fa-times">  </span> </button>
                    </div>
                    <div class = "modal-body">
                        <center>
                            <form method = "post" action = "">
                                <input type = "hidden" name = "section_id" value = "<?php echo $id; ?>">
                                <input type = "hidden" name = "student_id" value = "<?php echo $_SESSION['user_data']['id']; ?>">
                                <h3 class = "text-info"> Are you sure you want to join this section? </h3>
                                <button type = "submit" class = "btn btn-primary" name = "join"> Yes </button>
                                <button type = "close" data-dismiss = "modal" class = "btn btn-danger"> No </button>
                            </form>
                        </center>
                    </div>
                    <div class = "modal-footer"></div>
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
    if(isset($_POST['join'])) {
        $id = $_POST['section_id'];
        $id2 = $_POST['student_id'];
        $query = mysqli_query($connect, "
            insert into section_info_table
            (section_info_id, section_id, student_id, section_confirm_status)
            values
            ('','$id', '$id2','Pending');
        ");
        echo "
            <script>
                window.open('sections.php?message=approval_pending','_self');
            </script>
        ";
    }
?>