var textdisplay = "";

var answers = new Array(20);

answers[0] = "1. The correct answer is : Java Servlet";
answers[1] = "2. The correct answer is : response handling";
answers[2] = "3. The correct answer is : Both (i) and (ii)";
answers[3] = "4. The correct answer is : Both A and B";
answers[4] = "5. The correct answer is : session.setMaxInactiveInterval(interval)";
answers[5] = "6. The correct answer is : request.getHeaderNames()";
answers[6] = "7. The correct answer is : <?php ?>";
answers[7] = "8. The correct answer is : What is her age? \n She is $num years old";
answers[8] = "9. The correct answer is : The doFilter() method is called whenever the servlet being filtered is invoked.";
answers[9] = "10. The correct answer is : None of the above.";

var questions = new Array(20);
questions[0] = "ques1";
questions[1] = "ques2";
questions[2] = "ques3";
questions[3] = "ques4";
questions[4] = "ques5";
questions[5] = "ques6";
questions[6] = "ques7";
questions[7] = "ques8";
questions[8] = "ques9";
questions[9] = "ques10";

var score = 0;
var count = 1;


function checkQs(questionNum){
	var qs = document.getElementsByName(questionNum);
	
	for(var i = 0; i < 3 ; i++){
		if(qs[i].checked){
			if(qs[i].value == "correct"){
				textdisplay = textdisplay + count + "." + "Correct!" + "<br>";
				score++;
			}
			break;
		}
	}
	count++;	
}

function checkAllQs(){
	for(var k = 0; k < questions.length; k++){
		checkQs(questions[k]);
	}
	var ques = document.getElementById("quiz-container");
    ques.style.display = 'none';
    var getDiv = document.getElementById("showScore");
    getDiv.innerHTML += '<div class="container py-5">'
            + '<div class="row">'
                + '<div class="col-md-12 text-center">'
                    + '<h1 class="display-3 mb-4 text-success">MULTIPLE CHOICE QUIZ RESULT</h1>'
                    + '<h1 class="text-light">Your Score is : ' + score + ' / 10</h1><br>'
                    + '<input class="btn btn-lg btn-success mx-1" type="button" value="GO BACK TO MULTIPLE CHOICE QUIZ" onClick="window.location.reload()">'
                + '</div>'
            + '</div>'
        + '</div>';
    getDiv.style.display = 'block';
    getDiv.style.paddingTop = '10%';
    
}
