$(document).ready(function(){
	$("#test").click(function(){
		window.open("https://www.google.com");
	});


	$("#clicker").click(function(){
		$("#hiding").hide();
	});

	$("#show").click(function(){
		$("#hiding").show();
	});

	$("#btnToLogin").click(function(){
		if($("#user").val().length == 0 || $("#password").val().length ==0){
			alert("username or password is null");
		}
		else{
			alert("login successful");
		}
		//alert("Login");
	});

	$("#btnToAdd").click(function(){
		if($("#user").val().length == 0 || $("#password").val().length == 0){
			alert("username or password is null");
		}
		else{
			alert("Successfully added user");
		}
		//alert("Add Person");
	});

	$("#btnToDelete").click(function(){
		if($("#user").val().length == 0 || $("#password").val().length == 0){
			alert("Username or password is Null");
		}
		else{
			alert("Deleted User Successfully");
		}
		//alert("Delete User");
	});
});