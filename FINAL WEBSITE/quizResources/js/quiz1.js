var textdisplay = "";

var answers = new Array(20);

answers[0] = "1. The correct answer is : Hyper Text Markup Language";
answers[1] = "2. The correct answer is : HTML";
answers[2] = "3. The correct answer is : Tim Berners-Lee";
answers[3] = "4. The correct answer is : World Wide Web";
answers[4] = "5. The correct answer is : 1989";
answers[5] = "6. The correct answer is : WWW";
answers[6] = "7. The correct answer is : Conseil Européen pour la Recherche Nucléaire";
answers[7] = "8. The correct answer is : Hyper Text Transfer Protocol";
answers[8] = "9. The correct answer is : GET";
answers[9] = "10. The correct answer is : PUT";
answers[10] = "11. The correct answer is : None of the Above";
answers[11] = "12. The correct answer is : HEAD";
answers[12] = "13. The correct answer is : PUT";
answers[13] = "14. The correct answer is : Transmission Control Protocol";
answers[14] = "15. The correct answer is : CONNECT";
answers[15] = "16. The correct answer is : WWW";
answers[16] = "17. The correct answer is : HTML";
answers[17] = "18. The correct answer is : 1991";
answers[18] = "19. The correct answer is : Dave Raggett";
answers[19] = "20. The correct answer is : 2014";

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
questions[10] = "ques11";
questions[11] = "ques12";
questions[12] = "ques13";
questions[13] = "ques14";
questions[14] = "ques15";
questions[15] = "ques16";
questions[16] = "ques17";
questions[17] = "ques18";
questions[18] = "ques19";
questions[19] = "ques20";

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
                    + '<h1 class="text-light">Your Score is : ' + score + ' / 20</h1><br>'
                    + '<input class="btn btn-lg btn-success mx-1" type="button" value="GO BACK TO MULTIPLE CHOICE QUIZ" onClick="window.location.reload()">'
                + '</div>'
            + '</div>'
        + '</div>';
    getDiv.style.display = 'block';
    getDiv.style.paddingTop = '10%';
    
}
