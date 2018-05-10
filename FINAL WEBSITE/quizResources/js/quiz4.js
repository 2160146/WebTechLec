	var score = 0;
	var checker = new Array();
	$('.drag-source').draggable(
		{ snap: '.drop-target' , revert : function(event, ui) {
            $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };
            return !event;
        } }	 
	);

	$('.drop-target').droppable(
		{ accept: '.drag-source', drop : function(event, ui) {
			var draggableId = ui.draggable.attr("id");
			var droppableId = $(this).attr("id");
			if (draggableId == droppableId) {
				updateTracker(draggableId, 1);
			} else {
				updateTracker(draggableId, 0);
			}
		}, out : function(event, ui) {
			updateTracker(($(this).attr("id")), 0);
		} }
	);
	
	function updateTracker (index, value) {
		checker[index] = value;
		console.log(checker);
	}
	
	function checkAnswers() {
		for (i = 0; i < checker.length; i++) {
			if(checker[i] == 1) {
				score++;
			}
		}
		alert(score);
		location.reload();
	}	



var answers = {
    "q1": ["Hakon Wium Lie", "hakon wium lie"],
    "q2": ["Selector", "selector"],
    "q3": ["Selector Syntax", "selector syntax"],
    "q4": ["Combinators", "combinators"],
    "q5": ["Class Selector", "class selector"],
    "q6": ["ID Selector", "id selector"],
    "q7": ["CSS Preprocessors", "css preprocessors"],
    "q8": ["CSS Polyfills", "css polyfills"],
    "q9": ["Strings ", "strings"],
    "q10": ["Percentages", "percentages"],
    "q11": ["Client Side Web Scripting", "client side web scripting"],
    "q12": ["Inline scripts", "inline scripts"],
    "q13": ["Document Object Model", "document object model"],
    "q14": ["Onclick Event Type", "onclick event type"],
    "q15": ["Asynchronous JavaScript And XML", "asynchronous javascript and XML"],
    "q16": ["Synchronous", "synchronous"],
    "q17": ["Callback", "callback"],
    "q18": ["Nesting functions", "nesting functions"],
    "q19": ["Uncle Ben", "uncle ben"],
    "q20": ["Noscript", "noscript"]
};

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
                    + '<h1 class="text-light">Your Score is : ' + score + ' / 20</h1><br>'
                    + '<input class="btn btn-lg btn-light mx-1" type="button" value="GO BACK TO QUIZ" onClick="window.location.reload()">'
                + '</div>'
            + '</div>'
        + '</div>'
}