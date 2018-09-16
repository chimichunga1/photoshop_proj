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
<li class = "active"> <a href = "scores.php"> <span class = "fa fa-clipboard"> </span> Scores </a> </li>
<li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="signout.php"><span class="fa fa-sign-out-alt"></span> Sign out </a></li>
</ul>
</div>
</div>
</nav>
        <!-- End Navbar-->
        <div class = "container-fluid">
            <?php
            if(isset($_GET['action'])) {
                if($_GET['action'] == "question_added") {
            ?>
            <div class = "alert alert-success">
                <h3> <span class = "fa fa-check"> </span> Succesfully added a question </h3>
            </div>
            <?php
                }
                if($_GET['action'] == "quiz_added") {
            ?>
            <div class = "alert alert-success">
                <h3> <span class = "fa fa-check"> </span> Succesfully added a new quiz </h3>
            </div>
            <?php
                }
            }
            ?>
            <div class = "well">
                <button data-toggle = "modal" data-target = "#Modal_AddQuestion" class = "btn btn-primary">
                    <span class = "fa fa-plus"> </span> Add a question
                </button>
                <button data-toggle = "modal" data-target = "#Modal_AddQuiz" class = "btn btn-primary">
                    <span class = "fa fa-plus"> </span> Add a Quiz
                </button>
            </div>
        </div>
        <div class = "modal fade" role = "dialog" id = "Modal_AddQuiz">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header"><button class = "close" data-dismiss = "modal"> <span class = "fa fa-times"> </span> </button></div>
                    <div class = "modal-body">
                        <form method = "post" action = "">
                            <div class = "form-group">
                                <label> Quiz Description </label>
                                <input type = "text" class = "form-control" required name = "quiz">
                            </div>
                            <center>
                                <button type = "submit" class = "btn btn-primary" name = "savequiz"> Save Quiz </button>
                            </center>
                        </form>
                    </div>
                    <div class = "modal-footer"></div>
                </div>
            </div>
        </div>
        <div class = "modal fade" role = "dialog" id = "Modal_AddQuestion">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <button class = 'close' data-dismiss = "modal"> <span class = 'fa fa-times'> </span> </button>
                    </div>
                    <div class = "modal-body">
                        <form method = "post" action = "">
                            <select class = "form-control" required name = "quiz_id">
                                <option value = ""> Select Quiz ID </option>
                                <?php
                                    $query = mysqli_query($connect, "
                                        select * from quiz_table;
                                    ");
                                while($fetch = mysqli_fetch_array($query)) {
                                    $quiz_id = $fetch['quiz_id'];
                                    $quiz_description = $fetch['quiz_description'];
                                ?>
                                <option value = "<?php echo $quiz_id; ?>"><?php echo $quiz_description; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <hr>
                            <div class = "form-group">
                                <label> Question Description </label>
                                <textarea class = "form-control" required name = "question_description"></textarea>
                            </div>
                            <div class = "form-group">
                                <label> Choice 1 </label>
                                <input type = "text" class = "form-control" required name = "choice_1_description">
                            </div>
                            <div class = "form-group">
                                <label> Choice 2 </label>
                                <input type = "text" class = "form-control" required name = "choice_2_description">
                            </div>
                            <div class = "form-group">
                                <label> Choice 3 </label>
                                <input type = "text" class = "form-control" required name = "choice_3_description">
                            </div>
                            <div class = "form-group">
                                <label> Choice 4 </label>
                                <input type = "text" class = "form-control" required name = "choice_4_description">
                            </div>
                            <div class = "form-group">
                                <label> Answer </label>
                                <input type = "text" class = "form-control" required name = "question_answer">
                            </div>
                            <input type = "hidden" name = "choice_1_id" value = "1">
                            <input type = "hidden" name = "choice_2_id" value = "2">
                            <input type = "hidden" name = "choice_3_id" value = "3">
                            <input type = "hidden" name = "choice_4_id" value = "4">
                            <center>
                                <button type = "submit" class = "btn btn-primary" name = "Submit_Question"> Submit Question </button>
                            </center>
                        </form> 
                    </div>
                    <div class = "modal-footer"></div>
                </div>
            </div>
        </div>
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
                        $query = mysqli_query($connect, "
                            select * from score_table
                            inner join quiz_table
                            on quiz_table.quiz_id = score_table.quiz_id
                            inner join section_info_table
                            on score_table.section_info_id = section_info_table.section_info_id
                            inner join section_table
                            on section_info_table.section_id = section_table.section_id
                            inner join teacher_table
                            on section_table.teacher_id = teacher_table.teacher_id;
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
<?php
    if(isset($_POST['Submit_Question'])) {
        $quiz_id = mysqli_real_escape_string($connect, $_POST['quiz_id']);
        $question_description = mysqli_real_escape_string($connect, $_POST['question_description']);
        $choice_1_description = mysqli_real_escape_string($connect, $_POST['choice_1_description']);
        $choice_2_description = mysqli_real_escape_string($connect, $_POST['choice_2_description']);
        $choice_3_description = mysqli_real_escape_string($connect, $_POST['choice_3_description']);
        $choice_4_description = mysqli_real_escape_string($connect, $_POST['choice_4_description']);
        $choice_1_id = mysqli_real_escape_string($connect, $_POST['choice_1_id']);
        $choice_2_id = mysqli_real_escape_string($connect, $_POST['choice_2_id']);
        $choice_3_id = mysqli_real_escape_string($connect, $_POST['choice_3_id']);
        $choice_4_id = mysqli_real_escape_string($connect, $_POST['choice_4_id']);
        $question_answer = mysqli_real_escape_string($connect, $_POST['question_answer']);
        $query = mysqli_query($connect, "
            insert into question_table
            (question_id, question_description, quiz_id, question_answer)
            values
            ('','$question_description', '$quiz_id', '$question_answer');
        ");
        $query = mysqli_query($connect, "
            select * from question_table
            order by question_id
            desc
            limit 1;
        ");
        while($fetch = mysqli_fetch_array($query)) {
            $question_id = $fetch['question_id'];
        }
        $query = mysqli_query($connect, "
            insert into choices_table
            (choices_id, question_id, choices_1_description, choices_2_description, choices_3_description, choices_4_description, choices_1_id, choices_2_id, choices_3_id, choices_4_id)
            values
            ('','$question_id', '$choice_1_description', '$choice_2_description', '$choice_3_description', '$choice_4_description', '$choice_1_id', '$choice_2_id', '$choice_3_id', '$choice_4_id');
        ");
        echo "
            <script>
                window.open('scores.php?action=question_added','_self');
            </script>
        ";
    }
    if(isset($_POST['savequiz'])) {
        $quiz = $_POST['quiz'];
        $query = mysqli_query($connect, "
            insert into quiz_table
            (quiz_id, quiz_description)
            values ('','$quiz');
        ");
        echo "
            <script>
                window.open('scores.php?action=quiz_added','_self');
            </script>
        ";
    }
?>
<script>
    $(document).ready(function() {
        $('#score_table').DataTable({
            stateSave: true
        });
    });
</script>