var textdisplay = "";

var answers = new Array(20);

answers[0] = "1. The correct answer is : TRUE";
answers[1] = "2. The correct answer is : TRUE";
answers[2] = "3. The correct answer is : FALSE";
answers[3] = "4. The correct answer is : FALSE";
answers[4] = "5. The correct answer is : TRUE";
answers[5] = "6. The correct answer is : FALSE";
answers[6] = "7. The correct answer is : TRUE";
answers[7] = "8. The correct answer is : FALSE";
answers[8] = "9. The correct answer is : TRUE";
answers[9] = "10. The correct answer is : TRUE";
answers[10] = "11. The correct answer is : TRUE";
answers[11] = "12. The correct answer is : TRUE";
answers[12] = "13. The correct answer is : FALSE";
answers[13] = "14. The correct answer is : TRUE";
answers[14] = "15. The correct answer is : FALSE";
answers[15] = "16. The correct answer is : FALSE";
answers[16] = "17. The correct answer is : TRUE";
answers[17] = "18. The correct answer is : TRUE";
answers[18] = "19. The correct answer is : FALSE";
answers[19] = "20. The correct answer is : TRUE";

var questions = new Array(20);
questions[0] = "tf1";
questions[1] = "tf2";
questions[2] = "tf3";
questions[3] = "tf4";
questions[4] = "tf5";
questions[5] = "tf6";
questions[6] = "tf7";
questions[7] = "tf8";
questions[8] = "tf9";
questions[9] = "tf10";
questions[10] = "tf11";
questions[11] = "tf12";
questions[12] = "tf13";
questions[13] = "tf14";
questions[14] = "tf15";
questions[15] = "tf16";
questions[16] = "tf17";
questions[17] = "tf18";
questions[18] = "tf19";
questions[19] = "tf20";

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
	document.getElementById("showScore").innerHTML = "Your score is: " + score + "/" + questions.length;
	
}


     
$("form").on("submit", function(e){
    e.preventDefault();
    checkAllQs()
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
                    + '<h1 class="display-3 mb-4 text-primary">Midterm Quiz Result</h1>'
                    + '<h1 class="text-light">Your Score is : ' + score + ' / 20</h1>'
                    + '<input class="btn btn-lg btn-primary mx-1" type="button" value="Go Back!" onClick="window.location.reload()">'
                + '</div>'
            + '</div>'
        + '</div>'
}