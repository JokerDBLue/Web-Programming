//Dropdown-uri in cascada
var subjectObject = {
    "Bihor": ["Oradea", "Alesd", "Nucet", "Săcueni"],
    "Cluj": ["Cluj-Napoca", "Huedin", "Bădeni", "Float"],
    "Brașov": ["Brașov", "Ghimbav", "Râșnov", "Rupea", "Victoria", "Zărnești", "Predeal"],
}
window.onload = function() {
  var judetSel = document.getElementById("judete");
  var orasSel = document.getElementById("orase");
  for (var x in subjectObject) {
    judetSel.options[judetSel.options.length] = new Option(x, x);
  }
  judetSel.onchange = function() {
    orasSel.length = 1;
	var z = subjectObject[this.value]
    for (var i = 0; i < z.length; i++) {
      orasSel.options[orasSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
