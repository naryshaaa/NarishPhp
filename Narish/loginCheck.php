<?php 

session_start();

	function displayAccount($txtusername, $txtpassword) {
		//echo $_GET["txtUN"];
	   // $txtusername = $_GET['txtUN'];
	    //$txtpassword = $_GET['txtPW'];

	  //  echo($txtusername); 

	};

	 $basedUser = "narish@nats.com";
	 $basedPW = "pass01";

	$txtUsername = $_POST["txtUN"];
	$txtPassword = $_POST["txtPW"];

	

	//echo($txtUsername);
	//echo($txtPassword);

	if (empty($txtUsername) || empty($txtPassword)) {
    	echo "walang laman";
    	header( 'Location: /NarishPhp/narish/index.php' ) ;
	}

	else{
		if (($basedUser == $txtUsername) and ($basedPW == $txtPassword)){
			echo "equal username & password";
		}
		else{
			echo "invalid username or password";
		}
	}


?>