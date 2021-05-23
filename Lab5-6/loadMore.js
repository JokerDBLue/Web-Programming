$(document).ready(function() {
	var commentCount = 2;
	$("button").click(function() {
		commentCount = commentCount + 2;
		$("#articolele").load("load-articles.php", {
			commentNewCount: commentCount
		});
	});
});