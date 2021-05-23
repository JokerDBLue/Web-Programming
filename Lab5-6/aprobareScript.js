$(document).ready(function(){
	$(this).on('click', 'button', function(){
		var row = $(this).parent().parent();
		var comanda = $(this).text();
		var id = $(row).find("td:eq(0)").text();
		var email = $(row).find("td:eq(1)").text();
		$("#utilizatori").load("updateDeleteUser.php", {
			updateDelete: comanda,
			idUser: Number(id),
			email: email
		});
		//$(row).remove();
	});
});