<?php
    require_once 'conn.php' ;
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<?php
    if(isset($_POST['submit'])){
        require 'quiz_result.php';
    }
?>
<body>
    <form action = "quiz2.php" method="post" id="quiz">
        <ul>
            <?php
                $result = $mysqli->query("SELECT * FROM ques_ans NATURAL JOIN answer where type='tf'") or die($mysqli->error());
                $counter = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo '<li>';
                    echo '<h3>'.$row['question'].'</h3>';
                    echo '<div>';
                    echo '<input type="radio" name="question-'.$counter.'-answers" id="question-'.$counter.'-answers-T" value="T" required/>';
                    echo '<label for="question-'.$counter.'-answers-T">TRUE</label>';
                    echo '<input type="radio" name="question-'.$counter.'-answers" id="question-'.$counter.'-answers-F" value="F" required/>';
                    echo '<label for="question-'.$counter.'-answers-F">FALSE</label>';
                    echo '</div>';
                    echo '</li>';
                    $counter++;
                }
            ?>
        </ul>
        
        <input type="submit" value="Submit Quiz" name="submit"/>
    </form>
    
</body>

</html>