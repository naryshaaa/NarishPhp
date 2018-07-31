<?php 

	$newUser = $_POST["newUser"];
	$newPass = $_POST["confirmedPass"];

	echo $newUser;
	echo $newPass;

	if(empty($newPass) || empty($newUser)){
		header('Location: \NarishPhp\Narish\index.php');
	}

	
	
?>