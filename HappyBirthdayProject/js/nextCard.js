let button = $(".nextCard");
let cardPresentation = $(".firstLevel");
let cardFelicitation = $(".secondLevel");
let val = false;

button.click(function() {
	if (val == false) {
		cardPresentation.fadeOut();
		cardPresentation.addClass("change");
		cardFelicitation.fadeIn();
		val = true;
	}
	else if(val == true){
		cardFelicitation.fadeOut()
		cardPresentation.removeClass("change")
		cardPresentation.fadeIn()
		val = false;
	}
})

