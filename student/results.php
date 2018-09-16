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
    <li class = "active"> <a href = "results.php"> <span class = "fa fa-question"> </span> Results </a> </li>
    <li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li> <a href = "settings.php"> <span class = "fa fa-cog"></span> Settings </a> </li>
    <li> <a href = "signout.php"> <span class = "fa fa-sign-out-alt"></span> Sign out </a> </li>
</ul>
</div>
</div>
</nav>
        <div class = "container">
            <div class = "well">
                <center>
                    <h1 class = "text-info"> Quiz Results </h1>
                </center>
                <table class = "table table-bordered" id = "score_table">
                    <thead>
                        <tr class = "info">
                            <th> # </th>
                            <th> Description </th>
                            <th> Teacher </th>
                            <th> Score </th>
                            <th> Remarks </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $id = $_SESSION['user_data']['id'];
                        $query = mysqli_query($connect, "
                            select * from score_table
                            inner join quiz_table
                            on quiz_table.quiz_id = score_table.quiz_id
                            inner join section_info_table
                            on score_table.section_info_id = section_info_table.section_info_id
                            inner join section_table
                            on section_info_table.section_id = section_table.section_id
                            inner join teacher_table
                            on section_table.teacher_id = teacher_table.teacher_id
                            where
                            score_table.student_id = '$id'
                        ");
                        while($fetch = mysqli_fetch_array($query)) {
                            $score_id = $fetch['score_id'];
                            $score_info = $fetch['score_info'];
                            $quiz_description = $fetch['quiz_description'];
                            $score_remarks = $fetch['score_remarks'];
                            $teacher_name = $fetch['teacher_firstname'] . " " . $fetch['teacher_lastname'];
                        ?>
                        <?php
                            if($score_remarks == "Perfect") {
                                ?>
                        <tr class = "success text-success">
                                <?php
                            }    
                            else if($score_remarks == "Poor") {
                                ?>
                        <tr class = "danger text-danger">
                                <?php
                            }    
                            else {
                                ?>
                        <tr class = "info text-info">
                                <?php
                            }    
                        ?>
                            <td> <?php echo $score_id; ?> </td>
                            <td> <?php echo $quiz_description; ?> </td>
                            <td> <?php echo $teacher_name; ?> </td>
                            <td> <?php echo $score_info; ?> </td>
                            <td> <?php echo $score_remarks; ?> </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        $('#score_table').DataTable({
            stateSave: true 
        });
    });
</script>