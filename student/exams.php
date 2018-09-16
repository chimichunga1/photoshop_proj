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
    <li class = "active"> <a href = "exams.php"> <span class = "fa fa-pencil-alt"> </span> Exams </a> </li>
    <li> <a href = "results.php"> <span class = "fa fa-question"> </span> Results </a> </li>
    <li> <a href = "sections.php"> <span class = "fa fa-home"> </span> Sections </a> </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li> <a href = "settings.php"> <span class = "fa fa-cog"></span> Settings </a> </li>
    <li> <a href = "signout.php"> <span class = "fa fa-sign-out-alt"></span> Sign out </a> </li>
</ul>
</div>
</div>
</nav>
        <div class = "container-fluid">
            <div class = "col-xs-3">
                <div class = 'well'>
                    <ul class = "list-group">
                        <?php
                        $query = mysqli_query($connect, "
                            select * from quiz_table;
                        ");
                        while($fetch = mysqli_fetch_array($query)) {
                            $id = $fetch['quiz_id'];
                            $description = $fetch['quiz_description'];
                        ?>
                        <li class = "list-group-item"> <a href = "exams.php?quiz_id=<?php echo $id; ?>"> <span class = "fa fa-pencil-alt"> </span> Take quiz # <?php echo $id; ?> <strong> <?php echo $description; ?> </strong> </a> </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class = "col-xs-9">
                <?php

                if(isset($_GET['action'])) {
                    if($_GET['action'] == "submitted") {
                        ?>
            <div class = "alert alert-success">
                <h3> <span class = 'fa fa-check'> </span> You have submitted your exam </h3>
            </div>
                        <?php
                    }
                }
                ?>
                <?php
                    if(!isset($_GET['quiz_id'])) {
                        ?>
                
                <div class = 'alert alert-info'>
                    <h3> <span class = "fa fa-arrow-left"> </span> Please select a quiz </h3>
                </div>
                        <?php
                    }
                else {
                    ?>
                <div class = "well">
                    <form method = "post" action = "">
                        <input type = "hidden" name = "quiz_id" value = "<?php echo $_GET['quiz_id']; ?>">
                    <?php
                        $Num = 1;
                        $quiz_id = mysqli_real_escape_string($connect, $_GET['quiz_id']);
                        $Query = mysqli_query($connect, "
                            select * from question_table
                            where
                            quiz_id = '$quiz_id'
                            order by RAND();
                        ");
                    while($fetch = mysqli_fetch_array($Query)) {
                        $question_id = $fetch['question_id'];
                        $question_answer = $fetch['question_answer'];
                        $question_description = $fetch['question_description'];
                        ?>
                        <h6> <strong> <?php echo $Num; ?>.  </strong> <?php echo $question_description; ?> </h6>
                        <div class = "form-group">
                                <?php
                        $query2 = mysqli_query($connect, "
                            select * from choices_table
                            where question_id = '$question_id';
                        ");
                        while($fetch2 = mysqli_fetch_array($query2)) {
                            $choice1 = $fetch2['choices_1_description'];
                            $choice2 = $fetch2['choices_2_description'];
                            $choice3 = $fetch2['choices_3_description'];
                            $choice4 = $fetch2['choices_4_description'];
                            $choice1_id = $fetch2['choices_1_id'];
                            $choice2_id = $fetch2['choices_2_id'];
                            $choice3_id = $fetch2['choices_3_id'];
                            $choice4_id = $fetch2['choices_4_id'];
                        ?>
                            <div class = "radio">
                                <label> <input type = "radio" name = "Ans<?php echo $question_id; ?>" value = "<?php echo $choice1_id; ?>" required> <?php echo $choice1; ?> </label>
                            </div>
                            <div class = "radio">
                                <label> <input type = "radio" name = "Ans<?php echo $question_id; ?>" value = "<?php echo $choice2_id; ?>" required> <?php echo $choice2; ?> </label>
                            </div>
                            <div class = "radio">
                                <label> <input type = "radio" name = "Ans<?php echo $question_id; ?>" value = "<?php echo $choice3_id; ?>" required> <?php echo $choice3; ?> </label>
                            </div>
                            <div class = "radio">
                                <label> <input type = "radio" name = "Ans<?php echo $question_id; ?>" value = "<?php echo $choice4_id; ?>" required> <?php echo $choice4; ?> </label>
                            </div>
                        <?php
                        }
                                ?>
                        </div>
                        <?php
                        $Num++;
                    }
                    ?>
                        <center>
                            <button type = "submit" class = "btn btn-primary" name = "submitexam"> Submit Exam </button>
                        </center>
                    </form>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['submitexam'])) {
        $Score = 0;
        $quiz_id = $_POST['quiz_id'];
        $student_id = $_SESSION['user_data']['id'];
        
        $query = mysqli_query($connect , "
            select * from question_table
            where
            quiz_id = '$quiz_id';
        ");
        $Num = 0;
        while($fetch = mysqli_fetch_array($query)) {
            $answer = $fetch['question_answer'];
            $question_id = $fetch['question_id'];
            $answer_2 = mysqli_real_escape_string($connect, $_POST['Ans' . $question_id]);
            if($answer == $answer_2) {
                $Score++;
            }
            $Num++;
        }
        if($Score == $Num) {
            $Remarks = "Perfect";
        }
        else if($Score == 0) {
            $Remarks = "Poor";
        }
        else if($Score <= ($Num - 1)) {
            $Remarks = "Good";
        }
        else if($Score >= 1) {
            $Remarks = "Bad";
        }
        $query = mysqli_query($connect, "
            select * from section_info_table
            where student_id = '$student_id';
        ");
        while($fetch = mysqli_fetch_array($query)) {
            $section_info_id = $fetch['section_info_id'];
        }
        $query = mysqli_query($connect, "
            insert into score_table
            (score_id, score_info, score_remarks, quiz_id, student_id, section_info_id)
            values
            ('','$Score', '$Remarks', '$quiz_id', '$student_id', '$section_info_id');
        ");
        echo "
            <script>
                window.open('exams.php?action=submitted','_self');
            </script>
        ";
    }
?>