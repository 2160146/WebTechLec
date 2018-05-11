<!DOCTYPE html>
<?php
    require 'conn.php';
		session_start();
?>
<html lang="en">
<head>
    <title>Identification Quiz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quizResources/bootstrap/css/bootstrap.min.css">
    <link href="quizResources/css/style.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="quizResources/bootstrap/js/jquery-3.1.0.min.js"></script>
    <script src="quizResources/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/theme.css" type="text/css">
    <script src="quizResources/js/scroll.js" type="text/javascript"></script>
</head>
<body id="quiz_background">
 <nav class="navbar navbar-expand-md bg-warning navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-rebel"></i><b>&nbsp; IDENTIFICATION</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
             <a class="nav-link text-dark" href="index.html"><i class="fa d-inline fa-lg fa-home"></i><b>&nbsp; HOME</b></a>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link text-dark" href="quiz.html"><i class="fa d-inline fa-lg fa-question"></i><b>&nbsp; BACK TO QUIZ</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-white opaque-overlay" id="question" style="background-image: url(&quot;images/webtech_background.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-1" style="background-image: url('images/webtech_background.jpg');"></div>
        <div class="col-md-10 p-5 bg-dark" style="background-color:rgb(0, 0, 0,0.5)">
          <h1 class="text-warning">IDENTIFICATION QUIZ</h1>
          <p class="lead mb-4"></p>
          <form class="" method="post" action="">
            <?php
              $ques = $mysqli->query("select * from ques_ans natural join answer") or die($mysqli->error());  
              $q = 1;
              while($row = mysqli_fetch_array($ques)) {
									if ($row['type'] === 'iden') {
										echo '<div class="form-group w-100"> <label id="quesNo">Question '.$q.' : '.$row['question'].'</label>
              <br><span id="hint">'.$row['hint'].'</span>
              <input type="text" class="form-control" placeholder="Enter your answer here" id="q'.$q.'" name="q'.$q.'"> </div><br>';		
									}
									$q++;
              }
            ?>
            <div class="form-group w-100 text-center">
								<input type="submit" id="submit" value="SUBMIT" class="btn btn-lg btn-warning text-dark mx-1"></div>
          </form>
        </div>
        <div class="col-md-1" style="background-image: url('images/webtech_background.jpg');"></div>
      </div>
      <div class="row"> </div>
    </div>
		</div>
  <div class="py-5 text-center cover bg-dark" id="test" style="display: none;"></div>
    <audio src="audio/force.mp3" autoplay="autoplay"></audio>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa d-inline fa-lg fa-chevron-circle-up"></i></button>

		<script>
				<?php
	echo "var answers = {";
			$ques = $mysqli->query("select * from ques_ans natural join answer") or die($mysqli->error());  
			$q = 1;
			while($row = mysqli_fetch_array($ques)) {
					if ($row['type'] === 'iden') {	
						echo '"q'.$q.'": ["'.$row['answer'].'","'.strtolower($row['answer']).'"],';
					}
					$q++;
			}
echo "};"?>

var score = 0;

function checkAnswers(){
    $("input[type='text']").each(function(){
        console.log($.inArray(this.value, answers[this.id]));
        this.value = (this.value).toLowerCase();
        if($.inArray(this.value, answers[this.id]) !== -1){
            score++;
        }
    })
}
     
     
$("form").on("submit", function(e){
    e.preventDefault();
    checkAnswers();
    $("#question").hide();
    $("#test").show();
    displayScore();
});

function displayScore() {
    var getDiv = document.getElementById('test');
    getDiv.innerHTML += 
        '<div class="container py-5">'
            + '<div class="row">'
                + '<div class="col-md-12">'
                    + '<h1 class="display-3 mb-4 text-warning">IDENTIFICATION QUIZ RESULT</h1>'
                    + '<h1 class="text-light">Your Score is : ' + score + ' / <?php
		$ques = $mysqli->query("select * from ques_ans natural join answer where type='iden'") or die($mysqli->error());
		echo mysqli_num_rows($ques) ;
				?></h1><br>'
                    + '<input class="btn btn-lg btn-light mx-1" type="button" value="GO BACK TO QUIZ" onClick="window.location.reload()">'
                + '</div>'
            + '</div>'
        + '</div>'
}
		</script>
</body>
</html>