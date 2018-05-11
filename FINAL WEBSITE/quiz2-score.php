<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <?php
        if(isset($_POST['submit'])) {
            require 'quizResources/php/quiz_result.php';
        }
    ?>
<body class="self">
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
    
        <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="display-3 mb-4 text-success">TRUE OR FALSE QUIZ RESULT</h1>
                        <h1 class="text-light">Your Score is : 
                            <?php
                            echo $_SESSION['score'].'/'.$_SESSION['total'];
                            ?></h1><br>
                        <input class="btn btn-lg btn-success mx-1" type="button" value="GO BACK TO TRUE OR FALSE QUIZ" onClick="window.location.reload()">
                    </div>
                </div>
            </div>;
    </body>
</html>