$(document).ready(function(){

	$("#confirmedPass").val("");

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

	$("#LoginHere").click(function(){
		if($("#unID").val().length == 0 || $("#pwID").val().length ==0 ){
			alert("Username or Password is null");

		}
		else{
			alert("login check ready");
		}
	});

	$("#btnAddMember").click(function(){
		if($("#newUserID").val().length == 0 || $("#newPassID").val().length == 0 || $("#confirmPassID").val().length == 0){
			alert("Null Inputs");

		}
		else{
			if($("#newPassID").val().length != $("#confirmPassID").val().length){
				alert("new password is not equal to confirm password");
			}
			else{

				var conPass = $("#confirmPassID").val();
				//conPass= 

				$("#confirmedPass").val(conPass);
				
				var saveData = JSON.parse(localStorage.saveData || null) || {};
				alert(saveData);

			}
			
			
		}
	});
});