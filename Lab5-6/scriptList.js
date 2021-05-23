var ord = document.getElementById("myList");
var lis = ord.getElementsByTagName("li");
/*
lis[0].style.visibility = 'visible';
for(var i=1; i < lis.length; i++){
    lis[i].style.visibility = 'hidden';
}



function moveRight(i, goRight){
	lis[i].style.transition = 'left 2s linear';
	lis[i].style.left = `${goRight}px`;
}

function moveLeft(i){
	lis[i].style.transition = 'left 2s';
	lis[i].style.left = '0';
}

var i = 0;
setInterval(frame, 2000);
var goRight = 50;
function frame() {
	if(i == 0){
		lis[lis.length - 1].style.visibility = 'hidden';
	}
	else{
		lis[i - 1].style.visibility = 'hidden';
	}
	lis[i].style.visibility = 'visible';
	
	moveRight(i, goRight)
	i++;
	if (i == lis.length){
		if (goRight == 50)
			goRight = 0;
		else
			goRight = 50
		i = 0;
	}
 }
*/

//Versiunea 2 pt animatia listei
for(var i=1; i < lis.length; i++){
    lis[i].classList.add('visuallyhidden');
	lis[i].classList.add('hidden');
}

var i = 1;
function frame(index) {
	if(index == 0){
		lis[(lis.length - 1)].classList.add('visuallyhidden');
		setTimeout(function () {
		  lis[(lis.length - 1)].classList.add('hidden');
		}, 1000);
	}
	else{
		lis[index - 1].classList.add('visuallyhidden');		
		setTimeout(function () {
		  lis[index - 1].classList.add('hidden');
		}, 1000);
	}
	lis[index].classList.remove('hidden');
	setTimeout(function () {
      lis[index].classList.remove('visuallyhidden');
    }, 1010);
	
}

var id = setInterval(function () {console.log(i); frame(i); i++;
	if (i >= lis.length){
		i = 0;
	}}, 10000);

var nextClicked = 1;

function next(){
	clearInterval(id);
	if(i == 0){
		lis[(lis.length - 1)].classList.add('visuallyhidden');
		lis[(lis.length - 1)].classList.add('hidden');
	}
	else{
		lis[i - 1].classList.add('visuallyhidden');
		lis[i - 1].classList.add('hidden');
	}
	lis[i].classList.remove('hidden');
    lis[i].classList.remove('visuallyhidden');
	nextClicked = 1;
	i = i + 1;
	if (i >= lis.length){
		i = 0;
	}
	id = setInterval(function () {console.log(i); frame(i); i++;
		if (i >= lis.length){
			i = 0;
		}}, 10000);
}

function before(){
	clearInterval(id);
	if(nextClicked == 1){
		i = i - 2;
		nextClicked = 0;
	}
	else{
		i = i - 1;
	}
	if(i < 0){
		i = lis.length - 1;
	}
	if(i == lis.length - 1){
		lis[0].classList.add('visuallyhidden');
		lis[0].classList.add('hidden');
	}
	else{
		lis[i + 1].classList.add('visuallyhidden');
		lis[i + 1].classList.add('hidden');
	}
	lis[i].classList.remove('hidden');
    lis[i].classList.remove('visuallyhidden');
	id = setInterval(function () {console.log(i); frame(i); i++;
		if (i >= lis.length){
			i = 0;
		}}, 10000);
}