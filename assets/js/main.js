/*
	Communication Style Quiz
	(c) Tina Anastopoulos 2016-2017
*/


var i = 1;
var cSlide = 0, pSlide;
var slides = ['#quest1','#quest2','#quest3','#quest4','#quest5',
							'#quest6','#quest7','#quest8','#quest9','#quest10',
							'#quest11','#quest12','#quest13','#quest14','#quest15',
						 '#quest16','#quest17','#quest18','#quest19','#quest20'];
$(".btn-score").hide();

function nextSlide() {
		$("#error").hide();
		pSlide = cSlide++;
		if(cSlide>19){ 
			$(".container").hide();
			$("footer").hide();
			$(".btn-score").show();
		}
		$(slides[pSlide]).hide();
		$(slides[cSlide]).show();
		
}

function advanceSlide() {
	var question = 'input:radio[name=question-'+i+'-answers]:checked';
	var checkQuestion	= $(question).val();
	if(checkQuestion === undefined) {
		$("#error").show();
   } else {
		nextSlide();
		i++;
	}
}
