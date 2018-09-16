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
<li class = "active"> <a href = "index.php"> <span class = "fa fa-user"> </span> Students </a> </li>
<li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
<li> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="settings.php"><span class="fa fa-cogs"></span> Settings </a></li>
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
<!-- End Navbar-->
<div class = "container">
<?php

if(isset($_GET['message'])) {
if($_GET['message'] == "student_confirmed") {
?>
<div class = "alert alert-success">
<h3> <span class = "fa fa-check"> </span> Student Confirmed </h3>
</div>
<?php
}
}    
?>
<?php
if(isset($_GET['message'])) {
if($_GET['message'] == "success") {
?>
<div class = "alert alert-success">
<h3> Welcome: <?php echo $_SESSION['user_data']['firstname'] . " " . $_SESSION['user_data']['lastname']; ?> <span class = "fa fa-exclamation"> </span> </h3>
</div>
<?php
}
}
?>
    
<table class = "table table-striped table-bordered" id = "confirmation_table">
<h3 class = 'text-info'> Student Confirmation </h3>
<thead>
<tr class = "info text-info">
<th> # </th>
<th> Section Code </th>
<th> Description </th>
<th> Student Name </th>
<th> Action </th>
</tr>
</thead>
<tbody>
<?php
$TID = $_SESSION['user_data']['id'];
$query = mysqli_query($connect, "
select * from section_info_table
inner join section_table
on section_info_table.section_id = section_table.section_id
inner join student_table
on section_info_table.student_id = student_table.student_id
where section_table.teacher_id = '$TID';
");
while($fetch = mysqli_fetch_array($query)) {
$student_name = $fetch['student_firstname'] . " " . $fetch['student_lastname'];
$section_code = $fetch['section_code'];
$section_info_id = $fetch['section_info_id'];
$section_count = $fetch['section_count'];
$section_name = $fetch['section_name'];
$section_confirm_status = $fetch['section_confirm_status'];
$section_id = $fetch['section_id'];
?>
<tr class = "warning text-warning">
<td> <?php echo $section_info_id; ?> </td>
<td> <?php echo $section_code; ?> </td>
<td> <?php echo $section_name; ?> </td>
<td> <?php echo $student_name; ?> </td>
<td> 
<?php
if($section_confirm_status == "Pending") {
?>
<a href = "" data-toggle = "modal" data-target = "#confirmstudent<?php echo $section_info_id; ?>"> <span class = "fa fa-check"> </span> Confirm Student </a>
<?php
}
else {
?>
<span class = "fa fa-exclamation"> </span> Already a member
<?php
}
?>
</td>
</tr>
<div class = "modal fade" role = "dialog" id = "confirmstudent<?php echo $section_info_id; ?>">
<div class = "modal-dialog">
<div class = "modal-content">
<div class = "modal-header">
<button class = "close" data-dismiss = "modal"> <span class = "fa fa-times"> </span> </button>
</div>
<div class = "modal-body">
<form method = "post" action = "">
<center>
<h3 class = "text-info"> Are you sure you want to confirm this student? </h3>
<input type = "hidden" name = "id" value = "<?php echo $section_info_id; ?>">
<input type = "hidden" name = "id2" value = "<?php echo $section_id; ?>">
<input type = "hidden" name = "count" value = "<?php echo $section_count; ?>">
<button type = "submit" class = "btn btn-primary" name = "confirm"> Yes </button>
<button type = "button" class = "btn btn-danger" data-dismiss = "modal"> No </button>
</center>
</form>
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
            $('#confirmation_table').DataTable({
                stateSave: true 
            });
        });
    </script>
</div>
</body>
</html>
<?php

if(isset($_POST['confirm'])) {
$id = $_POST['id'];
$id2 = $_POST['id2'];
$count = $_POST['count'];
$count++;
$query = mysqli_query($connect, "
update section_info_table
set
section_confirm_status = 'Confirmed'
where
section_info_id = '$id';
");
$query = mysqli_query($connect, "
update section_table
set
section_count = '$count'
where
section_id = '$id2';
");
echo "
<script>
window.open('sections.php?message=student_confirmed','_self');
</script>
";
}
?>