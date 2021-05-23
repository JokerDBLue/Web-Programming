$(document).ready(function() {
	$("form").submit(function(e) {
		e.preventDefault();
		var titlu = $("#titluStire").val();
		var continut = $("#continut").val();
		var tipStire = $("input[name=tipStire]:checked").val();
		$.post("adaugareStire.php", {
			titlu: titlu,
			continut: continut,
			tipStire: tipStire
		}, function(data, status){
				$("#adaugat").html(data);
				alert(status);
		});
	});
});