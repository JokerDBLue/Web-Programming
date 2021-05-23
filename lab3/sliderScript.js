var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  //dots[slideIndex-1].className += " active";
}

var id_interval;

function play(){
	var play_stop = document.getElementById("play");
	var seconds = document.getElementById("sec");
	var slides = document.getElementsByClassName("mySlides");
	if (play_stop.textContent == "|>"){
		play_stop.textContent = "||";
		seconds.disabled = true;
		id_interval = setInterval(function () {
			if (slideIndex == slides.length){ 
				if(document.getElementById("repeat").checked == true)
					plusSlides(1);
			}else{
				plusSlides(1);
			}
			}, 
			Number(seconds.value)*1000
			)}
	else{
		play_stop.textContent = "|>";
		seconds.disabled = false;
		clearInterval(id_interval);
	}
}