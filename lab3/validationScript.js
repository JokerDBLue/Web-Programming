var nume = document.getElementById("nume");
var cerc1 = document.getElementById("1");
var numeValid = 0;

var prenume = document.getElementById("prenume");
var cerc2 = document.getElementById("2");
var prenumeValid = 0;

var parola = document.getElementById("parola");
var cerc3 = document.getElementById("3");
var parolaValid = 0;

var telefon = document.getElementById("telefon");
var cerc4 = document.getElementById("4");
var telValid = 0;

var mail = document.getElementById("mail");
var cerc5 = document.getElementById("5");
var mailValid = 0;

var cerc6 = document.getElementById("6");
var dataValid = 0;

nume.addEventListener("input", function (event){
	var re = /^[a-z0-9]+$/;
	if (re.test(nume.value)){
		cerc1.style.backgroundColor = "#00ff00";
		numeValid = 1;
	} else{
		cerc1.style.backgroundColor = "#ff0000";
		numeValid = 0;
	}
});

prenume.addEventListener("input", function (event){
	var re = /^[a-z0-9]+$/;
	if (re.test(prenume.value)){
		cerc2.style.backgroundColor = "#00ff00";
		prenumeValid = 1;
	} else{
		cerc2.style.backgroundColor = "#ff0000";
		prenumeValid = 0;
	}
});

parola.addEventListener("input", function (event){
	var re = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!])/;
	if (re.test(parola.value)){
		cerc3.style.backgroundColor = "#00ff00";
		parolaValid = 1;
	} else{
		cerc3.style.backgroundColor = "#ff0000";
		parolaValid = 0;
	}
});

telefon.addEventListener("input", function (event){
	var re = /^[\(]\+[0-9][0-9][\)]+[0-9][0-9][0-9]\s[0-9][0-9][0-9]\s[0-9][0-9][0-9]$/;
	if (re.test(telefon.value)){
		cerc4.style.backgroundColor = "#00ff00";
		telValid = 1;
	} else{
		cerc4.style.backgroundColor = "#ff0000";
		telValid = 0;
	}
});

mail.addEventListener("input", function (event){
	var re = /^[a-z0-9]+@[a-z0-9.]+\.[a-z]{2,4}$/;
	if (re.test(mail.value)){
		cerc5.style.backgroundColor = "#00ff00";
		mailValid = 1;
	} else{
		cerc5.style.backgroundColor = "#ff0000";
		mailValid = 0;
	}
});

function valideaza(data, format){
	var re;
	if (format == "zz/ll/aaaa"){
		re = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{4}$/;
	}
	else if (format == "ll/zz/aaaa"){
		re = /^(0?[1-9]|1[012])[\/](0?[1-9]|[12][0-9]|3[01])[\/]\d{4}$/;
	}
	else{
		re = /^(0?[1-9]|[12][0-9]|3[01])[\/](0?[1-9]|1[012])[\/]\d{2}$/;
	}
	if (re.test(data)){
		cerc6.style.backgroundColor = "#00ff00";
		dataValid = 1;
	} else{
		cerc6.style.backgroundColor = "#ff0000";
		dataValid = 0;
	}
}

function validateAll(){
	if (numeValid == 1 && prenumeValid == 1 && parolaValid == 1 && mailValid == 1 && telValid == 1 && dataValid == 1){
		alert("Totul e bine");
	}
	else{
		alert("Fiecare bulina trebuie sa fie verde");
	}
}