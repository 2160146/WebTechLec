<?php
    require_once 'conn.php' ;
?>
<!DOCTYPE html>
<html>
<title>True or False Quiz</title>
    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/quiz2.css">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <script src="quizResources/js/scroll.js" type="text/javascript"></script>    
  <script src="quizResources/js/quiz2.js" type="text/javascript"></script> 
  <link rel="icon" href="images/icon.ico" />    
</head>

 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-rebel"></i><b>&nbsp; TRUE OR FALSE</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="index.html"><i class="fa d-inline fa-lg fa-home"></i><b>&nbsp;HOME</b></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="quiz.html"><i class="fa d-inline fa-lg fa-question"></i><b>&nbsp; BACK TO QUIZ</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<body class="self">
    <form action = "quiz_result.php" method="post" id="quiz">
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
        
            <br><div class="form-group w-100 text-center"><input type="submit" id="submit" value="Submit" onClick="checkAllQs()" class="btn btn-lg btn-primary mx-1"/></div>
    </form>
        <audio src="audio/force.mp3" autoplay="autoplay" loop="loop"></audio>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa d-inline fa-lg fa-chevron-circle-up"></i></button>

</body>

</html>