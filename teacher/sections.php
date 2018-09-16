<?php
require("../connection.php");
if(!isset($_SESSION['user_data'])) {
header("Location:../index.php?message=no_credential");
}
?>
<html lang = "en">
<head>
<?php require("frameworks.php"); ?>
<style>
a:hover {
text-decoration: none;
}
</style>
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
<li class = "active"> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
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
if($_GET['message'] == "add_section_success") {
?>
<div class = "alert alert-success">
<h3> <span class = "fa fa-check"> </span> Added new section </h3>
</div>
<?php
}
if($_GET['message'] == "section_deactivated") {
?>
<div class = "alert alert-danger">
<h3> <span class = "fa fa-ban"> </span> Section deactivated </h3>
</div>
<?php
}
if($_GET['message'] == "section_reactivated") {
?>
<div class = "alert alert-success">
<h3> <span class = "fa fa-check"> </span> Section re-activated </h3>
</div>
<?php
}
}
?>
<h2 class = "text-primary"> Section Table </h2>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_section"> <span class = "fa fa-plus"> </span> Add new Section </button>
<div id="add_section" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"> Fill up information </h4>
</div>
<div class="modal-body">
<form method = "post" action = "">
<div class = "form-group">
<input type = "hidden" name = "id" value = "<?php echo $_SESSION['user_data']['id']; ?>">
<label> Section Name </label>
<input type = "text" class = "form-control" name = "section">
</div>
<center>
<button type = "submit" class = "btn btn-primary" name = "create_section"> Create Section </button>
</center>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<hr>
<table class="table table-striped table-bordered" id = "section_table">
<thead>
<tr class = "info text-info">
<th>#</th>
<th> Code </th>
<th> Section Name </th>
<th> Number of students </th>
<th> Status </th>
<th> Options </th>
</tr>
</thead>
<tbody>
<?php
$sec_tea_id = $_SESSION['user_data']['id'];
$query = mysqli_query($connect, "
select * from section_table
where
teacher_id = '$sec_tea_id';
");
while($fetch = mysqli_fetch_array($query)) {
$id = $fetch['section_id'];
$name = $fetch['section_name'];
$code = $fetch['section_code'];
$count = $fetch['section_count'];
$availability = $fetch['section_availability'];
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
<td> 

<div class="dropdown">
<a class="dropdown-toggle"  href = "" data-toggle="dropdown"> <span class = "fa fa-cogs"> </span> Options
<span class="caret"></span></a>
<ul class="dropdown-menu">
<?php
if($availability == "Available") {
?>
<li> <a href = "" data-toggle = "modal" data-target = "#deactivate<?php echo $id; ?>"> Deactivate Section </a> </li>
<?php
}   
else {
?>
<li> <a href = "" data-toggle = "modal" data-target = "#reactivate<?php echo $id; ?>"> Re-Activate Section </a> </li>
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
<h3 class = "text-danger"> Are you sure you want to deactivate this section? </h3>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
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
<div id="reactivate<?php echo $id; ?>" class="modal fade" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form method = "post" action = "">
<center>
<h3 class = "text-danger"> Are you sure you want to re-activate this section? </h3>
<input type = "hidden" name = "id" value = "<?php echo $id; ?>">
<button type = "submit" class = "btn btn-primary" name = "reactivate"> Yes </button>
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
$('#section_table,#confirmation_table').DataTable({
stateSave: true
});
});
</script>
</div>
</body>
</html>
<?php
if(isset($_POST['create_section'])) {
$section = mysqli_real_escape_string($connect, $_POST['section']);
$id = mysqli_real_escape_string($connect, $_POST['id']);
$query = mysqli_query($connect, "
insert into section_table
(section_id, section_name, section_count, teacher_id, section_availability)
values
('','$section','0','$id','Available');
");
$query2 = mysqli_query($connect, "
select * from section_table
order by section_id
desc limit 1;
");
while($fetch = mysqli_fetch_array($query2)) {
$fetch_id = $fetch['section_id'];
}
$code = "CS6SEC" . date("Y") . $fetch_id;
$update = mysqli_query($connect, "
update section_table
set
section_code = '$code'
where
section_id = '$fetch_id';
");
echo "
<script>
window.open('sections.php?message=add_section_success','_self');
</script>
";
}
if(isset($_POST['deactivate'])) {
$id = $_POST['id'];
$query = mysqli_query($connect, "
update section_table
set
section_availability = 'Deactivated'
where
section_id = '$id';
");
echo "
<script>
window.open('sections.php?message=section_deactivated','_self');
</script>
";
}
if(isset($_POST['reactivate'])) {
$id = $_POST['id'];
$query = mysqli_query($connect, "
update section_table
set
section_availability = 'Available'
where
section_id = '$id';
");
echo "
<script>
window.open('sections.php?message=section_reactivated','_self');
</script>
";
}
?>