$(document).ready(function(){
	var slideIndex = 1;
	var noSlides = 1;
	var imgWidth = 100;
	showSlides(slideIndex);
	
	var idInterval = setInterval(function(){
					showSlides(slideIndex += 1);
					}, Number($("#sec").val()) * 1000);
	
	$("#prev").click(function(){
		showSlides(slideIndex -= 1);
	});
	
	$("#next").click(function(){
		showSlides(slideIndex += 1);
	});
	
	$("#sec").change(function(){
		clearInterval(idInterval);
		idInterval = setInterval(function(){
					showSlides(slideIndex += 1);
					}, Number($(this).val()) * 1000);
	});
	
	$("#nrImg").change(function(){
		noSlides = Number($(this).val());
	});
	
	function showSlides(n) {
		var i;
		var slides = $(".mySlides");
		var order = 1;
		if (n > slides.length) {slideIndex = 1}
		if (n < 1) {slideIndex = slides.length}
		for (i = 0; i < slides.length; i++) {
			$(slides[i]).css("display", "none");
		}
		//De folosit order pentru a le ordona
		for (i = slideIndex - 1; i < slideIndex - 1 + noSlides; i++) {
			if (i >= slides.length){
				$(slides[i - slides.length ]).css({"display": "block", "order" : order.toString(), "width" : "100%"});
			}else{
				$(slides[i]).css({"display": "block", "order" : order.toString(), "width" : "100%"});
			}
			order++;
		}
	}
});