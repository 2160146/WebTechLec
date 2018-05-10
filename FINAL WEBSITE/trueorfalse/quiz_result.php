<?php
    require_once 'conn.php';
   /* $result = $mysqli->query("select * from acc_data natural join accounts order by acc_name") or die($mysqli->error());
    $row = mysqli_fetch_array($result);*/
    $result = $mysqli->query("SELECT * FROM ques_ans NATURAL JOIN answer where type='tf'") or die($mysqli->error());
    $counter = 1;
    $totalCorrect = 0;
    while($row = mysqli_fetch_array($result)) {
        $string = 'question-'.$counter.'-answers';
        if($_POST[$string] == $row['answer']) {
            $totalCorrect++;
        }
        $counter++;
    }
    $totalItems = mysqli_num_rows($result); 
    echo "<div id='results'>$totalCorrect / $totalItems </div>";
    
?>