$(document).ready(function(){
	$("p").hide();
	$("#mybutton").click(function(){
		// var username=$("#username").val();
		// $("p").show();
		// $("p").text(username);
		$.ajax({
			url:"demo.txt",
			success:function(data)
			{
				alert("success");
			}


		});
	});
});