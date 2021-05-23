function sortTable(n, id, type) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById(id);
  switching = true;
  
  dir = "asc"; 
  
  while (switching) {
    
    switching = false;
    rows = table.rows;
    
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (type == 'text' && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
		if (type == 'numeric' && Number(x.innerHTML) > Number(y.innerHTML)) {
			shouldSwitch = true;
			break;
		}
      } else if (dir == "desc") {
        if (type == 'text' && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
		if (type == 'numeric' && Number(x.innerHTML) < Number(y.innerHTML)) {
			shouldSwitch = true;
			break;
		}
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      
      switchcount ++;      
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}



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
