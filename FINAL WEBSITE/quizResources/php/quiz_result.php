<?php
   /* $result = $mysqli->query("select * from acc_data natural join accounts order by acc_name") or die($mysqli->error());
    $row = mysqli_fetch_array($result);*/
    session_start();
    $result = $mysqli->query("SELECT * FROM ques_ans NATURAL JOIN answer where type='tf'") or die($mysqli->error());
    $counter = 1;
    $totalCorrect = 0;
    while($row = mysqli_fetch_array($result)) {
        $string = 'question-'.$counter.'-answers';
        if (!empty($_POST[$string])) {
            if($_POST[$string] == $row['answer']) {
                $totalCorrect++;
            }    
        }
        $counter++;
    }
    $totalItems = mysqli_num_rows($result);
    $_SESSION['score'] = $totalCorrect;
    $_SESSION['total'] = $totalItems;
    header('location: quiz3-score.php');
?>